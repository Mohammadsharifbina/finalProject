function userCookie() {

    if (localStorage.length!=0) {
        window.location.href = "services.html";
    }
    else {

        if (confirm("do you want to save session")) {
            window.location.href = "login.html"
        }
        else {
            window.location.href = "#";
        }
    }
}
function goingtoaboutpage() {

    if (sessionStorage.length != 0) {
        window.location.href = "about.html";
    }
    else {

        if (confirm("do you want to save session")) {
            window.location.href = "login.html"
        }
        else {
            window.location.href = "#";
        }
    }
}
function goToContactpage() {

    if (sessionStorage.length != 0) {
        window.location.href = "contact.html";
    }
    else {

        if (confirm("do you want to save sesstion")) {
            window.location.href = "login.html"
        }
        else {
            window.location.href = "#";
        }
    }
}
