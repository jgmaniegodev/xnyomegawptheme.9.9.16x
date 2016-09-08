;(function($){
    
        $(window).load(function(){
                $('#content-portfolio-gallery-category a').wrap( '<div class="img-porfolio"></div>' ).fadeIn();
                
           // Portfolio Gallery attach
            $( '#content-portfolio-gallery' ).load(
                    'portfolio-gallery/ #content-portfolio',
                    function(){
                        $( '#content-portfolio-gallery a' ).wrap( '<div class="img-porfolio"></div>' ).fadeIn();
            }); 
        });
    
	$(document).ready(function(){
            
            // Colorbox
            $("a[rel^='prettyPhoto']").colorbox({ slideshow:true});
            
            // Menu rollover fx
            var $main_menu_list = $( '#navigation div > ul > li' );
            var $main_menu_hover_element = '<span class=\"effect\">&nbsp;</span>';
            
            $main_menu_list.hover(
                function(){
                    $(this).prepend($main_menu_hover_element);
                    $('.effect').addClass('hover');
                    if ( $( '.hover' ).length > 0 ){
                        $( '.hover' ).css({
                            'background-color': 'red',
                            'position': 'absolute',
                            'width': '100%',
                            'height': '0px',
                            'bottom': '0',
                            'left': '0',
                            'opacity': '0'
                        }).animate({
                           'opacity': 1,
                           'height': '4px'
                        }); 
                        
                    }
                    
                },function(){
                   $('.hover').remove();
                });
            
            var target = $('p');
           
            target.each(function(){
                if ($(this).find('img').length <= 0){
                $(this).html($(this).html().replace(/Omega/,"<span style='color:red'>$&</span>"));
                $(this).html($(this).html().replace(/omega/,"<span style='color:red'>$&</span>"));
                $(this).html($(this).html().replace(/OMEGA/,"<span style='color:red'>$&</span>"));
            }
            });
            
            var target = $('span');
           
            target.each(function(){
                if ($(this).find('img').length <= 0){
                $(this).html($(this).html().replace(/Omega/,"<span style='color:red'>$&</span>"));
                $(this).html($(this).html().replace(/omega/,"<span style='color:red'>$&</span>"));
                $(this).html($(this).html().replace(/OMEGA/,"<span style='color:red'>$&</span>"));
            }
            });
            
            $('.wpcf7-form-control-wrap').mouseover(function(){
               $(this).each(function(){
                  $(this).find('.wpcf7-not-valid-tip').fadeOut(); 
               });
            });
	});
	
})(jQuery);