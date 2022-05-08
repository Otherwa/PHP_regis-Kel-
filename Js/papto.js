document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});

// paper visibility
function selectedsemester() {
    var select_Sem = document.getElementById('semester');
    var value = select_Sem.options[select_Sem.selectedIndex].value;
    console.log(value);
    document.getElementById('semester1_paper').style.display = "none";
    document.getElementById('semester2_paper').style.display = "none";
    document.getElementById('semester3_paper').style.display = "none";
    document.getElementById('semester4_paper').style.display = "none";
    document.getElementById('semester5_paper').style.display = "none";
    document.getElementById('semester6_paper').style.display = "none";
    if (value == "I") {
        document.getElementById('semester1_paper').style.display = "block";
    } else if (value == "II") {
        document.getElementById('semester2_paper').style.display = "block";
    } else if (value == "III") {
        document.getElementById('semester3_paper').style.display = "block";
    } else if (value == "IV") {
        document.getElementById('semester4_paper').style.display = "block";
    } else if (value == "V") {
        document.getElementById('semester5_paper').style.display = "block";
    } else if (value == "VI") {
        document.getElementById('semester6_paper').style.display = "block";
    }
}

// roll no  validation
var roll = document.getElementById('rollno');
roll.addEventListener('input', () => {
    console.log("nice");
    var rollno = roll.value;
    if (rollno.length < 8) {
        roll.style.borderColor = "red";
    } else {
        roll.style.borderColor = "#006eff";
    }
})
roll.addEventListener('blur', () => {
    roll.style.borderColor = "gray";
})
roll.addEventListener('focus', () => {
    roll.style.borderColor = "#006eff";
})