document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});

// roll no  validation
var roll = document.getElementById('rollno');
roll.addEventListener('input', () => {
    var rollno = roll.value;
    if (rollno.length < 10) {
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
    // works do not touch
var value1 = "";
// for Ajax requests noob code
// ref https://www.youtube.com/watch?v=neZTTWJ98-0

function FetchSem(id) {
    $('#semester').html('<option value =" ">--</option>');
    $('#subject').html('<option value =" ">--</option>');
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            tname: id
        },
        success: function(data) {
            $('#semester').html(data);
        }

    })
    value1 = id;
    // for And SQL query in ajaxtemp if isset$_POST'sem' && isset$_POST'teachername' method
}

// get subject for specific sem of teacher
function FetchSub(id) {
    $('#subject').html('<option value =" ">--</option>');
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            sem: id,
            teachername: value1,
        },
        success: function(data) {
            $('#subject').html(data);
        }

    })
}

// verify student ascyconously
function verify_stu() {
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: 'rollno=' + $('#rollno').val(),
        success: function(data) {
            $('#notvalid_roll').html(data);
        },
        error: function() {},
    })
}


// if ctrlid valid set ratings else none
window.setInterval(function() {
    var msg = document.getElementById('msg').value;
    console.log(msg);
    document.getElementById('msg_set').style.display = msg;
}, 1000);