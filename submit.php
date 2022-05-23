
<?php

$data = $_POST['row'];

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
                    <h4 class="mt-5 mb-4">Operation: Summation of <?php echo $data ?> Numbers</h4>                    
                    <form action="result.php" method="post">
                       
                      <?php



                      for($r = 1; $r<=$data; $r++){
                          echo '
                   
                         
                   
                          <input type="text" name="price[]" value="" class="form-control box-quantity mb-3"> 
                   
                          
                          
                          
                          
                          
                          
                          ';
                      }
                   
                   
                   ?>



                        <button type="submit" name="" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>