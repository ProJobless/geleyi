products =
    {
        "C & P Pink Dress" =>
            {
                "Designer" => "Wilson",
                "Collection" => "Wannabe Desinger",
                "Dress Type" => "Flowey",
                "Sleeve Type" => "None",
                "Made from" => "100% cotton",
                "Care" => "Laundry Only",
                "Made From" => "100% Cotton",
                "Editorial Notes" => Faker::Lorem.paragraph(sentence_count = 2),
                "Designer Notes" => Faker::Lorem.paragraph(sentence_count = 2),
                "Fit" => "Loose",
                "Gender" => "Female's"
            },
        "C & P Red Top" =>
            {
                "Designer" => "Wilson",
                "Collection" => "Wannabe Designer",
                "Dress Type" => "Baseball Jersey",
                "Sleeve Type" => "None",
                "Made from" => "100% cotton",
                "Care" => "Laundry Only",
                "Made From" => "100% Cotton",
                "Editorial Notes" => Faker::Lorem.paragraph(sentence_count = 2),
                "Designer Notes" => Faker::Lorem.paragraph(sentence_count = 2),
                "Fit" => "Loose",
                "Gender" => "Female's"
            },

    }

products.each do |name, properties|
  product = Spree::Product.find_by_name(name)
  properties.each do |prop_name, prop_value|
    product.set_property(prop_name, prop_value)
  end
end
