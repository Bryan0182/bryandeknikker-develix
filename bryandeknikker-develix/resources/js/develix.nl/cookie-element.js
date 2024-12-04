window.acceptCookies = function() {
    setCookie("cookieAccepted", "true", 365);
    document.getElementById("cookieConsent").style.display = "none";

    var gtmScript = document.createElement("script");
    gtmScript.async = true;
    gtmScript.src = "https://www.googletagmanager.com/gtm.js?id=GTM-T95BJNHF";
    document.head.appendChild(gtmScript);

    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
    window.dataLayer.push({ event: 'cookieConsentGranted' });

    var noscript = document.createElement("noscript");
    noscript.innerHTML = '<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T95BJNHF" height="0" width="0" style="display:none;visibility:hidden"></iframe>';
    document.body.appendChild(noscript);
};

window.rejectCookies = function() {
    setCookie("cookieAccepted", "false", 365);
    document.getElementById("cookieConsent").style.display = "none";
};

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

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

document.addEventListener("DOMContentLoaded", function () {
    if (getCookie("cookieAccepted")) {
        var gtmScript = document.createElement("script");
        gtmScript.async = true;
        gtmScript.src = "https://www.googletagmanager.com/gtm.js?id=GTM-T95BJNHF";
        document.head.appendChild(gtmScript);

        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });

        var noscript = document.createElement("noscript");
        noscript.innerHTML = '<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T95BJNHF" height="0" width="0" style="display:none;visibility:hidden"></iframe>';
        document.body.appendChild(noscript);
    } else {
        document.getElementById("cookieConsent").style.display = "block";
    }
});
