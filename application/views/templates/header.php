<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel ="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title><?php echo $judul; ?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand">
    <img src="img/logo.png" width ="120px" height="70px">
  </a>
  
						
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(Página atual)</span></a>
            <a class="nav-item nav-link" href="<?php echo base_url(); ?>rom">Room</a>
            
            <div class="dropdown">
              <a class="btn btn dropdown-toggle nav-link" class="nav-item nav-link" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
                Administration
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a class="dropdown-item"href="<?php echo base_url(); ?>room" >Transaction</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>List_customer"> List Customer</a>
                
                <a class="dropdown-item" href="<?php echo base_url(); ?>availability">Room Availability</a>
                
              </div>
            </div>
            
            <a class="nav-item nav-link" href="<?php echo base_url(); ?>AboutUs">About Us</a>
        </div>
        
    </div>
  </div>
</nav>  