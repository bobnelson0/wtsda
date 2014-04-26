var Admin = Admin || {};

Admin.Perms = Admin.Perms || function(){
    'use strict'
    var consts = {
            url: {
                base: Admin.getAdminUrl(),
                add: this.base + 'add/',
                edit: this.base + 'edit/',
                del: this.base + 'del/'
            }
        },
        listeners = {
            submit: function() {
                $('#permSubmit').on('click', function(event) {

                });
            }
        },
        priv = {

        },
        pub = {
            init : function() {
                Admin.initListeners(listeners);
            },
            validate : function() {

            },
            submit : function() {
                var action = $('#formAction').val(),
                    type = 'POST',
                    url;
                switch(action) {
                    case 'edit': url = consts.url.edit;
                                 break;
                    case 'del':  url = consts.url.del;
                                 break;
                    case 'add':  url = consts.url.add;
                                 break;
                    default:
                }
                $.ajax({
                    type: type,
                    url: url,
                    data: '',
                });
            }
        };
    return pub;
}();