

$(document).ready(function(){
    let navLinks = document.querySelectorAll(".nav-links");
    console.log(navLinks);
    $("#menu").click(function() {
        $("#navigation").toggle(animateLinks());
    });
    function animateLinks() {
        gsap.from($("#navigation"), { y: -100, opacity:0, duration: .25})
    }
});

