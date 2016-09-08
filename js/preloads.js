;(function($){
    baseGlobal = 'http://www.nyomegadesigns.com/';
    $(document).ready(function(){
            function preload(arrayOfImages) {
                $(arrayOfImages).each(function(){
                $('<img/>')[0].src = this;
                // Alternatively you could use:
                // (new Image()).src = this;
               });
            }
            preload([
            // fullwidthimages dir
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/fullwidthimages/nyomegafullwidth1.jpg',
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/fullwidthimages/nyomegafullwidth2.jpg',
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/fullwidthimages/nyomegafullwidth3.jpg',
            
            // assets dir
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/assets/nyomegalogo.gif',
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/assets/nyomegalogotr.gif',
            
            // icons dir
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/icons/nyomegaapps.png',
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/icons/nyomegalogodesign.png',
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/icons/nyomegaweb.png',
            
            // patterns dir
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/patterns/grid.png',
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/patterns/menubarfullwidthbg.gif',
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/patterns/menuhovereffect.gif',
            
            // smallimages dir
            
            // testimonialimages dir
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/testimonialimages/nextbtn.png',
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/testimonialimages/nextbtnover.png',
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/testimonialimages/prevbtn.png',
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/testimonialimages/prevbtnover.png',
            window.baseGlobal + 'wp-content/themes/nyomegadesigns/images/testimonialimages/tail.gif'
            
            ]);
        });
})(jQuery);