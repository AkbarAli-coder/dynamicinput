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
                    <h4 class="mt-5 mb-4">Output</h4>
                    <!-- Summation of 11, 22, 19, 28 and 10 are: 90 -->
                    
                      <?php 
                      $sum = 0;
                      echo 'Summation of ';
                      foreach($_POST['price'] as $price)

                              
                      {
                          echo $price ; echo ',';
                          $sum += $price;
                          
                      }

                    echo ' are: '.$sum;

                      ?>

                </div>
            </div>
        </div>
    </div>
    

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>