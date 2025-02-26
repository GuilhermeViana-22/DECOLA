<section id="chartjs" class="curso-container py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="text-danger fs-1"><strong>Comparação de Desempenho - Estudantes com e sem Soft Skills<strong></h2>

        <!-- Gráfico Desktop -->
        <section class="newsletter-section" data-anime="right">
            <div class="row justify-content-center">
                <canvas id="barChartDesktok"></canvas>
            </div>
        </section>




        <!-- Gráfico Mobile -->
        <section class="newsletter-section" data-anime="right">
            <div class="row justify-content-center">
                <canvas id="barChartMobile"></canvas>
            </div>
        </section>


    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const dadosComSoftSkills = [85, 90, 88, 80, 87]; // Dados para "Com Soft Skills"
    const dadosSemSoftSkills = dadosComSoftSkills.map(valor => valor * 0.5); // Garantir que "Sem Soft Skills" seja 50% de "Com Soft Skills"

    // Configuração para o gráfico Desktop (Horizontal)
    const ctxDesktop = document.getElementById('barChartDesktok').getContext('2d');
    const barChartDesktop = new Chart(ctxDesktop, {
        type: 'bar',
        data: {
            labels: ['Comunicação', 'Trabalho em Equipe', 'Liderança', 'Gestão de Tempo', 'Resolução de Problemas'],
            datasets: [{
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
            indexAxis: 'x', // Gráfico horizontal para Desktop
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

    // Configuração para o gráfico Mobile (Vertical)
    const ctxMobile = document.getElementById('barChartMobile').getContext('2d');
    const barChartMobile = new Chart(ctxMobile, {
        type: 'bar',
        data: {
            labels: ['Comunicação', 'Trabalho em Equipe', 'Liderança', 'Gestão de Tempo', 'Resolução de Problemas'],
            datasets: [{
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
            indexAxis: 'y', // Gráfico vertical para Mobile
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
</script>
