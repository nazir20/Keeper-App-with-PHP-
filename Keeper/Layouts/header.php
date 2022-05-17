<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS & Bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Js -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/812fd4bca0.js" crossorigin="anonymous"></script>
    <title>Keeper App</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""> Keeper</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <form class="container-fluid">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                <input name="search" type="text" class="form-control" placeholder="Search for a note..." aria-label="search" aria-describedby="basic-addon1">
            </div>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="navbar-icons">
                        <i class="fas fa-align-justify list-mode"></i>
                        <i class="fas fa-border-all table-mode" style="display:none"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="navbar-icons">
                        <i class="fas fa-moon dark-mode"></i>
                        <i class="fas fa-sun light-mode" style="display:none"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="keeper">
        <form action="Process/saveNote.php" method="post">
            <input type="text" placeholder="Title" name="title" required autocomplete='off'>
            <input type="text" placeholder="Take a note..." name="content" autocomplete='off'>
            <select class="btn btn-light colors" name="themeColor">
                <option value="#fff">White Theme</option>
                <option value="#FD5D5D">Peach Theme</option>
                <option value="#F8B400">Orange Theme</option>
                <option value="#65C18C">Green Theme</option>
                <option value="#56BBF1">Blue Theme</option>
                <option value="#D82148">Red Theme</option>
                <option value="#764AF1">Purple Theme</option>
                <option value="#CCD1E4">Grey Theme</option>
                <option value="#C4DDFF">Navy Theme</option>
            </select>
            <button class="btn btn-light save-btn" name="save-btn">Save</button>
        </form>
    </div>
</div>