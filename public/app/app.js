
require('public/dependencies/jquery-1.9.1');
require('public/dependencies/plugins');
require('public/dependencies/foundation/foundation');
require('public/dependencies/foundation/foundation.forms');
require('public/dependencies/foundation/foundation.section');

/*
 * Since we're precompiling our templates, we only need the
 * handlebars-runtime microlib instead of the
 * entire handlebars library and its string parsing functions.
 */
require('public/dependencies/handlebars-runtime');

/* This is Ember. I think you'll like it */
require('public/dependencies/ember');
require('public/dependencies/ember-data');

/*
 this file is generated as part of the build process.
 If you haven't run that yet, you won't see it.

 It is excluded from git commits since it's a
 generated file.
 */
require('public/dependencies/compiled/templates');

/*
 Creates a new instance of an Ember application and
 specifies what HTML element inside index.html Ember
 should manage for you.
 */
window.Geleyi = Ember.Application.create({
    rootElement: window.TESTING ? '#qunit-fixture' : '#geleyi-app'
});


if (window.TESTING) {
    window.Geleyi.deferReadiness();
}

/*
 * Models
 */

/*
 * Controllers
 */
require('public/app/controllers/index-controller');

/*
 * Routes
 */
require('public/app/routes/router');
require('public/app/routes/index-route');

/**
 * Views
 */
require('public/app/views/subscribe-view');
