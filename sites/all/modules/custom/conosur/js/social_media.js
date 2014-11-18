(function ($) {
    Drupal.behaviors.socialMedia = {
        fbs_click: function (width, height, urlPopup) {
            var leftPosition, topPosition;
            leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
            topPosition = (window.screen.height / 2) - ((height / 2) + 50);
            var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
            u=location.href;
            t=document.title;
            switch(urlPopup){
                case 'facebook':
                    window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer', windowFeatures);
                    return false;
                    break;
                case 'twitter':
                    window.open('https://twitter.com/share?url='+encodeURIComponent(u)+'&text='+encodeURIComponent(t),'sharer', windowFeatures);
                    return false;
                    break
                    
            }
            return false;		
	},
	attach: function (context, settings) {
            var menuStatus = 0;
            var menuNosotrodStatus = 0;
            var loginStatus = 0;
            var heightdiv = $('.block-registro-conosur').height();
            $('.block-registro-conosur').css({top: '-' + heightdiv + 'px'});
            $('.likn-registro-header').click(function() {
                if (loginStatus === 0) {
                    $('.block-registro-conosur').css({top: 0});
                    loginStatus = 1;
                }else{
                    heightdiv = $('.block-registro-conosur').height();
                    $('.block-registro-conosur').css({top: '-' + heightdiv + 'px'});
                    loginStatus = 0;
                }
                return false;
            });
            $('.likn-registro-header').dblclick(function() {
                heightdiv = $('.block-registro-conosur').height();
                $('.block-registro-conosur').css({top: '-' + heightdiv + 'px'});
                oginStatus = 0;
            });
            $('#navbar-toggle-menu').click(function() {
                 if (menuStatus === 0) {
                     $(".naranja-menu .nav").show();
                     menuStatus = 1;
                 } else {
                     $(".naranja-menu .nav").hide();
                     menuStatus = 0;
                 }
                 
            });
            $('#navbar-toggle-menu').dblclick(function() {
                 $(".naranja-menu .nav").hide();
                 menuStatus = 0;
            });
            /* navbar-toggle-nosotros*/
            $('#navbar-toggle-nosotros').click(function() {
                 if (menuNosotrodStatus === 0) {
                     $("#menu-lateral").show();
                     menuNosotrodStatus = 1;
                 } else {
                     $("#menu-lateral").hide();
                     menuNosotrodStatus = 0;
                 }
            });
            $('#navbar-toggle-nosotros').dblclick(function() {
                 $("#menu-lateral").hide();
                 menuNosotrodStatus = 0;
            });
            $(window).resize(function() {
                if( $( window ).width() >=768) {
                    $(".nav").show();
                } else {
                    $(".nav").hide();
                }
                heightdiv = $('.block-registro-conosur').height();
                $('.block-registro-conosur').css({top: '-' + heightdiv + 'px'});
             });
        }
    };
})(jQuery);