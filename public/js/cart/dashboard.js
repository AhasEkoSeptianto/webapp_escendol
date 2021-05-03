function ChartVisitor(){
  const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
  ];

  const data = {
      labels: labels,
      datasets: [{
          label: 'cendol',
          backgroundColor: 'rgb(0, 204, 102)',
          borderColor: 'rgb(0, 204, 102)',
          data: [0, 10, 5, 2, 20, 30, 45],
      }]
  };

  const config = {
      type: 'line',
      data,
      options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
            },
            title: {
              display: true,
              text: 'Product'
            }
          }
      },
  };

  var myChart = new Chart(
      document.getElementById('visitor'),
      config
    );
}


function ProductSeller(){

  const data = {
    labels: [
      'Red',
      'Blue',
      'Yellow'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [300, 50, 100],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
      hoverOffset: 4
    }]
  };

  const config = {
    type: 'doughnut',
    data: data,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'seller by product'
        }
      }
  },
  };

  var myChart = new Chart(
    document.getElementById('product_seller'),
    config
  );

}


ChartVisitor();
ProductSeller();