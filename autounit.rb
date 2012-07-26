# PHPUnit: http://bit.ly/NYYCWs
# Ruby: http://rubyinstaller.org/ (Mac) *OR* http://rubyinstaller.org/ (Win)
# watchr: gem install watchr
# Growl: http://growl.info/ | http://bit.ly/NYYCWs (Mac) *OR* http://bit.ly/NYYrdF (Win)

# save in same level as 'artisan', then run watchr autounit.rb
# src: http://bit.ly/NYZMRT


watch('(.*.test).php')  { |m| code_changed(m[0]) }

def code_changed(file)
    run "php artisan test"
end

def run(cmd)
    result = `#{cmd}`
    growl result rescue nil
end

def growl(message)
    puts(message)
    message = message.split("\n").last(3);
    growlnotify = `which growlnotify`.chomp

    title = message.find { |e| /FAILURES/ =~ e } ? "FAILURES" : "PASS"
    if title == "FAILURES"
        image = "~/.watchr_images/failed.png"
        info = /\x1b\[37;41m\x1b\[2K(.*)/.match(message[1])[1]
    else
        image = "~/.watchr_images/passed.png"
        info = /\x1b\[30;42m\x1b\[2K(.*)/.match(message[1])[1]
    end

    options = "-w -n Watchr --image '#{File.expand_path(image)}' --html '#{title}'  -m '#{info}'"
    system %(#{growlnotify} #{options} &)
end