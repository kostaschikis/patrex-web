$(document).ready(function() {
    const langEn = document.getElementById('lang-en');
    const langEl = document.getElementById('lang-el');

    // Switch to English
    langEn.addEventListener('click', function() {
        window.location.href = '../en';
    });

    // Swicth to Greek
    langEl.addEventListener('click', function() {
        window.location.href = '../el';
    });

    if (window.location.href.indexOf("en") > -1) {
        langEn.classList.add('activated');
    } else {
        langEl.classList.add('activated');
    }
});

