var header = document.getElementById('header');
var nav = document.getElementById('bottom-nav');

if ($(window).width() <= 1062) {
    header.style.display = "none";
    nav.style.display = "block";
} else {
    header.style.display = "block";
    nav.style.display = "none";
}

$(window).resize(function(){
    if ($(window).width() <= 1062) {
        header.style.display = "none";
        nav.style.display = "block";
    } else {
        header.style.display = "block";
        nav.style.display = "none";
    }
});