Geleyi.IndexController = Em.ObjectController.extend({

    userSubscribed: false,
    email: '',

    subscribeUser: function (email) {
        this.set('email', email);
            $.get('/subscribe', {email: email},function (data) {
//                nothing fancy being done yet...
            }).done(function(){

                });

        this.set('userSubscribed', true);
    }
});