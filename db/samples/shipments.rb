first_order = Spree::Order.find_by_number!("GYI-O-123456789")
last_order = Spree::Order.find_by_number!("GYI-O-987654321")

Spree::Shipment.create!({
  :order => first_order,
  :number => Array.new(11){rand(11)}.join,
  :shipping_method => Spree::ShippingMethod.find_by_name!("USPS (USD)"),
  :address => Spree::Address.first,
  :state => "pending"
}, :without_protection => true)

Spree::Shipment.create!({
  :order => last_order,
  :number => Array.new(11){rand(11)}.join,
  :shipping_method => Spree::ShippingMethod.find_by_name!("UPS Ground (USD)"),
  :address => Spree::Address.first,
  :state => "pending"
}, :without_protection => true)
