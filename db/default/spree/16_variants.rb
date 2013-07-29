cp_blackdress = Spree::Product.find_by_name!("C & P Black Dress")
cp_lowtopdress = Spree::Product.find_by_name!("C & P Low Top Dress")
cp_pinkdress = Spree::Product.find_by_name!("C & P Pink Dress")
cp_redtop = Spree::Product.find_by_name!("C & P Red Top")
cp_whiteminidress = Spree::Product.find_by_name!("C & P White Mini Dress")
cp_whitelowtopwhite = Spree::Product.find_by_name!("C & P Low top White Dress")


small = Spree::OptionValue.find_by_name!("Small")
medium = Spree::OptionValue.find_by_name!("Medium")
large = Spree::OptionValue.find_by_name!("Large")
extra_large = Spree::OptionValue.find_by_name!("Extra Large")

red = Spree::OptionValue.find_by_name!("Red")
blue = Spree::OptionValue.find_by_name!("Blue")
green = Spree::OptionValue.find_by_name!("Green")

ankara = Spree::OptionValue.find_by_name!("Ankara")
aso_oke = Spree::OptionValue.find_by_name!("Aso-oke")
adire = Spree::OptionValue.find_by_name!("Adire")

variants = [
  {
    :product => cp_blackdress,
    :option_values => [small, red, ankara],
    :sku => "GYI-00001",
    :cost_price => 10
  },
  {
    :product => cp_blackdress,
    :option_values => [small, blue],
    :sku => "GYI-00002",
    :cost_price => 0
  },
  {
    :product => cp_blackdress,
    :option_values => [small, green, aso_oke],
    :sku => "GYI-00003",
    :cost_price => 12
  },
  {
    :product => cp_blackdress,
    :option_values => [medium, red],
    :sku => "GYI-00004",
    :cost_price => 0
  },
  {
    :product => cp_blackdress,
    :option_values => [medium, blue, ankara],
    :sku => "GYI-00005",
    :cost_price => 0
  },
  {
    :product => cp_blackdress,
    :option_values => [medium, green, ankara],
    :sku => "GYI-00006",
    :cost_price => 10
  },
  {
    :product => cp_blackdress,
    :option_values => [large, red, adire],
    :sku => "GYI-00007",
    :cost_price => 0
  },
  {
    :product => cp_blackdress,
    :option_values => [large, blue],
    :sku => "GYI-00008",
    :cost_price => 0
  },
  {
    :product => cp_blackdress,
    :option_values => [large, green],
    :sku => "GYI-00009",
    :cost_price => 0
  },
  {
    :product => cp_blackdress,
    :option_values => [extra_large, red, ankara],
    :sku => "GYI-00012",
    :cost_price => 20
  },
]

masters = {
  cp_blackdress => {
    :sku => "GYI-001",
    :cost_price => 120,
  },
  cp_lowtopdress => {
    :sku => "GYI-00011",
    :cost_price => 122
  },
  cp_pinkdress => {
    :sku => "GYI-00012",
    :cost_price => 150
  },
  cp_redtop => {
    :sku => "GYI-00013",
    :cost_price => 120
  },
  cp_whitelowtopwhite => {
    :sku => "GYI-00014",
    :cost_price => 170
  },
  cp_whiteminidress => {
    :sku => "GYI-00015",
    :cost_price => 120
  }
}

variants.each do |variant_attrs|
  Spree::Variant.create!(variant_attrs, :without_protection => true)
end

masters.each do |product, variant_attrs|
  product.master.update_attributes!(variant_attrs)
end
