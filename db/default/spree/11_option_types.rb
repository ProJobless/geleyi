option_types = [
  {
    :name => "dress-size",
    :presentation => "Size",
    :position => 1
  },
  {
    :name => "dress-color",
    :presentation => "Color",
    :position => 2
  },
  {
    :name => "dress-textile",
    :presentation => "Textile",
    :position => 3
  }
]

option_types.each do |option_type_attrs|
  Spree::OptionType.create!(option_type_attrs, :without_protection => true)
end
