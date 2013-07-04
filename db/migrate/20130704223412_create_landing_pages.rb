class CreateLandingPages < ActiveRecord::Migration
  def change
    create_table :landing_pages do |t|
      t.string :title
      t.text :content

      t.timestamps
    end
  end
end
