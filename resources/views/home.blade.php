@extends('layouts.default')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">TABLEAU DE BORD ETUDIANT</h1>
 
</div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">LICENCE 1</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LICENCE 2</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">39</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Licence 3 </div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">330</div>
              </div>
              <div class="col">
                <div class="progress progress-sm mr-2">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">MASTERS</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">34</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Content Row -->

<div class="row">

  <div class="col-lg-6 mb-4">

    <!-- Approach -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Information</h6>
      </div>
      <div class="card-body">
          <ul class="list-group list-group-flush">
              <li class="list-group-item">procés verbal</li>
              <li class="list-group-item">Inscription</li>
              <li class="list-group-item">Reinscription</li>
              <li class="list-group-item">Emplois du Temps</li>
              <li class="list-group-item">Amphi</li>
          </ul>
      </div>
    </div>

  </div>

  <div class="col-lg-6 mb-4">

    <!-- Approach -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Derniers cours publiés</h6>
      </div>
      <div class="card-body">
          <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras jusfgnfgngfnfgto onfgnhgnfgdigfngfnngno</li>
              <li class="list-group-item">Dapibus ac facnfgnfgnfgngnilisis in</li>
              <li class="list-group-item">Morbigfncgfnhgf leognfgnfgnfgn risus</li>
              <li class="list-group-item">Porta ac consectetur gngfnfgnfgnac</li>
              <li class="list-group-item">Vestigngfngnbulum anfgngnfgfgnfgnnft eros</li>
          </ul>
      </div>
    </div>

  </div>


</div>



</div>
@endsection
