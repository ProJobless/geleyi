Geleyi.userSubscribe = Em.View.extend({

    templateName: '_signup',
    email: null,

    submit: function () {
        this.get('controller').send('subscribeUser', this.get('email'));
    }

});
