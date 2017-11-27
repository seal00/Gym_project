window.onscroll = function() {scroll()};

function scroll() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("btopo").style.display = "block";
    } else {
        document.getElementById("btopo").style.display = "none";
    }
}

function topFunction() {
    document.documentElement.scrollTop = 0;
}