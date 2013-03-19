Ember.TEMPLATES["_signup"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [2,'>= 1.0.0-rc.3'];
helpers = helpers || Ember.Handlebars.helpers; data = data || {};
  var buffer = '', hashTypes, escapeExpression=this.escapeExpression;


  data.buffer.push("<h3>Sign-up for the Pre-launch VIP Access</h3>\n<form>\n    ");
  hashTypes = {'valueBinding': "STRING",'class': "STRING",'placeholder': "STRING"};
  data.buffer.push(escapeExpression(helpers.view.call(depth0, "Em.TextField", {hash:{
    'valueBinding': ("view.emailAddress"),
    'class': ("large-6 columns"),
    'placeholder': ("Email Address")
  },contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data})));
  data.buffer.push("\n    <!--<button ");
  hashTypes = {};
  data.buffer.push(escapeExpression(helpers.action.call(depth0, "subscribeUser", "view.emailAddress", {hash:{},contexts:[depth0,depth0],types:["ID","ID"],hashTypes:hashTypes,data:data})));
  data.buffer.push(" type=\"submit\">Submit</button>-->\n    <button ");
  hashTypes = {'target': "STRING"};
  data.buffer.push(escapeExpression(helpers.action.call(depth0, "submit", {hash:{
    'target': ("view")
  },contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data})));
  data.buffer.push(" type=\"submit\" class=\"small button\">Submit</button>\n</form>\n");
  return buffer;
  
});

Ember.TEMPLATES["about"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [2,'>= 1.0.0-rc.3'];
helpers = helpers || Ember.Handlebars.helpers; data = data || {};
  


  data.buffer.push("<div id=\"copy-body\">\n    <h2>About Us</h2>\n    <hr/>\n    <p>Do you love African fashion? Do you love African-inspired designs? We do, too.</p>\n\n    <p>Yes. African fashion is getting big. Beautiful designs are showcased in fashion shows and media around the world.\n        But are those beautiful designs reaching people who love African fashion?</p>\n\n    <p>Unfortunately, no.</p>\n\n    <p>Fans of African fashion have no way of purchasing these stunning, stylish collections despite designers’\n        marketing and promotion efforts. And existing e-commerce websites tend to be disconnected from the unique beauty\n        of African-inspired fashion.</p>\n\n    <p>We are Geleyi [gel-ay-ee] – a unique web-platform application crafted to showcase the beauty and joy of\n        African-inspired designs. Geleyi aggregates designers to market and sell their collections directly to a wider\n        clientele who love African fashions.</p>\n\n    <p>Geleyi showcases the beauty of our designers' creations in a simple way, and bring you the happiest shopping\n        experiences. Geleyi makes African fashion accessible to you.</p>\n</div>");
  
});

Ember.TEMPLATES["application"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [2,'>= 1.0.0-rc.3'];
helpers = helpers || Ember.Handlebars.helpers; data = data || {};
  var buffer = '', stack1, stack2, hashTypes, options, self=this, helperMissing=helpers.helperMissing, escapeExpression=this.escapeExpression;

function program1(depth0,data) {
  
  
  data.buffer.push("<h1 class=\"header-logo\">Geleyi</h1>");
  }

function program3(depth0,data) {
  
  
  data.buffer.push("Our Story");
  }

function program5(depth0,data) {
  
  
  data.buffer.push("The Team");
  }

function program7(depth0,data) {
  
  
  data.buffer.push("Our Magazine");
  }

function program9(depth0,data) {
  
  
  data.buffer.push("Be Joyful");
  }

function program11(depth0,data) {
  
  
  data.buffer.push("Contact Us");
  }

  data.buffer.push("<div id=\"container\">\n    <div class=\"row\" id=\"main-content\" class=\"clearfix\">\n\n        <div class=\"twelve column\">\n            <div class=\"large-3 columns\">\n                ");
  hashTypes = {};
  options = {hash:{},inverse:self.noop,fn:self.program(1, program1, data),contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers.linkTo),stack1 ? stack1.call(depth0, "index", options) : helperMissing.call(depth0, "linkTo", "index", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("\n            </div>\n\n            <div class=\"large-9 columns\">\n                  ");
  hashTypes = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "outlet", {hash:{},contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data})));
  data.buffer.push("\n            </div>\n        </div>\n    </div>\n\n    <div id=\"footer\">\n        <div class=\"row\">\n            <div class=\"twelve columns\">\n\n                <div class=\"six columns large-offset-3\">\n\n                    <ul>\n                        <li>");
  hashTypes = {};
  options = {hash:{},inverse:self.noop,fn:self.program(3, program3, data),contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers.linkTo),stack1 ? stack1.call(depth0, "about", options) : helperMissing.call(depth0, "linkTo", "about", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("</a></li>\n                        <li>");
  hashTypes = {};
  options = {hash:{},inverse:self.noop,fn:self.program(5, program5, data),contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers.linkTo),stack1 ? stack1.call(depth0, "team", options) : helperMissing.call(depth0, "linkTo", "team", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("</li>\n                        <li>");
  hashTypes = {};
  options = {hash:{},inverse:self.noop,fn:self.program(7, program7, data),contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers.linkTo),stack1 ? stack1.call(depth0, "magazine", options) : helperMissing.call(depth0, "linkTo", "magazine", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("</li>\n                        <li>");
  hashTypes = {};
  options = {hash:{},inverse:self.noop,fn:self.program(9, program9, data),contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers.linkTo),stack1 ? stack1.call(depth0, "pinterest", options) : helperMissing.call(depth0, "linkTo", "pinterest", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("</li>\n                        <li>");
  hashTypes = {};
  options = {hash:{},inverse:self.noop,fn:self.program(11, program11, data),contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers.linkTo),stack1 ? stack1.call(depth0, "contact-us", options) : helperMissing.call(depth0, "linkTo", "contact-us", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("</li>\n                    </ul>\n\n                </div>\n                <div class=\"four columns\">\n\n                </div>\n\n            </div>\n        </div>\n    </div>\n</div>\n");
  return buffer;
  
});

Ember.TEMPLATES["contact-us"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [2,'>= 1.0.0-rc.3'];
helpers = helpers || Ember.Handlebars.helpers; data = data || {};
  


  data.buffer.push("<h1>You Can contact us now....</h1>");
  
});

Ember.TEMPLATES["index"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [2,'>= 1.0.0-rc.3'];
helpers = helpers || Ember.Handlebars.helpers; data = data || {};
  var buffer = '', stack1, hashTypes, escapeExpression=this.escapeExpression, self=this;

function program1(depth0,data) {
  
  var buffer = '', hashTypes;
  data.buffer.push("\n	<h3>Thank you! We will get in touch soon via ");
  hashTypes = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "userEmail", {hash:{},contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data})));
  data.buffer.push("<h3>\n");
  return buffer;
  }

