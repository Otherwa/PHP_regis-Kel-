// grand data overall
const Data1 = [];
const Labels = ['Very-Poor', 'Poor', 'Below-Average', 'Average', 'Good', 'Very-Good', 'Excellent'];

// get all Data
$(".hiddiv input").each(function (index) {
    Data1.push($(this).val());
});

// Data Segementation;by 0-7 index each
Data_1 = get_Dat(0, Data1);
Data_2 = get_Dat(7, Data1);
Data_3 = get_Dat(14, Data1);
Data_4 = get_Dat(21, Data1);
Data_5 = get_Dat(28, Data1);
Data_6 = get_Dat(35, Data1);
Data_7 = get_Dat(42, Data1);
Data_8 = get_Dat(49, Data1);
Data_9 = get_Dat(56, Data1);
Data_10 = get_Dat(63, Data1);
Data_11 = get_Dat(70, Data1);
Data_12 = get_Dat(77, Data1);
Data_13 = get_Dat(84, Data1);
Data_14 = get_Dat(91, Data1);
Data_15 = get_Dat(98, Data1);
Data_16 = get_Dat(105, Data1);
Data_17 = get_Dat(112, Data1);
// new
Data_18 = get_Dat(119, Data1);
Data_19 = get_Dat(126, Data1);
Data_20 = get_Dat(133, Data1);
Data_21 = get_Dat(140, Data1);
Data_22 = get_Dat(147, Data1);
Data_23 = get_Dat(154, Data1);
Data_24 = get_Dat(161, Data1);
Data_25 = get_Dat(168, Data1);





const ctx = document.getElementById('myChart').getContext('2d');
const ctx1 = document.getElementById('myChart1').getContext('2d');
const ctx2 = document.getElementById('myChart2').getContext('2d');
const ctx3 = document.getElementById('myChart3').getContext('2d');
const ctx4 = document.getElementById('myChart4').getContext('2d');
const ctx5 = document.getElementById('myChart5').getContext('2d');
const ctx6 = document.getElementById('myChart6').getContext('2d');
const ctx7 = document.getElementById('myChart7').getContext('2d');
const ctx8 = document.getElementById('myChart8').getContext('2d');
const ctx9 = document.getElementById('myChart9').getContext('2d');
const ctx10 = document.getElementById('myChart10').getContext('2d');
const ctx11 = document.getElementById('myChart11').getContext('2d');
const ctx12 = document.getElementById('myChart12').getContext('2d');
const ctx13 = document.getElementById('myChart13').getContext('2d');
const ctx14 = document.getElementById('myChart14').getContext('2d');
const ctx15 = document.getElementById('myChart15').getContext('2d');
const ctx16 = document.getElementById('myChart16').getContext('2d');

const ctx17 = document.getElementById('myChart17').getContext('2d');
const ctx18 = document.getElementById('myChart18').getContext('2d');
const ctx19 = document.getElementById('myChart19').getContext('2d');
const ctx20 = document.getElementById('myChart20').getContext('2d');
const ctx21 = document.getElementById('myChart21').getContext('2d');
const ctx22 = document.getElementById('myChart22').getContext('2d');
const ctx23 = document.getElementById('myChart23').getContext('2d');
const ctx24 = document.getElementById('myChart24').getContext('2d');
// const ctx25 = document.getElementById('myChart25').getContext('2d');



const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_1,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_2,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_3,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart3 = new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_4,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart4 = new Chart(ctx4, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_5,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart5 = new Chart(ctx5, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_6,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart6 = new Chart(ctx6, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_7,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});


const myChart7 = new Chart(ctx7, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_8,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});


const myChart8 = new Chart(ctx8, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_9,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart9 = new Chart(ctx9, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_10,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart10 = new Chart(ctx10, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_11,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart11 = new Chart(ctx11, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_12,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart12 = new Chart(ctx12, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_13,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});


const myChart13 = new Chart(ctx13, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_14,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});


const myChart14 = new Chart(ctx14, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_15,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart15 = new Chart(ctx15, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_16,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});


const myChart16 = new Chart(ctx16, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_17,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart17 = new Chart(ctx17, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_18,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart18 = new Chart(ctx18, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_19,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart19 = new Chart(ctx19, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_20,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart20 = new Chart(ctx20, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_21,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart21 = new Chart(ctx21, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_22,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart22 = new Chart(ctx22, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_23,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart23 = new Chart(ctx23, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_24,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const myChart24 = new Chart(ctx24, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: 'Ratings',
            data: Data_25,
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
                suggestedMin: 50,
                suggestedMax: 100
            }
        },
        plugins: {
            legend: {
                display: true,
            },
            title: {
                display: true,
            },
            datalabels: {
                anchor: 'end',
                align: 'top',
                formatter: (value, context) => {
                    context = value.substr(0, 5) + " %";
                    return context;
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

function get_Dat(i, Data1) {
    temp = []
    for (j = i; j < (i + 7); j++) {
        temp.push(Data1[j]);
    }
    return temp;
}



function downpdf() {
    // file save name
    window.print();
}