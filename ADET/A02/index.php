<?php
$page = "clothes";

if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case "clothes":
    case "electronics":
    case "skincare":
      break;
    default:
      $page = "clothes";

      break;
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JSG Shopping Recommendations</title>
  <link rel="icon" href="res/RzBrand.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .profilepic {
      width: 50px;
      height: 50px;
      border-radius: 100px;
      background-color: grey;
      float: left;
    }
  </style>
</head>

<body data-bs-theme="light">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="https://jsnotprom.github.io/">
        <img src="JSG WEBPAGE LOGO BLACK.png" alt="Logo" style="height: 40px; margin-right: 10px;">
        <span class="fw-bold fs-5 mx-3">Shopping Recommendations</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="https://jsnotprom.github.io/">Projects</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container-fluid mt-3">
    <div class="row">

      <div class="col-md-3">
        <div class="card shadow p-3" style="height: 35vh; margin-bottom: 20px;">
          <h4>Categories</h4>
          <a href="?page=clothes" class="btn btn-secondary my-1">Clothes</a>
          <a href="?page=electronics" class="btn btn-secondary my-1">Electronics</a>
          <a href="?page=skincare" class="btn btn-secondary my-1">Skincare</a>
        </div>
      </div>

      <div class="col-md-9">
        <div class="card shadow p-4" style="height: 85vh; overflow: auto;">
          <?php include("shared/" . $page . ".php"); ?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>