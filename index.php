<?php
	$formats   = array('.jpg', '.png', '.gif', '.doc', '.csv', '.txt', '.pdf', '.zip', '.rar', '.mp4', '.mp3');
	$directory = 'assets';
    $url_insert = dirname(__DIR__) . "/root";
	if (isset($_POST['boton'])){
		$name  = $_FILES['archivo']['name'];
		$saved = $_FILES['archivo']['tmp_name'];
		$ext= substr($name, strrpos($name, '.'));
		if (in_array($ext, $formats)){
			if (move_uploaded_file($saved, "$directory/$name")){
				echo "Felicitaciones, archivo $name subido exitosamente";
			}else{
				echo 'Ocurrió un error';
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.min.css" crossorigin="anonymous">
    <script src="script.js" defer></script>
</head>
<body>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>
            </ul>
        <form class="d-flex">
            <input class="form-control me-sm-2" type="search" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
    </div>
</nav>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" id="upload-btn">Upload</a>
    <div class="card border-secondary mb-3 d-none" id="upload-modal"style="max-width: 20rem;">
    <h1>Selecciona tu archivo</h1>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label for="archivo">File</label>
				<input type="file" class="form-control-file" id="archvio" aria-describedby="fileHelp" name="archivo">
				
			</div>
			<button type="submit" class="btn btn-primary" name="boton">Upload</button>
		</form></li>
    <li class="breadcrumb-item active">Library</li>
</ol>
</div>
<ul class="nav nav-pills">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Quick access</a>
        <div class="dropdown-menu" style="">
            <a class="dropdown-item" href="#">Images</a>
            <a class="dropdown-item" href="#">Documents</a>
            <a class="dropdown-item" href="#">Media</a>
            <a class="dropdown-item" href="#">Others</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Trash</a>
        </div>
    </li>
</ul>
	<div class="container mt-3">
		<div class="card">
			<div class="card-block">
				<div class="row">
				<?php
					if ($dir = opendir($directory)) {
                        while ($archive = readdir($dir)) {
                            if ($archive != '.' && $archive != '..') {
                                echo '<div class="col-sm-3 col-xs-12">';
                                echo "Archive: <strong>$archive  </strong><br />";
                                // echo '<img src="'.$directory.'/'.$archive.'" width = 300px title="imagen" alt="imagen"/>';
                                echo $_FILES['archivo']['size'] / 1000000 ,"bytes";
                                echo "The last modification date was: " . date ('F d Y H:i:s.', filectime($directory.'/'.$archive));
                                // if(pathinfo($dir)["extension"])
                                $url_target = str_replace('\\', '/', $url_insert) . '/' . $archive;
                                echo '<img src="'.$directory.'/logo'. '/' .pathinfo($archive)["extension"]. '.png"'. '/>';
                                // echo '<img src="'.$directory.'/logo/pdf.pdf'. '/' .pathinfo($archive)["extension"]. '.pdf"'. '/>';
                                }
                            }   
                        }
                    
				?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>