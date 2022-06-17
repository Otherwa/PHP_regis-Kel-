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
    $('#msg_form').html('');
    $('#semester').html('<option value =" ">--</option>');
    $('#subject').html('<option value =" ">--</option>');
    $('#teacher').html('<option value =" ">--</option>');
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

function Is_Form_Sent() {
    let id_ = $('#rollno').val();
    // console.log(id_, class_, teach_, sem_, sub_);
    $.ajax({
        type: 'post',
        url: 'ajaxtemp.php',
        data: {
            cid_stu: id_,
        },
        success: function(data) {
            $('#msg_form').html(data);
        }

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