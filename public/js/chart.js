const ctx = document.getElementById('barChart').getContext('2d');

const dadosComSoftSkills = [85, 90, 88, 80, 87]; // Dados para "Com Soft Skills"
const dadosSemSoftSkills = dadosComSoftSkills.map(valor => valor * 0.5); // Garantir que "Sem Soft Skills" seja 50% de "Com Soft Skills"

const barChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Comunicação', 'Trabalho em Equipe', 'Liderança', 'Gestão de Tempo', 'Resolução de Problemas'],
    datasets: [
      {
        label: 'Com Soft Skills',
        data: dadosComSoftSkills,
        backgroundColor: 'rgba(3, 22, 129, 0.7)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      },
      {
        label: 'Sem Soft Skills',
        data: dadosSemSoftSkills,
        backgroundColor: 'rgba(252, 26, 26, 0.7)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    indexAxis: 'y', // Alterando para o gráfico usar o eixo X
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
      x: {
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
