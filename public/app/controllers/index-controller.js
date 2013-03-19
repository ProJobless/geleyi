Geleyi.IndexController = Em.ObjectController.extend({
    userSubscribed: false,
    userEmail: '',

    subscribeUser: function(email){
    	this.set('userEmail',email);
    	this.set('userSubscribed',true);
        console.log('controller 1: '+ this.get('userEmail'));
    }
});