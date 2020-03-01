// Get the Paragraph Hash
var hash = location.hash.substr(1);

// When document is loaded remove 'is-preload' class from body
$(document).ready(function() {
    $('body').removeClass('is-preload');
    $('h3#' + hash).addClass('blinking');
})