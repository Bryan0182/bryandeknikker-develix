window.acceptCookies = function() {
    setCookie("cookieAccepted", "true", 365);
    document.getElementById("cookieConsent").style.display = "none";

    // Voeg GTM-script toe aan de head na toestemming
    var gtmScript = document.createElement("script");
    gtmScript.async = true;
    gtmScript.src = "https://www.googletagmanager.com/gtm.js?id=GTM-T95BJNHF";
    document.head.appendChild(gtmScript);

    // Initialiseer dataLayer en stuur een start event naar GTM
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
    window.dataLayer.push({ event: 'cookieConsentGranted' });

    // Voeg dynamisch het noscript iframe toe aan de <body>
    var noscript = document.createElement("noscript");
    noscript.innerHTML = '<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T95BJNHF" height="0" width="0" style="display:none;visibility:hidden"></iframe>';
    document.body.appendChild(noscript);
};

// Functie om een cookie in te stellen
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Functie om een cookie op te halen
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Controleer bij pagina-lading of de cookie al bestaat en laad GTM indien nodig
document.addEventListener("DOMContentLoaded", function () {
    if (getCookie("cookieAccepted")) {
        // Als cookie al bestaat, laad het GTM-script automatisch
        var gtmScript = document.createElement("script");
        gtmScript.async = true;
        gtmScript.src = "https://www.googletagmanager.com/gtm.js?id=GTM-T95BJNHF";
        document.head.appendChild(gtmScript);

        // Initialiseer dataLayer en stuur start event naar GTM
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });

        // Voeg dynamisch het noscript iframe toe aan de <body>
        var noscript = document.createElement("noscript");
        noscript.innerHTML = '<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T95BJNHF" height="0" width="0" style="display:none;visibility:hidden"></iframe>';
        document.body.appendChild(noscript);
    } else {
        // Toon cookiemelding als cookie nog niet bestaat
        document.getElementById("cookieConsent").style.display = "block";
    }
});
