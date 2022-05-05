//timer works DO NOT Alter
var contDownDatestart = new Date("May 6, 2022 00:00:00").getTime(); //Set startdate on event it works dont touch 
var countDownDateend = new Date("May 15, 2022 24:00:00").getTime(); //Set enddate on event it works dont touch

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
        document.getElementById("demo").innerHTML = "Select any One Form to fill.";
        document.querySelector("#demo").style.fontSize = "1.2rem";
        document.querySelector("#demo").style.line_height = "1.6rem";
    }
    if (now > contDownDatestart && now < countDownDateend) {
        document.getElementById('forms').style.display = "block";
        document.getElementById('msg').style.display = "none";
    } else {
        document.getElementById('forms').style.display = "none";
        document.getElementById('msg').style.display = "block";
    }

    if (now < contDownDatestart) {
        var gif = "https://y.yarn.co/4b8bfb4c-5a72-4f78-aca2-a7cd474209a5_text.gif";
        document.getElementById('clown_com').src = gif;
    } else {
        document.getElementById('clown_com').src = "https://y.yarn.co/69994431-d693-488c-a19f-bdb447c9a0d8_text.gif";
    }
}, 1000);