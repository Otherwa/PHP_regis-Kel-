document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});
const ctx = document.getElementById('myChart').getContext('2d');
let data_mon = document.getElementById('monday').value;
let data_tue = document.getElementById('tuesday').value;
let data_wed = document.getElementById('wednesday').value;
let data_thu = document.getElementById('thursday').value;
let data_fri = document.getElementById('friday').value;
let data_sat = document.getElementById('saturday').value;
let data_sun = document.getElementById('sunday').value;


const labels = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

const Data = [data_mon, data_tue, data_wed, data_thu, data_fri, data_sat, data_sun];
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Number of People registered',
            data: Data,
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
    },
    options: {
        animations: {
            tension: {
                duration: 1000,
                easing: 'linear',
                from: 0.05,
                to: 0.3,
                loop: true
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});