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
    // if wrong clear
    $('#msg_form').html('');
    $('#semester').html('<option value =" ">--</option>');
    $('#subject').html('<option value =" ">--</option>');
    $('#teacher').html('<option value =" ">--</option>');
    $('#programme').html('<option value =" ">--</option>');
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: 'rollno=' + $('#rollno').val(),
        success: function(data) {
            $('#notvalid_roll').html(data);
            $('#msg_form').html();
            let name_set = $('#set_name').val();
            let class_set = $('#set_class').val();
            $('#name').val(name_set);
            var option1 = $('<option></option>').attr("value", "--").text("--");
            var option2 = $('<option></option>').attr("value", class_set).text(class_set);
            $("#class").empty().append(option1, option2);
        },
        error: function() {
            console.log(response.status);
        },
    })
}

function Get_Programme() {
    // programme get
    let ctrlid = $('#rollno').val();
    let class1 = $('#class').val();
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            cid_crt: ctrlid
        },
        success: function(data) {
            if (class1 == "--") {
                $('#programme').html('<option value ="--">--</option>');
                $('#msg').attr('value', 'none');
                $('#msg_form').html("<p>Invalid</p>").css("color", "red");
                $('#msg_set').css("display", "none");
            } else {
                $('#programme').html();
                $('#programme').html(data);
            }
        }

    })
}

function Is_Form_Sent() {
    let id_ = $('#rollno').val();
    let programme = $('#programme').val();

    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            cid_stu: id_,
        },
        success: function(data) {
            if (programme == "--") {
                $('#msg_form').html("<p>Invalid</p>").css("color", "red");
                $('#msg_set').css("display", "none");
            } else {
                $('#msg_form').html(data);
            }
        }

    })
}

window.onload = () => {
    document.getElementById("sub").disabled = true;
}

// if ctrlid valid set ratings else none every 50 ms 

window.setInterval(function() {
    if (document.getElementById('msg') != null) {
        var msg = document.getElementById('msg').value;
        document.getElementById('msg_set').style.display = msg;
    } else {
        document.getElementById("sub").disabled = true;
    }
}, 50);