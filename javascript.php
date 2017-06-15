// <script> --> adds the coloring and highlighting but ignored by framework

    var first_menu = [
        { text: 'Hello-World'}
    ];

    var main_menu = [
        { text: 'First Item', menu: first_menu}
    ];

    var header_toolbar = ({
        id: "header_toolbar",
        items: main_menu
    });

 /*   homepage_view_module = function(){
        var view_pane;
        var sign_in_register_button;

        return{
            init: function(){

                sign_in_register_button = new Button({
                    name: "sign_in_register_button",
                    text: "Sign In / Register"
                });

                view_pane = new Ext.form.Panel({
                    title: "Home Page",
                    name: "home_page_panel",
                    autoScroll: "true",
                    items: [
                        {
                            //add formatting for the item
                            items: [
                               sign_in_register_button
                            ]
                        }
                    ]
                });
            }
        };
    }();

    homepage_module = function(){
        return {
            init: function () {
                return {
                    title: "Home Page",
                    autoScroll: "true",
                    items: [homepage_view_module.init()]
                };
            }
        }
    }();

    document.onload = homepage_module;
    */