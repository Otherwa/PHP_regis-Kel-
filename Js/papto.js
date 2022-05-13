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
var value2 = "";


// for Ajax requests noob code
// ref https://www.youtube.com/watch?v=neZTTWJ98-0
function FetchTeacher_from_class(id) {
    $('#semester').html('<option value =" ">--</option>');
    $('#subject').html('<option value =" ">--</option>');
    $('#teacher').html('<option value =" ">--</option>');
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            class: id
        },
        success: function(data) {
            // first clear data
            $('#teacher').html("");
            $('#teacher').html(data);
        }

    })
    class1 = id;
}

function FetchSem_from_teacher(id) {
    $('#semester').html('<option value =" ">--</option>');
    $('#subject').html('<option value =" ">--</option>');
    console.log(value2);
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            tname: id,
            classv1: class1,
        },
        success: function(data) {
            $('#semester').html("");
            $('#semester').html(data);
        }

    })
    value1 = id;
    // for And SQL query in ajaxtemp if isset$_POST'sem' && isset$_POST'teachername' method
}

// get subject for specific sem of teacher
function FetchSub_from_division(id) {
    $('#subject').html('<option value =" ">--</option>');
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            sem: id,
            teachername: value1,
        },
        success: function(data) {
            $('#subject').html("");
            $('#subject').html(data);
        }

    })
}


// verification 

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
        error: function() {},
    })
}


// if ctrlid valid set ratings else none every 50 ms 
window.setInterval(function() {
    if (document.getElementById('msg') != null) {
        var msg = document.getElementById('msg').value;
        // console.log(msg);
        document.getElementById('msg_set').style.display = msg;
    } else {
        document.getElementById("sub").disabled = true;
    }
}, 50);