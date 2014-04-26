var Admin = Admin || function() {
    'use strict'
    var consts = {
            rowCount: 50,
            url: '/admin/'
        },
        listeners = {
            links : function() {
                $('a[href="#"]').on('click', function(event) {
                    event.preventDefault();
                });
            }
        }.
        priv = {
        },
        pub = {
            init : function() {
                this.initListeners(listeners);
            },
            initListeners: function(listeners) {
                // Add listeners
                $.each(listeners, function (index, func) {
                    func();
                });
            },
            getRowCount : function () {
              return consts.rowCount;
            },
            getAdminUrl : function() {
                return consts.url;
            }
        };
    return pub;
}();