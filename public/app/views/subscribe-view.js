Geleyi.userSubscribe = Em.View.extend({
  templateName: '_signup',
  emailAddress: null,

  submit: function(evt){
      var emailAddress = this.get('emailAddress');
      this.get('controller').send('subscribeUser',emailAddress);
      
      console.log('from view: ' + this.get('emailAddress'));
      this.set('emailAddress','') //reset the box
   }
});