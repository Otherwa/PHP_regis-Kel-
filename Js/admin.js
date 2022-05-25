document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});
const ctx = document.getElementById('myChart').getContext('2d');
let data = document.getElementById('data').value;

const labels = ['Forms Submitted'];

const Data = [data];
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Number of People registered',
            data: Data,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgb(255, 99, 132)',
            borderWidth: 1
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