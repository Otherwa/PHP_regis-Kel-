document.addEventListener('contextmenu', function (e) {
    e.preventDefault();
});

// roll no  validation
var roll = document.getElementById('rollno');
document.getElementById('rollno').addEventListener('input', () => {
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


// works do not touch
var value1 = "";
var value2 = "";
var roll_set = $('#roll').val();



// for Ajax requests noob code
// ref https://www.youtube.com/watch?v=neZTTWJ98-0

// verify student async
function verify_stu() {
    $('#msg_form').html('');
    $('#semester').html('<option value =" ">--</option>');
    $('#subject').html('<option value =" ">--</option>');
    $('#teacher').html('<option value =" ">--</option>');
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: 'rollno=' + $('#rollno').val(),
        success: function (data) {
            $('#notvalid_roll').html(data);
            $('#msg_form').html();
            let name_set = $('#set_name').val();
            let class_set = $('#set_class').val();
            $('#name').val(name_set);
            var option1 = $('<option></option>').attr("value", "--").text("--");
            var option2 = $('<option></option>').attr("value", class_set).text(class_set);
            $("#class").empty().append(option1, option2);
        },
        error: function () {
            console.log(response.status);
        },
    })
}


function FetchTeacher_from_class(id) {
    $('#msg_form').html('');
    $('#semester').html('<option value =" ">--</option>');
    $('#subject').html('<option value =" ">--</option>');
    $('#teacher').html('<option value =" ">--</option>');
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            class: id
        },
        success: function (data) {
            if (id == "--") {
                $('#msg').attr('value', 'none');
                $('#msg_form').html("<p>Invalid</p>").css("color", "red");
                $('#msg_set').css("display", "none");
            } else {
                $('#teacher').html("");
                $('#teacher').html(data);
            }
        }

    })
    class1 = id;
}

function FetchSem_from_teacher(id) {
    $('#msg_form').html('');
    $('#semester').html('<option value =" ">--</option>');
    $('#subject').html('<option value =" ">--</option>');
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            tname: id,
            classv1: class1,
        },
        success: function (data) {
            if (id == "--") {
                $('#msg').attr('value', 'none');
                $('#msg_form').html("<p>Invalid</p>").css("color", "red");
                $('#msg_set').css("display", "none");
            } else {
                $('#semester').html("");
                $('#semester').html(data);
            }
        }

    })
    value1 = id;
    // for And SQL query in ajaxtemp if isset$_POST'sem' && isset$_POST'teachername' method
}

// get subject for specific sem of teacher
function FetchSub_from_division(id) {
    var div_sel = $('#division').val()
    
    $('#msg_form').html('');
    $('#subject').html('<option value =" ">--</option>');
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            sem: id,
            teachername: value1,
            div : div_sel
        },
        success: function (data) {
            if (id == "--") {
                $('#msg').attr('value', 'none');
                $('#msg_form').html("<p>Invalid</p>").css("color", "red");
                $('#msg_set').css("display", "none");
            } else {
                $('#subject').html("");
                $('#subject').html(data);
            }
        }

    })
}

// check if form is filled
function Is_Form_Sent() {
    let id_ = $('#rollno').val();
    let class_ = $('#class').val();
    let teach_ = $('#teacher').val();
    let sem_ = $('#semester').val();
    let sub_ = $('#subject').val();
    // console.log(id_, class_, teach_, sem_, sub_);
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            cid: id_,
            class1: class_,
            teach: teach_,
            sem: sem_,
            sub: sub_,
        },
        success: function (data) {
            if (sub_ == "--") {
                $('#msg_form').html("<p>Invalid</p>").css("color", "red");
                $('#msg_set').css("display", "none");
            } else {
                $('#msg_form').html(data);
            }
        }

    })
}


// verification 
// begin condition;
window.onload = () => {
    document.getElementById("sub").disabled = true;
}


// if ctrlid valid set ratings else none every 50 ms 
// no change inspect works

window.setInterval(function () {
    if (document.getElementById('msg') != null) {
        var msg = document.getElementById('msg').value;
        // console.log(msg);
        document.getElementById('msg_set').style.display = msg;
    } else {
        document.getElementById("sub").disabled = true;
    }
}, 50);
