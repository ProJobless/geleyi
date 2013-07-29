Geleyi::Sample.load_sample("orders")

first_order = Spree::Order.find_by_number!("GYI-O-123456789")
last_order = Spree::Order.find_by_number!("GYI-O-987654321")

first_order.line_items.create!({
  :variant => Spree::Product.find_by_name!("C & P Black Dress").master,
  :quantity => 1,
  :price => 115.99
}, :without_protection => true)

last_order.line_items.create!({
  :variant => Spree::Product.find_by_name!("C & P Low Top Dress").master,
  :quantity => 1,
  :price => 122.99
}, :without_protection => true)
