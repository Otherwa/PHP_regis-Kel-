document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});


function Get_Class(id) {
    $('#class').html('<option value="--">--</option>');
    $('#subjec').html('<option value="--">--</option>');
    $('#sem').html('<option value="--">--</option>');

    $.ajax({
        type: 'POST',
        url: 'adminajax.php',
        data: {
            teach: id
        },
        success: function(data) {
            $('#class').html(data);
        }
    })
}

function Get_Sem(id) {
    $('#sem').html('<option value="--">--</option>');
    $('#subjec').html('<option value="--">--</option>');

    let teac = $('#teacher').val();
    console.log(teac);
    $.ajax({
        type: 'POST',
        url: 'adminajax.php',
        data: {
            teac1: teac
        },
        success: function(data) {
            if (id == '--') {
                $('#sem').html('<option value="--">--</option>');
            } else {
                $('#sem').html(data);
            }
        }
    })
}

function Get_Sub(id) {
    $('#subjec').html('<option value="--">--</option>');
    let teacher = $('#teacher').val();
    console.log(teacher, id);
    $.ajax({
        type: 'POST',
        url: 'adminajax.php',
        data: {
            sem: id,
            teachername: teacher
        },
        success: function(data) {
            if (id == '--') {
                $('#subjec').html('<option value="--">--</option>');
            } else {
                $('#subjec').html(data);
            }
        }
    })
}

// ajax chart
function Get_Chart() {
    let teacher = $('#teacher').val();
    let class1 = $('#class').val();
    let sem = $('#sem').val();
    let subjec = $('#subjec').val();
    $.ajax({
        type: 'POST',
        url: 'adminajax.php',
        data: {
            teacher: teacher,
            class1: class1,
            sem: sem,
            sub: subjec,
        },
        success: function(bar_graphic) {
            if (subjec == '--') {
                $('#divGraph').html('Invalid')
            } else {
                $('#divGraph').html(bar_graphic);
            }
        }
    });
}



function Draw_Chart() {

    let rate1 = $('#0').val();
    let rate2 = $('#1').val();
    let rate3 = $('#2').val();
    let rate4 = $('#3').val();
    let rate5 = $('#4').val();
    let rate6 = $('#5').val();
    data1 = [rate1, rate2, rate3, rate4, rate5, rate6];
    console.log(data1);
    const data = {
        labels: [
            'Very-Poor',
            'Poor',
            'Average',
            'Good',
            'Very-Good',
            'Excelent',
        ],
        datasets: [{
            label: 'My First Dataset',
            data: data1,
            fill: true,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgb(255, 99, 132)',
            pointBackgroundColor: 'rgb(255, 99, 132)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(255, 99, 132)',
            pointRadius: 8,
            pointHoverRadius: 9
        }, ]
    };

    const config = {
        type: 'radar',
        data: data,
        options: {
            elements: {
                line: {
                    borderWidth: 3
                }
            }
        },
    };

    if (window.myChart instanceof Chart) {
        window.myChart.destroy();
    }
    let ctx = document.getElementById('myChart');

    const myChart = new Chart(
        ctx, config
    );

    myChart.canvas.parentNode.style.height = '40vh';
    myChart.canvas.parentNode.style.width = '40vw';



}


function Refresh() {
    window.location.reload();
}