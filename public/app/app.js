/*
 *  This is an Ember application. It's built using a
 * neuter task (see this project's Gruntfile for what that means).
 *
 * `require`s in this file will be stripped and replaced with
 * the string contents of the file they refer to wrapped in
 * a closure.
 */

/*
 * These are the dependencies for an the Ember application
 * and they have to be loaded before any application code.
 */
require('public/dependencies/jquery-1.9.1');
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
