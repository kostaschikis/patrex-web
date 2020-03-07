const langEn = document.getElementById('lang-en');
const langEl = document.getElementById('lang-el');

if (window.location.href.indexOf("en") > -1) {
    langEn.style.opacity = 1;
} else {
    langEl.style.opacity = 1;
}

// Switch to English
langEn.addEventListener('click', function() {
    window.location.href = '../en';
});

// Swicth to Greek
langEl.addEventListener('click', function() {
    window.location.href = '../el';
});