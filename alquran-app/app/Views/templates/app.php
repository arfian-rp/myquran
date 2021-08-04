<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/app.css">
    <title>my quran</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <div class="container">
    <a class="navbar-brand" href="/"><b>My Quran</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="/public/surat">Surat</a>
      </div>
    </div>
    <?php if( $search ) : ?>
      <?php 
        if(isset($_GET['s'])){
          $s = strtolower(filter_var($_GET['s'], FILTER_SANITIZE_URL));
          header("Location: /public/surat#".$s);
          die;
        }
        ?>
      <form method="GET" class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Al-kAhF" aria-label="Search" name="s">
      <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
      </form>
    <?php endif; ?>
  </div>
  </nav>
  <div class="mt-4 konten">
    <?= $this->renderSection('konten'); ?>
  </div><br><br>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="/app.js"></script>
  </body>
</html>