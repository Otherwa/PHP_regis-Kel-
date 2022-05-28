document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});

window.onload = () => {
    document.getElementById("sub").disabled = true;
}

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

window.setInterval(function() {
    if (document.getElementById('msg') != null) {
        var msg = document.getElementById('msg').value;
        // console.log(msg);
        document.getElementById('msg_set').style.display = msg;
    }
}, 50);