function signupPage() {
    document.getElementById("linksignup").hidden = false;
    document.getElementById("login").hidden = true;
}
function display_Next_Image() {
    x = (x === images.length - 1) ? 0 : x + 1;
    document.getElementById("back_img").src = images[x];
}

function display_Previous_Image() {
    x = (x <= 0) ? images.length - 1 : x - 1;
    document.getElementById("back_img").src = images[x];
}

function start_Timer() {
    setInterval(display_Next_Image, 4000);
}

var images = [], x = -1;
images[0] = "images/20230103103349_1570 (1).jpg";
images[1] = "images/20221221201749_1541 (1).jpg";
images[2] = "images/20230103103336_7663.jpg";