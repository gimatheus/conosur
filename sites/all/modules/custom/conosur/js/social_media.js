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
        }
    };
})(jQuery);