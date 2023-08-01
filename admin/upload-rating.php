<?php 
// $_POST
include '../includes/db.php';
if(isset($_POST['submit'])){
    $client_name = $_POST['name'];
    $client_employment = $_POST['employment'];
    $starCount = $_POST['starCount'];
    $comments = $_POST['comments'];

    $query = 'INSERT INTO client_ratings (client_name,client_employment,text,stars)';	
    $query .= "VALUES ('$client_name', '$client_employment', '$comments', '$starCount')";
    $result = mysqli_query($connection, $query);
        if (!$result) {
            die('query FAILED' . mysqli_error());
    }else{
        echo 'ok';
        header('Location: upload.php');
    }
}
?>