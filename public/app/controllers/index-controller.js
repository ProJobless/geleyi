Geleyi.IndexController = Em.ObjectController.extend({

    userSubscribed: false,
    email: '',

    subscribeUser: function (email) {
        this.set('email', email);
            $.get('/subscribe', {email: email},function (data) {
//                nothing fancy being done yet...
            });

        this.set('userSubscribed', true);
        return false;
    }
});