$('body').scrollspy({ target: '#main-nav' });
$('.section-shift').on('click', function(e){
    e.preventDefault();
    var sectionShifting = $(this).attr('href');
    if (sectionShifting == "#about") {
      var scrollingSpeed = 2150;
    }
    else {
      var scrollingSpeed = 1500;
    }
    $(window).scrollTo(sectionShifting, scrollingSpeed,{'easing':'swing', onAfter: function(){window.location = sectionShifting;}});
});
$(window).scroll(function(){
    $("#intro-stuff").css("opacity", 1 - $(window).scrollTop() / 125);
    $(".navbar").css("opacity", $(window).scrollTop() / 200 - 1);
});
