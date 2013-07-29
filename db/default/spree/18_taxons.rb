categories = Spree::Taxonomy.find_by_name!("Categories")
brands = Spree::Taxonomy.find_by_name!("Brand")
collection = Spree::Taxonomy.find_by_name!("Collection")

products = {
    :cp_blackdress => "C & P Black Dress",
    :cp_lowtopdress => "C & P Low Top Dress",
    :cp_pinkdress => "C & P Pink Dress",
    :cp_redtop => "C & P Red Top",
    :cp_whiteminidress => "C & P White Mini Dress",
    :cp_whitelowtopwhite => "C & P Low top White Dress"
}


products.each do |key, name|
  products[key] = Spree::Product.find_by_name!(name)
end

taxons = [
    {
        :name => "Categories",
        :taxonomy => categories,
        :position => 0
    },
    {
        :name => "Dress",
        :taxonomy => categories,
        :parent => "Categories",
        :position => 1,
        :products => [
            products[:cp_blackdress],
            products[:cp_lowtopdress],
            products[:cp_pinkdress],
        ]
    },
    {
        :name => "Top",
        :taxonomy => categories,
        :parent => "Categories",
        :position => 2,
        :products => [
            products[:cp_redtop],
            products[:cp_whiteminidress],
            products[:cp_whitelowtopwhite]
        ]
    }
]

taxons.each do |taxon_attrs|
  if taxon_attrs[:parent]
    taxon_attrs[:parent] = Spree::Taxon.find_by_name!(taxon_attrs[:parent])
  end
  Spree::Taxon.create!(taxon_attrs, :without_protection => true)
end
