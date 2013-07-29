size = Spree::OptionType.find_by_presentation!("Size")
color = Spree::OptionType.find_by_presentation!("Color")
textile = Spree::OptionType.find_by_presentation!("Textile")

cp_redtop = Spree::Product.find_by_name!("C & P Red Top")
cp_redtop.option_types = [size, color, textile]
cp_redtop.save!

cp_blackdress = Spree::Product.find_by_name!("C & P Black Dress")
cp_blackdress.option_types = [size, color, textile]
cp_blackdress.save!
