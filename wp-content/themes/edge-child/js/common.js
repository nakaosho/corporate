
$(document).ready(function() {
    $('#fullpage').fullpage({
    anchors:['section1', 'section2', 'section3', 'section4'],
    menu: '#slide_menu',
      navigation: true,
      navigationPosition : 'right'
    });
});


jQuery(function(){
var menu = jQuery('#slide_menu'), // スライドインするメニューを指定
    menuBtn = jQuery('#navToggle'), // メニューボタンを指定
    body = jQuery(document.body),     
    menuWidth = menu.outerWidth();         
    
    // メニューボタンをクリックした時の動き
    menuBtn.on('click', function(){
    // body に open クラスを付与する
    body.toggleClass('open');
        if(body.hasClass('open')){
            // open クラスが body についていたらメニューをスライドインする
            body.animate({'left' : menuWidth }, 280);            
            menu.animate({'left' : 0 }, 280);                    
        } else {
            // open クラスが body についていなかったらスライドアウトする
            menu.animate({'left' : -menuWidth }, 280);
            body.animate({'left' : 0 }, 280);            
        }             
    });
}); 


jQuery(function() {
    function accordion() {
        jQuery(this).toggleClass("active").next().slideToggle(300);
    }
    jQuery(".accordion_nav .toggle_nav").click(accordion);
});