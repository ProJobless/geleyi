products = {}
products[:cp_blackdress] = Spree::Product.find_by_name!("C & P Black Dress")
products[:cp_lowtopdress] = Spree::Product.find_by_name!("C & P Low Top Dress")
products[:cp_pinkdress] = Spree::Product.find_by_name!("C & P Pink Dress")
products[:cp_redtop] = Spree::Product.find_by_name!("C & P Red Top")
products[:cp_whiteminidress] = Spree::Product.find_by_name!("C & P White Mini Dress")
products[:cp_whitelowtopwhite] = Spree::Product.find_by_name!("C & P Low top White Dress")


def image(name, type="jpg")
  images_path = Rails.root.join('db','default','spree','images')
  path = images_path + "#{name}.#{type}"
  return false if !File.exist?(path)
  #return File.exist?(path)
  File.open(path)
end

images = {
    products[:cp_blackdress].master => [
        {
            :attachment => image("cp_blackdress_front")
        }
    ],
    products[:cp_lowtopdress].master => [
        {
            :attachment => image("cp_lowtopdress_front")
        }
    ],
    products[:cp_pinkdress].master => [
        {
            :attachment => image("cp_pink_dress_front")
        }
    ],
    products[:cp_redtop].master => [
        {
            :attachment => image("cp_pinkonredtop_front")
        },
        {
            :attachment => image("cp_pinkonredtop_side")
        }
    ],
    products[:cp_whiteminidress].master => [
        {
            :attachment => image("cp_whitemini_front")
        }
    ],
    products[:cp_whitelowtopwhite].master => [
        {
            :attachment => image("cp_lowwhite_front")
        }
    ]
}

#products[:cp_blackdress].variants.each do |variant|
#  color = variant.option_value("dress-color").downcase
#  main_image = image("cp_blackdress_front_#{color}", "jpg")
#  variant.images.create!(:attachment => main_image)
#end

images.each do |variant, attachments|
  attachments.each do |attachment|
    variant.images.create!(attachment)
  end
end

