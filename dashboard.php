<?php
require_once('function/helper.php');
require_once('function/Connector.php');
require_once('function/Account.php');

session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'false';
if (!isset($_SESSION['id']) || $_SESSION['id'] == null) {
    header("location: " .  base_url());
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello!</title>
  </head>
  <body style="background: #E8E8D0;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #949449;">
  <div class="container">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img src="https://cdn.nba.com/logos/leagues/logo-nba.svg" alt="NBA Logo">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <strong><a class="nav-link active" aria-current="page" href="<?=  base_url('dashboard.php?page=home') ?>">Home</a></strong>
        </li>
        <li class="nav-item">
          <strong><a class="nav-link" href="<?=  base_url('dashboard.php?page=create') ?>">Add</a></strong>
        </li>
        <li class="nav-item">
          <strong><a class="nav-link" href="<?=  base_url('process/process_logout.php' )?>">Logout</a></strong>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="content">
  <div class="container">
    <div class="sub-content mt-5">
     <?php
       $filename = "page/$page.php"; 

       if(file_exists($filename)) {
        include_once($filename);
       } else {
         header('location: ' .  base_url('dashboard.php?page=home'));
       }
       
     ?>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>