document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});

const ctx = document.getElementById('myChart').getContext('2d');
let data1 = document.getElementById('data1').value;
let data2 = document.getElementById('data2').value;
let data3 = document.getElementById('data3').value;
let data4 = document.getElementById('data4').value;
let data5 = document.getElementById('data5').value;
let data6 = document.getElementById('data6').value;
let data7 = document.getElementById('data7').value;
let data8 = document.getElementById('data8').value;
let data9 = document.getElementById('data9').value;
let data10 = document.getElementById('data10').value;
let data11 = document.getElementById('data11').value;
let data12 = document.getElementById('data12').value;
let data13 = document.getElementById('data13').value;
let data14 = document.getElementById('data14').value;
let data15 = document.getElementById('data15').value;
let data16 = document.getElementById('data16').value;
let data17 = document.getElementById('data17').value;
let data18 = document.getElementById('data18').value;
let data19 = document.getElementById('data19').value;
let data20 = document.getElementById('data20').value;
let data21 = document.getElementById('data21').value;
let data22 = document.getElementById('data22').value;
let data23 = document.getElementById('data23').value;
let data24 = document.getElementById('data24').value;
let data25 = document.getElementById('data25').value;

const labels = [
    '00:00',
    '01:00',
    '02:00',
    '03:00',
    '04:00',
    '05:00',
    '06:00',
    '07:00',
    '08:00',
    '09:00',
    '10:00',
    '11:00',
    '12:00',
    '13:00',
    '14:00',
    '15:00',
    '16:00',
    '17:00',
    '18:00',
    '19:00',
    '20:00',
    '21:00',
    '22:00',
    '23:00',
    '24:00'
];
const Data = [data1, data2, data3, data4, data5, data6, data7, data8, data9, data10, data11, data12, data13, data14, data15, data16, data17, data18, data19, data20, data21, data22, data23, data24, data25];

Chart.defaults.font.size = 12;
Chart.defaults.font.family = "monospace";
Chart.defaults.font.weight = "900";
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'People-registered',
            data: Data,
            borderColor: 'rgb(255, 99, 132)',
            fill: {
                target: 'origin',
                above: 'rgba(255, 99, 132, 0.2)', // Area will be red above the origin
            }

        }]
    },

    options: {
        indexAxis: 'x',
        scales: {
            y: {
                ticks: {
                    crossAlign: 'far',
                }
            }
        },
        scales: {
            y: {
                min: 0,
            },
            x: {
                type: 'category',
            }
        },
        animations: {
            tension: {
                duration: 1000,
                easing: 'linear',
                from: 0,
                to: 0.3,
                loop: true
            }
        },
    },

});


// start  condition
let list = document.getElementById('list');
list.style.display = 'none';

// toggle
function Togglegraph_list(options) {
    console.log(options)
    let graph = document.getElementById('myChart');
    let list = document.getElementById('list');
    if (options == 'graph') {
        graph.style.display = 'inline-block';
        list.style.display = 'none';
    } else {
        graph.style.display = 'none';
        list.style.display = 'inline-block';
    }
}