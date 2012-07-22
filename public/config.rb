environment = :development

# Compass plugins.
require 'zurb-foundation'

# paths:
http_path = "/"
css_dir = "css"
sass_dir = "sass"
images_dir = "img"
javascripts_dir = "js"

output_style = (environment == :production) ? :compressed : :expanded
