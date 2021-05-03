var datasets_income = [
      {
          label: 'Recomend',
          backgroundColor: '#66ff66',
          borderColor: '#66ff66',
          data: [0, 10, 5, 2, 20, 30, 45],
      },
      {
          label: 'Special',
          backgroundColor: '#66ffb2',
          borderColor: '#66ffb2',
          data: [10, 42, 19, 22, 21, 9, 41],
      },
      {
          label: 'Normal',
          backgroundColor: '#66b2ff',
          borderColor: '#66b2ff',
          data: [21, 16, 4, 2, 15, 41, 24],
      },
      {
          label: 'Material',
          backgroundColor: '#ff6666',
          borderColor: '#ff6666',
          data: [25, 12, 25, 31, 2, 21, 11],
      },
]

var labels_income = [
      'Senin',
      'Selasa',
      'Rabu',
      'Kamis',
      'Jumat',
      'Sabtu',
    ];  

function ChartTranksaksi(labels=labels_income, data = datasets_income, update = false){
  
    if (update) {
      document.getElementById('canvas_tranksaksi').innerHTML = '<canvas id="produck"></canvas>';
    }

    data = {
        labels: labels,
        datasets : data,
    };

    var config = {
        type: 'bar',
        data,
        options: {
            responsive: true,
            plugins: {
              legend: {
                position: 'bottom',
              },
              title: {
                display: true,
                text: 'Product by type'
              }
            }
        },
    };

  var myChart = new Chart(
      document.getElementById('produck'),
      config
    );
}

let Opsilabels = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
let Opsidatasets = [{
              label: 'Income per day',
              data: [30000, 60000, 120000 , 640000, 80000, 60000, 10000],
              backgroundColor: '#66ffb2',
              borderColor: '#66ff66',
              borderWidth: 1
            }]

function Profit(labels = Opsilabels, datasets = Opsidatasets, update = false ){

  if (update) {
    document.getElementById('canvas_profit').innerHTML = '<canvas id="profit"></canvas>';
  }

  var ctx = document.getElementById('profit').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: labels,
          datasets: datasets,
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              },
          },
      }
  });

  var ctx = document.getElementById('profit').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: labels,
          datasets: datasets,
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              },
          },
      },
    });
}

ChartTranksaksi();
Profit();