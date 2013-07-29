first_order = Spree::Order.find_by_number!("GYI-O-123456789")
last_order = Spree::Order.find_by_number!("GYI-O-987654321")
pending_order = Spree::Order.find_by_number!("GYI-O-9876534dE1")

first_order.adjustments.create!({
                                    :amount => 0,
                                    :source => first_order,
                                    :originator => Spree::TaxRate.find_by_name!("North America"),
                                    :label => "Tax",
                                    :state => "open",
                                    :mandatory => true
                                }, :without_protection => true)

last_order.adjustments.create!({
                                   :amount => 0,
                                   :source => last_order,
                                   :originator => Spree::TaxRate.find_by_name!("North America"),
                                   :label => "Tax",
                                   :state => "open",
                                   :mandatory => true
                               }, :without_protection => true)

first_order.adjustments.create!({
                                    :amount => 0,
                                    :source => first_order,
                                    :originator => Spree::ShippingMethod.find_by_name!("USPS (USD)"),
                                    :label => "Shipping",
                                    :state => "finalized",
                                    :mandatory => true
                                }, :without_protection => true)

last_order.adjustments.create!({
                                   :amount => 0,
                                   :source => last_order,
                                   :originator => Spree::ShippingMethod.find_by_name!("USPS (USD)"),
                                   :label => "Shipping",
                                   :state => "finalized",
                                   :mandatory => true
                               }, :without_protection => true)

pending_order.adjustements.create!({
                                       :amount => 0,
                                       :source => pending_order,
                                       :originator => Spree::ShippingMethod.find_by_name!("North America"),
                                       :label => "Shipping",
                                       :state => "open",
                                       :mandatory => true
                                   }, :without_protection => true)
