/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
(function($, Drupal) {
    Drupal.ajax.prototype.commands.afterAjaxCallbackhv = function(ajax, response, status) {
        $(".link-form-hv").hide();
        $(".form-hv").show();
    };
}(jQuery, Drupal));

(function ($) {
    Drupal.behaviors.loadsitiohv = {
        attach: function (context, settings) {
            $(".menu-mlid-393").addClass("active");
            $(".menu-mlid-393 a").addClass("active");
            $(".menu-mlid-393 a").addClass("active-trail");
             
        } 
    };
})(jQuery);      

 


