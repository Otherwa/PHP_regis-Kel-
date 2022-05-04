//timer
var contDownDatestart = new Date("May 1, 2022 24:00:00").getTime();
var countDownDateend = new Date("May 5, 2022 24:00:00").getTime(); //Set date on event

// Update 1 second
var x = setInterval(() => {
    var now = new Date().getTime();
    var timerem = countDownDateend - now;
    // days, hours, minutes and seconds
    var days = Math.floor(timerem / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timerem % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timerem % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timerem % (1000 * 60)) / 1000);
    document.querySelector("#demo").style.fontSize = "2rem";
    document.querySelector("#demo").style.line_height = "1.6rem";
    document.getElementById("demo").innerHTML = days + "d " + hours + "hrs " + minutes + "min " + seconds + "sec ";
    if (timerem < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Oh No ⌚!";
        document.querySelector("#demo").style.fontSize = "2rem";
        document.querySelector("#demo").style.line_height = "1.6rem";

    }
    if (now < countDownDateend && now > contDownDatestart) {
        document.getElementById('forms').style.display = "block";
        document.getElementById('msg').style.display = "none";
    } else {
        document.getElementById('forms').style.display = "none";
        document.getElementById('msg').style.display = "block";
    }
}, 1000);