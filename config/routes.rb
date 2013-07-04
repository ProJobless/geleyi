Geleyi::Application.routes.draw do

  mount Spree::Core::Engine, :at => '/store'
        
  root :to => 'landing_page#index'

end
