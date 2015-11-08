#
# Production Configuration
#
# http://sass-lang.com/documentation/file.SASS_REFERENCE.html
#
# This command will help you regenerate without 'compass watch'
#
# $ compass compile -c config_prod.rb --force
#
################################################################################



# 1. Set this to the root of your project when deployed:
http_path = "/"

css_dir = "css"
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "js"

environment = :production

relative_assets = true

sourcemap = false

output_style = :expanded

line_comments = false

# don't touch this
preferred_syntax = :scss
