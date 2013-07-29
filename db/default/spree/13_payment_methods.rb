Spree::Gateway::Bogus.create!(
    {
        :name => "Credit Card",
        :description => "Bogus payment gateway for Geleyi.",
        :environment => "development",
        :active => true
    }
)

Spree::Gateway::Bogus.create!(
    {
        :name => "Credit Card",
        :description => "Bogus payment gateway for production.",
        :environment => "production",
        :active => true
    }
)

Spree::Gateway::Bogus.create!(
    {
        :name => "Credit Card",
        :description => "Bogus payment gateway for staging.",
        :environment => "staging",
        :active => true
    }
)

Spree::Gateway::Bogus.create!(
    {
        :name => "Credit Card",
        :description => "Bogus payment gateway for test.",
        :environment => "test",
        :active => true
    }
)

Spree::Gateway::BalancedGateway.create!(
    {
        :name => "Balanced Payment",
        :description => "Balanced Payment, the default method of payment",
        :environment => "development",
        :active => true
    }
)

Spree::Gateway::BalancedGateway.create!(
    {
        :name => "Balanced Payment",
        :description => "Balanced Payment, the default method of payment",
        :environment => "production",
        :active => true
    }
)