set :application, "geleyi_eap"
set :repository,  "https://github.com/geleyi/geleyi.git"

set :scm, :git
set :deploy_to, "/home/dele/webapps/geleyi_eap"

role :web, "web347.webfaction.com"                          # Your HTTP server, Apache/etc
role :app, "web347.webfaction.com"                          # This may be the same as your `Web` server
role :db,  "web347.webfaction.com", :primary => true # This is where Rails migrations will run

set :user, "dele"
set :scm_username, "delomos"
set :use_sudo, false
default_run_options[:pty] = true

load 'deploy/assets'
require 'bundler/capistrano'

namespace :deploy do
  desc "Restart ngnix"
  task :restart do
    run "#{deploy_to}/bin/restart"
  end
end