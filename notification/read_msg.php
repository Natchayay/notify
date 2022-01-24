<?php  include_once 'connection.php';?>
<?php

if(isset($_GET['id'])){
    $main_id = $_GET['id'];
    $sql_update = mysqli_query($con,"UPDATE message SET status=1 WHERE id='$main_id'");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cardiac center</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
    <link rel="stylesheet" href="fa/css/all.css"/>
  </head>
  <body>
    <div class="container" id="table1">
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sr_no=1;
                    $sql_get = mysqli_query($con,"SELECT * FROM message WHERE status=1"); 
                    while($main_result = mysqli_fetch_assoc($sql_get)):?>
                    <tr>
                    <th scope="row"><?php echo $sr_no++; ?></th>
                    <td><?php echo $main_result['name']; ?></td>
                    <td><?php echo $main_result['message']; ?></td>
                    <td><?php echo $main_result['cr_date']; ?></td>
                    <td><a href="delete.php?id=<?php echo $main_result['id'];?>"  class="text-danger"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    <?php endwhile?>
                </tbody>
            </table>
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

   
      
                        
                        
                        
         

                       
      