var variosJQ = jQuery.noConflict();
variosJQ(document).ready(function() {
    variosJQ('.bxslider_middle').bxSlider({
        mode: 'vertical',
        adaptiveHeight: true,
        nextSelector: '#mid_slider-next',
        prevSelector: '#mid_slider-prev',
        nextText: ' ',
        prevText: ' ',
        pager: false,

    });
    variosJQ( "#comments input[type='submit'] " ).addClass( "btn btn-primary");
    variosJQ( ".divseguirleyendo input[type='submit'] " ).addClass( "btn btn-primary");

     variosJQ( ".gina1" ).click(function() {
        variosJQ( ".gina2" ).toggle("slow");
        variosJQ( ".juan1" ).toggle("slow");
        variosJQ( ".juan2" ).hide("slow");
    });
      variosJQ( ".juan1" ).click(function() {
        variosJQ( ".juan2" ).toggle("slow");
        variosJQ( ".gina1" ).toggle("slow");
        variosJQ( ".gina2" ).hide("slow");
    });

});
