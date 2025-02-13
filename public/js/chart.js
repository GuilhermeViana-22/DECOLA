const ctx = document.getElementById('barChart').getContext('2d');
const barChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Comunicação', 'Trabalho em Equipe', 'Liderança', 'Gestão de Tempo', 'Resolução de Problemas'],
    datasets: [
      {
        label: 'Com Soft Skills',
        data: [85, 90, 88, 80, 87],
        backgroundColor: 'rgba(3, 22, 129, 0.7)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      },
      {
        label: 'Sem Soft Skills',
        data: [65, 70, 60, 55, 62],
        backgroundColor: 'rgba(252, 26, 26, 0.7)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      tooltip: {
        callbacks: {
          label: function(tooltipItem) {
            return tooltipItem.raw + '%';
          }
        }
      }
    },
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          callback: function(value) {
            return value + '%';
          }
        }
      }
    }
  }
});
