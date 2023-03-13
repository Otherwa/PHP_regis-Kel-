window.addEventListener("load", () => {
    document.getElementById('programme').value = '--'
});


function Get_data(id) {

    let prog = $('#programme').val();

    $.ajax({
        type: 'POST',
        url: 'adminajax.php',
        data: {
            proginsights: prog,
        },
        success: function (data) {
            if (id == '--') {
                $('#data').html('');
            } else {
                $('#data').html(data);
            }
        }
    })
}