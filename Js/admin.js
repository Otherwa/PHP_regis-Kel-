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

    $.ajax({
        type: 'POST',
        url: 'adminajax.php',
        data: {
            teac1: teac,
            class: id
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




const Labels = ['Very-Poor', 'Poor', 'Below-Average', 'Average', 'Good', 'Very-Good', 'Excellent'];
Data1 = ['1', '1', '1', '1', '1', '1', '1'];
const ctx = document.getElementById('myChart').getContext('2d');

const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data1,
            backgroundColor: [
                'rgba(255, 99, 132, 0.7)',
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 206, 86, 0.7)',
                'rgba(75, 192, 192, 0.7)',
                'rgba(53, 102, 255, 0.7)',
                'rgba(255, 159, 64, 0.7)',
                'rgba(255, 259, 64, 0.7)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(53, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 259, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
                text: 'Overall'
            },
            datalabels: {
                anchor: 'middle',
                align: 'top',
                formatter: (value, context) => {
                    // console.log(value);
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

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
                $('#divGraph').html('<p>Invalid</p>')
            } else {
                // send data from php input hidden filed
                $('#divGraph').html(bar_graphic);

                // jquery manague data feed
                while (Data1.length > 0) {
                    Data1.pop();
                }

                let rate1 = $('#0').val();
                let rate2 = $('#1').val();
                let rate3 = $('#2').val();
                let rate4 = $('#3').val();
                let rate5 = $('#4').val();
                let rate6 = $('#5').val();
                let rate7 = $('#6').val();
                Data1.push(rate1, rate2, rate3, rate4, rate5, rate6, rate7);
                myChart.update();
            }
        }
    });
}


// myChart.canvas.parentNode.style.height = '50%';
// myChart.canvas.parentNode.style.width = '50%';