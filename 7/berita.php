<?php
$conn = mysqli_connect("localhost","root","","berita_digital");
$result = mysqli_query($conn,"SELECT user_id FROM news
");
$create_time = date("Y-m-d H:i:s");

if(isset($_POST["submit"])){
    $title = $_POST["title"];
    $deskripsi = $_POST["deskripsi"];
    $user_id = $_POST["user_id"];
    $image = upload();
    $query = "INSERT INTO news VALUES ('','$title','$image','$deskripsi','$create_time','$user_id')";
    mysqli_query($conn,$query);
}
function upload(){
    $namaFile = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmpName,'img/'. $namaFile);
    return $namaFile;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <Section>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
        <form action="" method="post" enctype="multipart/form-data"> 
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" name="title"id="" placeholder="title">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
        </div>
        <div class="form-group">
        <label for="user_id">nama</label>
        <select name="user_id"multiple class="form-control" id="user_id">
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <option><?= $row["user_id"];?></option>
            <?php endwhile;?>
        </select>
        </div>
        <div class="form-group">
            <label for="image">masukkan gambar</label>
            <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    </div>
    </Section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>