$(document).ready(function() {
    const langEn = document.getElementById('lang-en');
    const langEl = document.getElementById('lang-el');

    // Switch to English
    langEn.addEventListener('click', function() {
        console.log('supp');
        window.location.href = '../en';
    });

    // Swicth to Greek
    langEl.addEventListener('click', function() {
        console.log('hey there');
        window.location.href = '../el';
    });

    if (window.location.href.indexOf("en") > -1) {
        langEn.classList.add('activated');
    } else {
        langEl.classList.add('activated');
    }
});

