<?php include 'filesLogic.php';?>
<!doctype html>
<html lang="en">
  <head>

  


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Download files</title>
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






<div class="container mt-3">
<table class="table table-bordered border-dark">
<thead class="table-dark">
    
    <th>Latest Files Shared</th>
    
    
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td>




      <h5><i class="bi bi-folder2"></i> <a href="downloads.php?file_id=<?php echo $file['id'] ?>" style="text-decoration:none;" class="font-monospace fw-bold link-dark"><?php echo $file['name']; ?></a></h5>
    <p><?php echo floor($file['size'] / 1000) . ' KB'; ?>, <?php echo $file['downloads']; ?> downloads 
    <a href=
"whatsapp://send?text=http://localhost/kntl/downloads.php?file_id=<?php echo $file['id'] ?>"
        data-action="share/whatsapp/share"
        target="_blank" class="link-dark">
        <button type="button" class="btn btn-light"> <i class="bi bi-whatsapp"></i> Bagikan</button>
       
    </a>
  </p>
    
     

     
      
    </tr>
  <?php endforeach;?>

</tbody>
</table>
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


<!-- footer -->
<table class="table table-bordered border-dark">
<tbody>
  <td><div class="container text-center"><a href="#" style="text-decoration:none;" class="link-dark">Privacy Police</a> | 
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

</body>
</html>