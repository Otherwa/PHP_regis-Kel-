window.addEventListener("load", () => {
    document.getElementById('programme').value = '--'
    document.getElementById('class').value = '--'
});

function Get_Class(id) {

    let prog = $('#programme').val();

    $.ajax({
        type: 'POST',
        url: 'adminajax.php',
        data: {
            prog: prog,
        },
        success: function (data) {
            if (id == '--') {
                $('#sem').html('<option value="--">--</option>');
            } else {
                $('#class').html(data);
            }
        }
    })
}

function Get_data(id) {

}