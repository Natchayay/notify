<?php include_once 'connection.php';

if(isset($_GET['id']))
{
    $delete_id = $_GET['id'];
    $sql_delete = mysqli_query($con,"DELETE FROM message WHERE id='$delete_id'"); 
    if($sql_delete){
        header('localhost:read_msg.php');
    }else{
        echo mysqli_error($con);
    }
}

?>