function program3(depth0,data) {
  
  var buffer = '', hashTypes;
  data.buffer.push("\n	");
  hashTypes = {};
  data.buffer.push(escapeExpression(helpers.view.call(depth0, "Geleyi.userSubscribe", {hash:{},contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data})));
  data.buffer.push("\n");
  return buffer;
  }

  data.buffer.push("<h1>Hello! </h1>\n<h2>Meet African Fashion. <span class=\"emphasize\">Simple.</span><span class=\"emphasize\"> Beautiful.</span><span class=\"emphasize\"> Joyful.</span></h2>\n<h3>We are online marketplace for your own African-inspired designs</h3>\n\n<div id=\"subscribe-box\">\n");
  hashTypes = {};
  stack1 = helpers['if'].call(depth0, "userSubscribed", {hash:{},inverse:self.program(3, program3, data),fn:self.program(1, program1, data),contexts:[depth0],types:["ID"],hashTypes:hashTypes,data:data});
  if(stack1 || stack1 === 0) { data.buffer.push(stack1); }
  data.buffer.push("\n</div>");
  return buffer;
  
});

Ember.TEMPLATES["magazine"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [2,'>= 1.0.0-rc.3'];
helpers = helpers || Ember.Handlebars.helpers; data = data || {};
  var buffer = '';


  return buffer;
  
});

Ember.TEMPLATES["pinterest"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [2,'>= 1.0.0-rc.3'];
helpers = helpers || Ember.Handlebars.helpers; data = data || {};
  var buffer = '';


  return buffer;
  
});

Ember.TEMPLATES["team"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [2,'>= 1.0.0-rc.3'];
helpers = helpers || Ember.Handlebars.helpers; data = data || {};
  


  data.buffer.push("<h2>Founders</h2>\n<hr/>\n<div class=\"copy-body\">\n    <div class=\"twelve columns\">\n        <div class=\"large-2 columns\">\n            <img src=\"build/images/headshots/dele.png\">\n        </div>\n\n        <div class=\"large-10 columns\">\n            <p>\n                <strong style=\"font-variant: small-caps\">Dele Omotosho, Jr.</strong>, a native of Nigeria, is passionate\n                about pre-colonial and contemporary African fashion and\n                tailored designs (he even tailors his own clothing!). Dele is an experienced software engineer who\n                crafts Geleyi\n                platform from scratch with the cutting-edge technologies to ensure simple, beautiful, and joyful\n                shopping\n                experiences for you.\n            </p>\n        </div>\n\n    </div>\n\n    <div class=\"twelve columns\">\n        <div class=\"large-2 columns\">\n            <img src=\"build/images/headshots/maki.png\">\n        </div>\n        <div class=\"large-10 columns\">\n            <p>\n                <strong style=\"font-variant: small-caps\">Maki Nakata</strong> believes in joyful and beautiful fashion\n                designs that bring happiness to people. From a young age, she\n                has been a style-obsessed clothes addict who loves browsing magazines, looking at beautiful photographs\n                showcasing\n                various colors and designs, and assembling outfits. Combining her professional background in strategy\n                and finance in\n                retail and consumer goods sectors with her love and passion for African-inspired designs, Maki drives\n                Geleyi’s\n                business development.\n            </p>\n        </div>\n    </div>\n</div>");
  
});