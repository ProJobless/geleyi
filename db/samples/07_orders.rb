order = Spree::Order.create!({
                                 :number => "GYI-O-123456789",
                                 :email => "order1@geleyi-shipper.com",
                                 :item_total => 150.95,
                                 :adjustment_total => 150.95,
                                 :total => 301.90,
                                 :shipping_address => Spree::Address.first,
                                 :billing_address => Spree::Address.last
                             }, :without_protection => true)
order.state = "complete"
order.save!

order = Spree::Order.create!({
                                 :number => "GYI-O-987654321",
                                 :email => "order2@geleyi-shipper.com",
                                 :item_total => 15.95,
                                 :adjustment_total => 15.95,
                                 :total => 31.90,
                                 :shipping_address => Spree::Address.first,
                                 :billing_address => Spree::Address.last
                             }, :without_protection => true)
order.state = "complete"
order.save!


order = Spree::Order.create!({
                                 :number => "GYI-O-9876534dE1",
                                 :email => "order2@geleyi-shipper.com",
                                 :item_total => 15.95,
                                 :adjustment_total => 15.95,
                                 :total => 31.90,
                                 :shipping_address => Spree::Address.first,
                                 :billing_address => Spree::Address.last,
                                 :payment_state => "balance_due"
                             }, :without_protection => true)
order.state = "pending"
order.save!

