<?php include 'includes/db.php';
function getAllCustomerData()
{
    global $connection;
    $query = "SELECT * FROM images";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('query FAILED' . mysqli_error());
    }
    $slides = array_chunk(mysqli_fetch_all($result, MYSQLI_ASSOC), 8);

    foreach ($slides as $slide) {
        echo '<swiper-slide>';
        foreach ($slide as $row) {
            $url = $row['url'];
            echo '<img src="' . $url . '" alt="Slide Image">';
        }
        echo '</swiper-slide>';
    }
}
function getAllImageCategories()
{
    global $connection;
    $query = "SELECT * FROM images_category";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('query FAILED' . mysqli_error());
    }
    
    $options = ""; // Initialize an empty string to store the options

    while ($row = mysqli_fetch_assoc($result)) {
        $category = $row['category'];
        $options .= "<option value='$category'>$category</option>";
    }

    return $options; // Return the generated options
}


function PostImages(){
    global $connection;
    if (!empty($_FILES)) {
        $uploadDir = "Images/uploads/customers_logo/";
        $uploadDirRelative = '../Images/uploads/customers_logo/';
        $uploadDirAbsolute = realpath($uploadDirRelative); // Convert the relative path to an absolute path
    
        if (!file_exists($uploadDirAbsolute)) {
            mkdir($uploadDirAbsolute, 0777, true);
        }
    
        $fileName = basename($_FILES['file']['name']);
        $uploadFilePath = $uploadDir . $fileName;
        echo $uploadDirRelative;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadDirAbsolute . '/' . $fileName)) {
            $query = "INSERT INTO customer_logo(url) ";
            $query .= "VALUES ('$uploadFilePath')";
            $result = mysqli_query($connection, $query);
            // echo $query;
            if (!$result) {
                die('query FAILED' . mysqli_error());
            }
        }
    }
}
?>