document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});
//timer works DO NOT Alter
var countDownDatestart = new Date("May 8, 2022 00:00:00").getTime(); //Set startdate on event it works dont touch 
var countDownDateend = new Date("May 20, 2022 24:00:00").getTime(); //Set enddate on event it works dont touch

// Update 1 second
var x = setInterval(() => {
        var now = new Date().getTime();
        var timerem = countDownDateend - now;
        var timeend = countDownDatestart - now;
        // days, hours, minutes and seconds
        var days = Math.floor(timerem / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timerem % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timerem % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timerem % (1000 * 60)) / 1000);
        document.querySelector("#demo").style.fontSize = "2rem";
        document.querySelector("#demo").style.line_height = "1.6rem";
        document.getElementById("demo").innerHTML = days + "d " + hours + "hrs " + minutes + "min " + seconds + "sec ";
        if (timeend < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Select any One Form to fill.";
            document.getElementById("demo").style.fontSize = "1.2rem";
            document.getElementById("demo").style.line_height = "1.6rem";
        }

        if (now > countDownDatestart && now < countDownDateend) {
            document.getElementById('forms').style.display = "block";
        } else if (now > countDownDatestart && now > countDownDateend) {
            document.getElementById('forms').style.display = "none";
            document.getElementById('clown_com').src = "https://y.yarn.co/69994431-d693-488c-a19f-bdb447c9a0d8_text.gif";
            document.getElementById('msg').style.display = "block";
            document.getElementById('msg-p').innerHTML = "Survey has Ended.";
            document.getElementById("demo").innerHTML = "Oh no";
        } else {
            document.getElementById('clown_com').src = "https://c.tenor.com/tCAeIgVIUKUAAAAC/why-the-office.gif";
            document.getElementById('msg').style.display = "block";
            document.getElementById('msg-p').innerHTML = "You are about Five years to early";
        }

        // if (now < countDownDatestart) {
        //     document.getElementById('clown_com').src = "https://c.tenor.com/tCAeIgVIUKUAAAAC/why-the-office.gif";
        //     document.getElementById('msg-p').innerHTML = "Survey has not been started yet.";
        // } else {
        //     document.getElementById('clown_com').src = "https://y.yarn.co/69994431-d693-488c-a19f-bdb447c9a0d8_text.gif";
        // }


    },
    1000);