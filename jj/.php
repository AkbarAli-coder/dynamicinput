<?php

$data = $_POST['row'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="result.php" method="post">
<?php



   for($r = 1; $r<=$data; $r++){
       echo '

      

       <input type="text" name="price[]" value=""> 

       
       
       
       
       
       
       ';
   }


?>
<button type="submit">Save</button>
   </form>
 
    







</script>
</body>
</html>