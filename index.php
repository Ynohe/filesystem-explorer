<?php
$formats = array('.jpg', '.png', '.gif', '.doc', '.csv', '.txt', '.pdf', '.zip', '.rar', '.mp4', '.mp3', '.odt');
$directory = './root';
$url_insert = dirname(__DIR__) . "/root";

if (isset($_POST['boton'])) {
    $name = $_FILES['archivo']['name'];


    $saved = $_FILES['archivo']['tmp_name'];
    echo "variable1" . $saved;
    echo "<br>";
    echo  "variable3" . "$directory/$name";
    $ext = substr($name, strrpos($name, '.'));
    if (in_array($ext, $formats)) {
        if (move_uploaded_file($saved, "$directory/$name")) {
            echo "Congratulations! $name uploaded correctly";
        } else {
            echo ' sorry, an error occurred';
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.min.css" crossorigin="anonymous">
    <script src="script.js?v<?php echo time(); ?>" defer></script>
    <link rel="stylesheet" href="style.css?v<?php echo time(); ?>">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/logo/logo.png" alt="Logo" width="200" height="45" class="d-inline-block align-text-top" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto">
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <ol class="breadcrumb">
        <p id="backBtn">BACK</p>
        <li class="breadcrumb-item"><a href="#" id="upload-btn">Upload</a>
            <div class="card border-secondary mb-3 d-none" id="upload-modal" style="max-width: 20rem;">

                <div class="card-body"></div>

                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="archvio" aria-describedby="fileHelp" name="archivo">

                    </div>
                    <button type="submit" class="btn btn-primary" name="boton">Upload</button>
                </form>

        </li>
        <li class="breadcrumb-item active">Library</li>
    </ol>
    </div>
    <ul class="nav nav-pills">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Quick access</a>
            <div class="dropdown-menu" style="">
                <a class="dropdown-item" id="createFolder-btn">Add Folder</a>
                <a class="dropdown-item" href="#">Documents</a>
                <a class="dropdown-item" href="#">Media</a>
                <a class="dropdown-item" href="#">Others</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Trash</a>
            </div>
        </li>
    </ul>
    <div class="container mt-3" id="main-container">
        <?php require_once('./folderAndFiles.php');
        session_start();
        if (isset($_SESSION["path"])) {
            folderAndFiles($_SESSION["path"]);
        } else {
            folderAndFiles("./root");
        }

        ?>
        <div class="card">

            <div class="card-block">
                <div class="row">
                    <?php
                    //if ($dir = opendir("$directory")) {
                    // print_r(glob('./root/*'));
                    //foreach (glob('./root/*') as $archive) {
                    // echo "<img src='$archive'>";
                    //if ($archive != '.' && $archive != '..') {
                    // echo '<div class="col-sm-3 col-xs-12">';
                    // echo "Archive: <strong>$archive</strong><br/>";
                    // echo '<img src="' . $directory . '/' . $archive . '" width = 300px title="imagen" alt="imagen"/>';
                    // echo $_FILES['archivo']['size'] / 1000000;
                    // echo "Modification date was: " . date('F d Y H:i:s.', filectime($directory . '/' . $archive));
                    //  $url_target = str_replace('\\', '/', $url_insert) . '/' . $archive;
                    //  echo "variable8" . $archive;
                    // $infop = pathinfo($archive)["extension"];
                    // echo '<img src="' . $directory . '/assets/icons' . '/' . pathinfo($archive)["extension"] . '.png"' . '/>';
                    // echo "<img src='./assets/icons/$infop .png'/>";
                    //   }
                    //  }
                    // }
                    ?>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>