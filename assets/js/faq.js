jQuery(function($) {
    $(function() {
    	$('.faq-ques').click(function() {
        var temp ='#'+$(this).data('block');
          $(temp).find(".faq-ques").toggleClass('active');
          $(temp).find('.faq-ans').slideToggle('slow');
      });
    });
/* =========================================
 *  match Height
 * ========================================= */
    $(function() {
        $('.tb-height').matchHeight();
    });
});
