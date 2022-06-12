document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});

// roll no  validation
var roll = document.getElementById('rollno');
roll.addEventListener('input', () => {
    var rollno = roll.value;
    if (rollno.length < 10 || rollno.length > 10) {
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

// begin condition;
window.onload = () => {
        document.getElementById("sub").disabled = true;
    }
    // verify student async
function verify_stu() {
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: 'rollno=' + $('#rollno').val(),
        success: function(data) {
            $('#notvalid_roll').html(data);
        },
        error: function() {
            console.log(response.status);
        },
    })
}


// if ctrlid valid set ratings else none every 50 ms 
// if ctrlid valid set ratings else none every 50 ms 
window.setInterval(function() {
    if (document.getElementById('msg') != null) {
        var msg = document.getElementById('msg').value;
        // console.log(msg);
        document.getElementById('msg_set').style.display = msg;
    }
}, 50);