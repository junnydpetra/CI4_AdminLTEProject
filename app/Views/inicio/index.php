<?php

  $session = session();
  
  $primeiro_nome = $session->get('primeiro_nome');

?>

<div class="content-wrapper">
    
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Olá, <?= $primeiro_nome ?>!</h1>
        </div>
      </div>
    </div>
  </div>
  
  <div class="content">
    <div class="container-fluid">
        <div class="row">

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Clientes</span>
                <span class="info-box-number"><?= $total_de_clientes ?></span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="nav-icon fas fa-user-tie"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Funcionários</span>
                <span class="info-box-number"><?= $total_de_funcionarios ?></span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-box-open"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Produtos</span>
                <span class="info-box-number"><?= $total_de_produtos ?></span>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="card card-primary h-100 d-flex">
              <div class="card-header">
                <h3 class="card-title">Gráfico de Barra</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                      <div class="">

                      </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                      <div class="">

                      </div>
                    </div>
                    </div>
                    <canvas id="bar_chart" width="800" height="400" style="display: block; box-sizing: border-box; height: 400px; width: 800px;"></canvas>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="card card-danger h-100 d-flex">
                <div class="card-header">
                      <h3 class="card-title">Donut Chart</h3>
                      <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <div class="chartjs-size-monitor">
                      <div class="chartjs-size-monitor-expand">
                        <div class="">

                        </div>
                      </div>
                      <div class="chartjs-size-monitor-shrink">
                        <div class="">

                        </div>
                      </div>
                      </div>
                      <canvas id="dnt_chart" width="380" height="380"></canvas>
                  </div>
                </div>
              </div>
          </div>

        </div>
    </div>
  </div> 

</div>

<script>
  const ctx = document.getElementById('bar_chart');
  const dnt = document.getElementById('dnt_chart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Clientes', 'Funcionários', 'Produtos'],
      datasets: [{
        label: 'Quantidade de Clientes',
        data: [<?= $total_de_clientes ?>, 0, 0],
        borderWidth: 1,
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgb(255, 99, 132)',
      }, {
        label: 'Quantidade de Funcionários',
        data: [0, <?= $total_de_funcionarios ?>, 0],
        borderWidth: 1,
        backgroundColor: 'rgba(255, 159, 64, 0.2)',
        borderColor: 'rgb(255, 159, 64)',
      }, {
        label: 'Quantidade de Produtos',
        data: [0, 0, <?= $total_de_produtos ?>],
        borderWidth: 1,
        backgroundColor: 'rgba(255, 205, 86, 0.2)',
        borderColor: 'rgb(255, 205, 86)',
      }],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  new Chart(dnt,{
    type: 'doughnut',
    data: {
      datasets: [
        {
          data: [<?= $total_de_clientes ?>, <?= $total_de_funcionarios ?>, <?= $total_de_produtos ?>],
          backgroundColor: [
            'rgb(255, 159, 64)',
            'rgb(54, 162, 235)',
            'rgb(75, 192, 192)',
            'rgb(255, 205, 86)',
          ],
        },
      ],
      labels: ['Clientes', 'Funcionários', 'Produtos'],
    },
    options: {
      responsive: true,
        maintainAspectRatio: false,
    },
  });
</script>

