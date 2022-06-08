<?php include 'filesLogic.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Files Upload and Download</title>
  </head>
  <body>

  


<!-- navbar -->
<nav class="navbar navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand font-monospace fw-bold" href="#">YOUNIFILES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link font-monospace" aria-current="page" href="index.php"><i class="bi bi-cloud-arrow-up-fill"></i> UPLOAD</a>
        <a class="nav-link font-monospace" href="downloads.php"><i class="bi bi-cloud-arrow-down-fill"></i> DOWNLOAD</a>
        <a class="nav-link font-monospace" href="search.php"><i class="bi bi-search"></i> SEARCH</a>
      </div>
    </div>
  </div>
</nav>
<!-- akhir navbar -->

<!-- upload -->
<div class="container mt-3">
<table class="table table-bordered border-dark">
  <thead class="table-dark">
  <th class="font-monospace">UPLOAD</th>
  </thead>
  <tbody>
  <tr>
      <td><div class="card">
  <ul class="list-group list-group-flush">
    
    <li class="list-group-item">
      <form action="index.php" method="post" enctype="multipart/form-data" >
        
         

          <div class="mb-3">
  <input class="form-control" type="file" name="myfile">
</div>
<div class="container text-center">
          <button type="sumbit" name="save" class="btn btn-outline-dark">Share Files</button>
</div>
        </form></li>
  
  </ul>
</div>
</td>
</tr>

    
  </tbody>
</table>
</div>
<!-- akhir upload -->








<!-- about -->
<div class="container mt-3">
<table class="table table-bordered border-dark">
  <thead class="table-dark">
  <th class="font-monospace">MENU</th>
  </thead>
  <tbody>
  <tr><td><i class="bi bi-file-earmark"></i> <a href="downloads.php" style="text-decoration:none;" class="link-dark">View All Files</a></td></tr>
  <tr><td><i class="bi bi-code-square"></i> <a href="#" style="text-decoration:none;" class="link-dark">Source Code And Script</a></td></tr>
<tr><td><i class="bi bi-book"></i> <a href="#" style="text-decoration:none;" class="link-dark">Free Book And Article</a></td></tr>
<tr><td><i class="bi bi-box-arrow-in-right"></i> <a href="#" style="text-decoration:none;" class="link-dark">Log In And Register</a></td></tr>
<tr><td><i class="bi bi-cash-coin"></i> <a href="#" style="text-decoration:none;" class="link-dark">Support Our Website</a></td></tr>

</tbody>
</table>
<!-- akhir about -->








<!-- footer -->
<table class="table table-bordered border-dark">
<tbody>
  <td><div class="container text-center"><a href="page/privacy-police.php" style="text-decoration:none;" class="link-dark">Privacy Police</a> | 
  <a href="#" style="text-decoration:none;" class="link-dark">Disclamer</a> | 
  <a href="https://github.com/iniremon" style="text-decoration:none;" class="link-dark">Github</a>
</div>
</td>
</tbody>
<tbody>
<td><div class="container text-center">
© 2022, youfiles.com
<br>
online file sharing website by iniremon
</div>
</td>
</tbody>
</table>
<!-- akhir footer -->




  



   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>