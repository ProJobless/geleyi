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
  config.track_inventory_levels = true
  config.shipping_instructions = true
  config.logo = 'geleyi/logo.png'
  config.admin_interface_logo = 'geleyi/logo.png'
  config.site_url = "eap.geleyi.com" #for EAP
  config.default_meta_description = "Shop African Fashion. Meet Emerging Desginers. Discover Your Style."
  config.default_meta_keywords = "african fashion, afican fashion deigners, african fashion platform"

end

Spree.user_class = "Spree::User"

