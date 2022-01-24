<?php

include_once 'connection.php';

if(isset($_POST['send'])){
  $name = $_POST['name'];
  $msg = $_POST['msg'];
  $date = date('y-m-d h:i:s');

  $sql_insert = mysqli_query($con,"INSERT INTO message(name, message, cr_date) VALUES ('$name', '$msg', '$date')");
  if($sql_insert){
    echo "<script>alert('message send successfully');</script>";
  }else{
    echo mysqli_error($con);
    exit;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cardiac center</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles_msg.css" />
  </head>
  <body>
      <div class="container" id="center">
          <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextareal">Enter Message</label>
                            <textarea class="form-control" name="msg" id="exampleFormControlTextareal" rows="3"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn btn-primary">Submit</button>
                    </form>

              </div>
              <div class="col-sm-4"></div>
          </div>
      </div>
    

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

   
      
                        
                        
                        
         

                       
      