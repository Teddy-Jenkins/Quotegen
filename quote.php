<?php
  session_start();  
  if (isset($_POST['submit'])) {
    
  $_SESSION['companyname'] = $_POST['companyname'];
  $_SESSION['clientname'] = $_POST['clientname'];
  $items = $_SESSION['items'];
  foreach ($items as $key => $value) {
    echo $value . "<br>";
  }
  };
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/quote.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function(e){
            //Variables 
            var html  = '<input type="text" name="items[]" value="" class="form-control" placeholder="Item">';
            // Add Inputs
          $("#add").click(function(e){
            $("#box").append(html);
          });
        });
      </script>
  </head>
  <body>
    <h1 class="heading">Quote Creation</h1>

    <form class="form-group form" action="output.php" method="post" id="box">
      <input type="text" name="companyname" value="" class="form-control inputs" placeholder="Company Name">
      <input type="text" name="clientname" value="" class="form-control inputs" placeholder="Client Name">
      <input type="text" name="items[]" value="" class="form-control inputs" placeholder="Item">
    </form>
    <input type="submit" name="submit" id="" form="box" class="btn btn-outline-primary">
    <button type="button" href="#" name="add" value="" class="btn btn-outline-success float-right" id="add" >Add Item</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
