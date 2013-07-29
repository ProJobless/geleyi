taxonomies = [
  { :name => "Categories" },
  { :name => "Brand" },
  { :name => "Collection"}
]

taxonomies.each do |taxonomy_attrs|
  Spree::Taxonomy.create!(taxonomy_attrs)
end
