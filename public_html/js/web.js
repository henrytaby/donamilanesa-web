var snippet_general_form = function(){
    "use strict";
    /**
     * Datos del formulario y el boton
     */
    var form = $('#general_form');
    var btn_submit = $('#general_submit');

    var formv;
    /**
     * Antes de enviar el formulario se ejecuta la siguiente funcion
     */
    var showRequest= function(formData, jqForm, op)  {
        btn_submit.addClass('spinner spinner-white spinner-right').attr('disabled', true);
        return true;
    };

    var showResponse = function (res, statusText) {
        btn_submit.removeClass('spinner spinner-white spinner-right').attr('disabled', false);
        //termino

    };

    /**
     * Opciones para generar el objeto del formulario
     */
    var options = {
        beforeSubmit:showRequest
        , success:  showResponse
        , data: {}
    };

    /**
     * Se da las propiedades de ajaxform al formulario
     */
    var handle_form_submit=function(){
        form.ajaxForm(options);
    };
    /**
     * Se da las funcionalidades al boton enviar
     */
    var handle_btn_submit = function() {
        btn_submit.click(function(e) {
            e.preventDefault();
            /**
             * Copiamos los datos de summerNote a una variable
             */

            form.submit();
            //alert("hola");


        });
    };
    /**
     * Iniciamos los componentes necesarios como , summernote, select2 entre otros
     */
    var handle_components = function(){

    };

    return {
        init: function() {
            handle_form_submit();
            handle_btn_submit();
            handle_components();
        }
    };
}();

//== Class Initialization
jQuery(document).ready(function() {
    snippet_general_form.init();
});
