document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});
//timer works DO NOT Alter
var countDownDatestart = new Date("June 5, 2022 21:30:00").getTime(); //Set startdate on event it works dont touch 
var countDownDateend = new Date("June 10, 2022 22:35:50").getTime(); //Set enddate on event it works dont touch

// Update 1 second
var x = setInterval(() => {
        var now = new Date().getTime();
        var timerem = countDownDateend - now;
        var timeend = countDownDatestart - now;
        // days, hours, minutes and seconds
        var days = Math.floor(timeend / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeend % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeend % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeend % (1000 * 60)) / 1000);

        // set or display form status
        // check if dates fall in timelimit if yes display forms or else msg
        let hidcopy = document.getElementById('hidcopy');

        if (now > countDownDatestart && now < countDownDateend) {
            // within timelimit
            hidcopy.style.display = 'inline-block';
            document.getElementById('forms').style.display = "block";
            document.getElementById('msg').style.display = "none";
            document.getElementById("demo").innerHTML = "Select Any Form to Fill.";
            document.getElementById("demo").style.fontSize = "1.3rem";
            document.getElementById("demo").style.fontFamily = "monospace";
            document.getElementById("demo").style.line_height = "1.6rem";
            document.getElementById("demo").style.fontWeight = "bold";
            document.getElementById('foot').style.display = "inline-block";
            document.getElementById("foot").src = "https://bang-phinf.pstatic.net/a/32ehga/0_8g9Ud018bng1q157yzwrfmle_wzcvar.gif";
        } else if (now > countDownDatestart && now > countDownDateend) {
            // timelimit above
            document.getElementById('forms').style.display = "none";
            hidcopy.style.display = 'inline-block';
            document.getElementById('clown_com').src = "https://pa1.narvii.com/6771/ab4135057351e87e09676e559b5e76f1cad5c77e_hq.gif";
            document.getElementById('msg').style.display = "block";
            document.getElementById('foot').style.display = "inline-block";
            document.getElementById("msg-p").style.fontFamily = "monospace"
            document.getElementById('msg-p').innerHTML = "Survey has Ended.";
            document.getElementById("demo").innerHTML = "Oh no! The Time Allotted For Form Fillup Has Passed";
            document.getElementById("demo").style.fontSize = "1.3rem";
            document.getElementById("demo").style.fontFamily = "monospace"
            document.getElementById("demo").style.line_height = "1.6rem";
        } else {
            // timelimit below
            hidcopy.style.display = 'inline-block';
            document.getElementById('demo').style.display = "none"; // loading effect farcry
            document.getElementById('forms').style.display = "none";
            document.getElementById('clown_com').src = "https://i.pinimg.com/originals/a7/68/76/a76876b05cc5767ce6ce5c59abceb7e4.gif";
            document.getElementById('msg').style.display = "block";
            if (days != 0) { document.getElementById('msg-p').innerHTML = "You Are About " + day + " day too Early"; } else if (hours != 0) { document.getElementById('msg-p').innerHTML = "You Are About " + hours + " hr too Early"; } else if (minutes != 0) { document.getElementById('msg-p').innerHTML = "You Are About " + minutes + " min too Early"; } else if (seconds != 0) { document.getElementById('msg-p').innerHTML = "You Are About " + seconds + " sec too Early"; }
            document.getElementById("msg-p").style.fontSize = "1.3rem";
            document.getElementById("msg-p").style.fontFamily = "monospace"
            document.getElementById("msg-p").style.line_height = "1.3rem";
            document.getElementById('foot').style.display = "inline-block";
        }
    },
    1000);