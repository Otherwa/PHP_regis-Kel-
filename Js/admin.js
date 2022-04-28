const ctx = document.getElementById('myChart').getContext('2d');
var chart_data = document.getElementById('chardata').value;

var Data = [chart_data];
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Form Submitted Peron\'s'],
        datasets: [{
            label: 'No.of People Registered',
            data: Data,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgb(255, 99, 132)',
            ],
            borderWidth: 1,
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});