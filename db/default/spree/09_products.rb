clothing = Spree::TaxCategory.find_by_name!("Clothing")

default_attrs = {
  :description => Faker::Lorem.paragraph,
  :available_on => Time.zone.now
}

products = [
  {
    :name => "C & P Black Dress",
    :tax_category => clothing,
    :price => 240.44
  },
  {
    :name => "C & P Low Top Dress",
    :tax_category => clothing,
    :price => 130
  },
  {
    :name => "C & P Pink Dress",
    :tax_category => clothing,
    :price => 150
  },
  {
    :name => "C & P Red Top",
    :tax_category => clothing,
    :price => 170
  },
  {
    :name => "C & P White Mini Dress",
    :tax_category => clothing,
    :price => 210
  },
  {
    :name => "C & P Low top White Dress",
    :tax_category => clothing,
    :price => 210
  }
]

products.each do |product_attrs|
  #eur_price = product_attrs.delete(:eur_price)
  Spree::Config[:currency] = "USD"
  default_shipping_category = Spree::ShippingCategory.find_by_name!("Default Shipping")
  product = Spree::Product.create!(default_attrs.merge(product_attrs), :without_protection => true)
  #Spree::Config[:currency] = "EUR"
  product.reload
  #product.price = eur_price
  product.shipping_category = default_shipping_category
  product.save!
end

Spree::Config[:currency] = "USD"
