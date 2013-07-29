# Configure Spree Preferences
#
# Note: Initializing preferences available within the Admin will overwrite any changes that were made through the user interface when you restart.
#       If you would like users to be able to update a setting with the Admin it should NOT be set here.
#
# In order to initialize a setting do:
# config.setting_name = 'new value'
Spree.config do |config|

  config.site_name = "Geleyi"
  config.allow_ssl_in_production = false
  config.shipping_instructions = true
  config.logo = 'geleyi/logo.png'
  config.site_url = "eap.geleyi.com" #for EAP

  config.use_s3 = true
  config.s3_bucket = ENV["AMAZON_S3_BUCKET"]
  config.s3_access_key = ENV["AMAZON_S3_ACCESS_KEY"]
  config.s3_secret = ENV["AMAZON_S3_SECRET"]

end

Spree.user_class = "Spree::User"

