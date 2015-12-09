var quotes = [
    "Compete with your friends",
    "Keep track of coders",
    "Set your goals",
    "Create an account now"
];

var i = -1;

setInterval(function() {
    $("#textslide").fadeOut(3000);
    var delay = 2000;
    setTimeout(function() {
        i++;
        $("#textslide").html(quotes[i]);
        $("#textslide").fadeIn(2000);
        if (i == quotes.length-1) {
            i = -1;
        }
    }, delay);   
}, 6 * 1000);
