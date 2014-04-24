var Admin = Admin || {};

Admin.Perms = Admin.Perms || function(){
    'use strict'
    var consts = {},
        priv = {
        },
        pub = {
            init : function() {
                alert("perms");
            }
        };
    return pub;
}();