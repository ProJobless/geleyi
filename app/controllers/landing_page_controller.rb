class LandingPageController < ApplicationController
  def index
    @pages = LandingPage.first
  end
end
