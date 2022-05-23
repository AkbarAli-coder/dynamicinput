
<?php
session_start();

?>



<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <title>Test</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
  </head>
  <body>
    
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-5 mb-3">How many fields?</h3>                    
                    <form action="submit.php" method="POST" >
                        <input type="text" name="row" class="form-control box-quantity mb-3" value="5">
                        <button type="submit" name="" class="btn btn-primary btn-sm">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>