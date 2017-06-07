;(function($){

  var $btnMenu = $('#btn-menu'),
      $menu = $('.header-menu');

  $('.main-tours-container').mixItUp();

  $btnMenu.on('click', function (e) {
    
      $menu.toggle();

  });

	$("#banner-home").owlCarousel({
      items : 1,
      autoplay : true,
      loop : true
  });
  
 $('.btn-reservar-hotel').on('click',function (e) {
    e.preventDefault();
      
    $('form.wpcf7-form').find('select[name="hotel"]').val($(this).data('title'));


 });
 $('.btn-reservar-tour').on('click',function (e) {
    e.preventDefault();
      
    $('form.wpcf7-form').find('select[name="tour"]').val($(this).data('title'));


 });

 $('.btn-reservar').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                //$('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                //$('body').removeClass('mfp-open');
            }

        }

       
    });


  fillSelectTours();

   function fillSelectTours(){
         
          
         $.ajax({
            type: 'GET',
            url: '/wp-json/wp/v2/tours',//'/api/get_post/?id='+ post_id +'&post_type=tour',
            
            success: function(data){
                var items = [];
                   
                      var select = $('select[name="tour"]').empty();
                      $.each(data, function(i,item) {
                        select.append( '<option value="'
                                             + $.trim(item.title.rendered) + '">'
                                             + item.title.rendered
                                             + '</option>' ); 
                      });

                      select.prepend('<option value="" selected><span style="color:red;">Select a tour</span></option>');

            },
            error:function(){
                console.log(e);
            }
        });
  

  }

  fillSelectHotels();

   function fillSelectHotels(){
         
          
         $.ajax({
            type: 'GET',
            url: '/wp-json/wp/v2/hotels',//'/api/get_post/?id='+ post_id +'&post_type=tour',
            
            success: function(data){
                var items = [];
                   
                      var select = $('select[name="hotel"]').empty();
                      $.each(data, function(i,item) {
                        select.append( '<option value="'
                                             + $.trim(item.title.rendered) + '">'
                                             + item.title.rendered
                                             + '</option>' ); 
                      });

                      select.prepend('<option value="" selected><span style="color:red;">Select a Hotel</span></option>');

            },
            error:function(){
                console.log(e);
            }
        });
  

  }





 
$(window).load(function() {
      
      $('.banner .cycle-slideshow').fadeTo(1000, 1);
      $('.loader').hide();
      resize();

});


$(window).resize(resize);

function resize () {
   //$('.photos-item').height($('.photos-item').find('img').height());
}


    
})(jQuery);


