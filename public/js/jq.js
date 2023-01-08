$(document).ready(function(){
    $('#show').click(function(){
        $('#p2').slideUp(1500)
        $('#p').toggle(1500)
        $("#copy").css({"padding": "-3%"});
    })
    $('#show2').click(function(){
        $('#p').slideUp(1500)
        $('#p2').toggle(1500)
        $("#copy").css({"padding": "-3%"});
    })
    $( "#facebook" ).mouseenter(function() {
        // $("#facebook").animate({paddingBottom: "5%"})
        $( "#afacebook" ).css({"color": "#fff"})
    });
    $( "#facebook" ).mouseout(function() {
        // $("#facebook").animate({paddingBottom: "0%"})
        $( "#afacebook" ).css({"color": "#9016bd"})
    });
    $( "#twitter" ).mouseenter(function() {
        $( "#atwitter" ).css({"color": "#fff"})
    });
    $( "#twitter" ).mouseleave(function() {
        $( "#atwitter" ).css({"color": "#9016bd"})
    });
    $( "#instagram" ).mouseenter(function() {
        $( "#ainstagram" ).css({"color": "#fff"})
    });
    $( "#instagram" ).mouseleave(function() {
        $( "#ainstagram" ).css({"color": "#9016bd"})
    });
})
