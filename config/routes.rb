Geleyi::Application.routes.draw do

  mount Spree::Core::Engine, :at => '/g'
        
  root :to => 'landing_page#index'

end
