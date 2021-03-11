 $(document).ready(function () {
        
        
        // mega menu 
        
        $('.wardi-mega-menu li.dropdown_list').hover( function(){

            $(this).find('.categories_mega_menu').addClass('mega-menu-flex');
            $('.wardi-mega-menu li.dropdown_list').not(this).find('.categories_mega_menu').removeClass('mega-menu-flex');
            
        
        });
        
        $('.wardi-mega-menu li.dropdown_list').mouseleave( function(){

            $('.categories_mega_menu').removeClass('mega-menu-flex');
            
        
        });
        
        
        $('button.toggle-bar.mobile-menu').on('click', function(){
            $('ul.wardi-mega-menu').toggleClass('slideDown');
        });
        
 });