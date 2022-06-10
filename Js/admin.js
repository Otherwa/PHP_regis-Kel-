document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});

const ctx = document.getElementById('myChart').getContext('2d');
const ctx1 = document.getElementById('myChart1').getContext('2d');
const ctx2 = document.getElementById('myChart2').getContext('2d');

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
let x = document.getElementById('count').value;


let _data1 = document.getElementById('_data1').value;
let _data2 = document.getElementById('_data2').value;
let _data3 = document.getElementById('_data3').value;
let _data4 = document.getElementById('_data4').value;
let _data5 = document.getElementById('_data5').value;
let _data6 = document.getElementById('_data6').value;
let _data7 = document.getElementById('_data7').value;
let _data8 = document.getElementById('_data8').value;
let _data9 = document.getElementById('_data9').value;
let _data10 = document.getElementById('_data10').value;
let _data11 = document.getElementById('_data11').value;
let _data12 = document.getElementById('_data12').value;
let _data13 = document.getElementById('_data13').value;
let _data14 = document.getElementById('_data14').value;
let _data15 = document.getElementById('_data15').value;
let _data16 = document.getElementById('_data16').value;
let _data17 = document.getElementById('_data17').value;
let _data18 = document.getElementById('_data18').value;
let _data19 = document.getElementById('_data19').value;
let _data20 = document.getElementById('_data20').value;
let _data21 = document.getElementById('_data21').value;
let _data22 = document.getElementById('_data22').value;
let _data23 = document.getElementById('_data23').value;
let _data24 = document.getElementById('_data24').value;
let _data25 = document.getElementById('_data25').value;
let _x = document.getElementById('_count').value;

let __data1 = document.getElementById('__data1').value;
let __data2 = document.getElementById('__data2').value;
let __data3 = document.getElementById('__data3').value;
let __data4 = document.getElementById('__data4').value;
let __data5 = document.getElementById('_data5').value;
let __data6 = document.getElementById('__data6').value;
let __data7 = document.getElementById('__data7').value;
let __data8 = document.getElementById('__data8').value;
let __data9 = document.getElementById('__data9').value;
let __data10 = document.getElementById('__data10').value;
let __data11 = document.getElementById('__data11').value;
let __data12 = document.getElementById('__data12').value;
let __data13 = document.getElementById('__data13').value;
let __data14 = document.getElementById('__data14').value;
let __data15 = document.getElementById('__data15').value;
let __data16 = document.getElementById('__data16').value;
let __data17 = document.getElementById('__data17').value;
let __data18 = document.getElementById('__data18').value;
let __data19 = document.getElementById('__data19').value;
let __data20 = document.getElementById('__data20').value;
let __data21 = document.getElementById('__data21').value;
let __data22 = document.getElementById('__data22').value;
let __data23 = document.getElementById('__data23').value;
let __data24 = document.getElementById('__data24').value;
let __data25 = document.getElementById('__data25').value;
let __x = document.getElementById('__count').value;

const labels = [];

let i = 00;
while (i < 25) {
    let data = i + ':00';
    labels.push(data);
    i++;
}

const Data = [data1, data2, data3, data4, data5, data6, data7, data8, data9, data10, data11, data12, data13, data14, data15, data16, data17, data18, data19, data20, data21, data22, data23, data24, data25];
const Data1 = [_data1, _data2, _data3, _data4, _data5, _data6, _data7, _data8, _data9, _data10, _data11, _data12, _data13, _data14, _data15, _data16, _data17, _data18, _data19, _data20, _data21, _data22, _data23, _data24, _data25];
const Data2 = [__data1, __data2, __data3, __data4, __data5, __data6, __data7, __data8, __data9, __data10, __data11, __data12, __data13, __data14, __data15, __data16, __data17, __data18, __data19, __data20, __data21, __data22, __data23, __data24, __data25];

Chart.defaults.font.size = 13;
Chart.defaults.font.family = "monospace";
Chart.defaults.font.weight = "900";

// doc https://www.chartjs.org/docs/latest/samples/animations/progressive-line.html

const totalDuration = 1750;
const delayBetweenPoints = totalDuration / Data.length;
const previousY = (ctx) => ctx.index === 0 ? ctx.chart.scales.y.getPixelForValue(100) : ctx.chart.getDatasetMeta(ctx.datasetIndex).data[ctx.index - 1].getProps(['y'], true).y;
const animation = {
    x: {
        type: 'number',
        easing: 'linear',
        duration: delayBetweenPoints,
        from: NaN, // the point is initially skipped
        delay(ctx) {
            if (ctx.type !== 'data' || ctx.xStarted) {
                return 0;
            }
            ctx.xStarted = true;
            return ctx.index * delayBetweenPoints;
        }
    },
    y: {
        type: 'number',
        easing: 'linear',
        duration: delayBetweenPoints,
        from: previousY,
        delay(ctx) {
            if (ctx.type !== 'data' || ctx.yStarted) {
                return 0;
            }
            ctx.yStarted = true;
            return ctx.index * delayBetweenPoints;
        }
    }
};

const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Students-Forms Filled up',
            data: Data,
            borderColor: 'rgb(255, 99, 132)',
            fill: {
                target: 'origin',
                above: 'rgba(255, 99, 132, 0.6)', // Area will be red above the origin
            },
        }]
    },
    options: {
        animation,
        elements: {
            point: {
                backgroundColor: 'rgb(255, 99, 132)',
                hoverBackgroundColor: 'rgba(255, 99, 132, 0.5)',
                radius: 6,
                pointStyle: 'circ',
                hoverRadius: 12,
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Students',
            },
            subtitle: {
                display: true,
                text: 'Till now ' + x,
                padding: {
                    bottom: 10,
                }
            },

        },
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


// student chartjs

const myChart1 = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Students-Forms Filled up',
            data: Data1,
            borderColor: 'rgb(255, 99, 132)',
            fill: {
                target: 'origin',
                above: 'rgba(255, 99, 132, 0.6)', // Area will be red above the origin
            },
        }]
    },
    options: {
        animation,
        elements: {
            point: {
                backgroundColor: 'rgb(255, 99, 132)',
                hoverBackgroundColor: 'rgba(255, 99, 132, 0.5)',
                radius: 6,
                pointStyle: 'circ',
                hoverRadius: 12,
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Students',
            },
            subtitle: {
                display: true,
                text: 'Till now ' + _x,
                padding: {
                    bottom: 10,
                }
            },

        },
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

// faculty form

const myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Students-Forms Filled up',
            data: Data2,
            borderColor: 'rgb(255, 99, 132)',
            fill: {
                target: 'origin',
                above: 'rgba(255, 99, 132, 0.6)', // Area will be red above the origin
            },
        }]
    },
    options: {
        animation,
        elements: {
            point: {
                backgroundColor: 'rgb(255, 99, 132)',
                hoverBackgroundColor: 'rgba(255, 99, 132, 0.5)',
                radius: 6,
                pointStyle: 'circ',
                hoverRadius: 12,
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Students',
            },
            subtitle: {
                display: true,
                text: 'Till now ' + __x,
                padding: {
                    bottom: 10,
                }
            },

        },
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