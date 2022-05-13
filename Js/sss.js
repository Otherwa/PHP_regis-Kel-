document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});

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
// if ctrlid valid set ratings else none every 50 ms 
window.setInterval(function() {
    if (document.getElementById('msg') != null) {
        var msg = document.getElementById('msg').value;
        // console.log(msg);
        document.getElementById('msg_set').style.display = msg;
    }
}, 50);