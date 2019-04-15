jQuery(document).ready(function($) {


   function smartColumns() {

      var w_h = $(window).height();
      var w_w = $(window).width();


      //$('.indicator').text('Width: ' + $(window).width() + ' height: ' + $(window).height());

   }

   smartColumns();

   $(window).resize(function() {
      smartColumns();
   });

   //callback
   if($('.callback_ico').length > 0) {
      $('.callback_ico, .callback_modal .close').on('click', function(e) {
         e.preventDefault();
         $('.callback_wrap').fadeToggle();
      });
   }
   function close_callback() {
      $('.callback_modal').fadeToggle();
   }

   if($('.owl_main_slider').length > 0) {


      if($(window).width() > 700 ){
        $("video").each(function () {
          console.log($(this).data('src'));

          $(this).attr('src', $(this).data('src'));
        })
      }

      var main = $('.owl_main_slider');

      main.on('translate.owl.carousel', function(event) {
        var currentItem = event.item.index;
        //console.log(event);
        //$("video").each(function () { this.pause() });
        //$(".owl-item.active").css({ 'opacity' : 0.5 });
        //console.log("current: ",event.relatedTarget.current());

        $(".video").each(function () {
          //this.pause();
          //this.currentTime = 0;
          //this.play();
         });

      });
      main.owlCarousel({
         loop: true,
         nav: true,
         items: 1,
         autoplay: true,
         autoplayTimeout: 7000
      });

   }
   if($('.owl_single_product').length > 0) {
      $('.owl_single_product').owlCarousel({
         loop: true,
         nav: true,
         dots: false,
         items: 1,
         autoplay: true,
         autoplayTimeout: 5000,
         autoplayHoverPause: true,
         navText : ["<i class='arr-left'></i>","<i class='arr-right'></i>"]
      });
   }

   if($('.owl_gallery_slider').length > 0) {
      $('.owl_gallery_slider').owlCarousel({
         loop: true,
         nav: true,
         autoplay: true,
         autoplayTimeout: 5000,
         autoplayHoverPause: true,
         autoHeight:true,
         navText : ["<i class='arr-left'></i>","<i class='arr-right'></i>"],
         dots: false,
         responsive:{
              0:{
                  items:1,
              },
              700:{
                  items:2
              },
              1000:{
                  items:3,
                  nav:true
              },
              1400:{
                  items:4,
                  nav:true
              },
              1750:{
                  items:5,
                  nav:true
              },
              2200:{
                  items:6,
                  nav:true
              }
          }
      });
   }


  $('.js-prod-filter a').on('click', function(e){
    e.preventDefault();

    var filter = $(this).data('filter');


    $('.products_list article').each(function(){
        $(this).hide();
        if( $(this).hasClass(filter) ){
          //$(this).css({ 'opacity' : 0.5});
          $(this).show();
        }
    });

  })





   $('.menu_bars').on('click', function(e) {
      e.preventDefault();

      $(this).closest('.header').toggleClass('active');
      $(this).toggleClass('active');
      $('.menu_open').slideToggle();

   })




   $('.faq_item .faq_title').on('click', function(e) {
      e.preventDefault();
      $(this).parent().toggleClass('active');
      $(this).parent().find('.faq_content').slideToggle();

   })



});