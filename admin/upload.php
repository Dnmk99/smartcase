<?php
include '../includes/db.php';
include '../functions.php';
$allowedCategories = array("customers_logo", "our_work", "team"); // Add more categories if needed
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_FILES)) {
    // Get the selected category from the HTML form

    $category = $_POST['category'];
    $name = $_POST['name'];
    $position = $_POST['position'];

    echo $name;
    echo $position;
    // Validate the selected category (optional)
    
    if (!in_array($category, $allowedCategories)) {
        echo '<script>alert("Invalid category selected.")</script>';
        die('Invalid category selected.');

    }

    // Set the appropriate upload directory based on the selected category
    $uploadDirRelative = "../Images/uploads/$category/";
    $uploadDirAbsolute = realpath($uploadDirRelative);

    if (!file_exists($uploadDirAbsolute)) {
        mkdir($uploadDirAbsolute, 0777, true);
    }
    $randomString = uniqid();
    $fileName = basename($_FILES['file']['name']);
    $fileName = $randomString . '_' . $fileName;
    $uploadFilePath = "Images/uploads/$category/" . $fileName;
    print_r($uploadFilePath);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadDirAbsolute . '/' . $fileName)) {
        // Escape the category to prevent SQL injection
        $escapedCategory = mysqli_real_escape_string($connection, $category);
        // Prepare the INSERT query with the selected category
        $query = "INSERT INTO images(url, category_id, employee_name, position) ";
        $query .= "VALUES ('$uploadFilePath', (SELECT id FROM images_category WHERE category='$escapedCategory'), ";
        $query .= " '$name', '$position')";
        // print_r($query) ;
        $result = mysqli_query($connection, $query);
        print_r($result) ;
        // echo $query;
        if (!$result) {
            die('query FAILED' . mysqli_error());
        }else echo '<script>alert("Uploaded.")</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
        <!-- upload subpage tiles -->
        <div class="container mt-5">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header text-center">
                        <h3>Change text of the subpage tiles</h3>
                        <br>
                    </div>
                    <div class="card-body mt-2">
                        <form action="upload-rating.php" enctype="multipart/form-data" method="post" name="clientRatingForm">
                            <div class="mt-2">
                                <label for="selectSubPage">Select subpage</label>
                            <select name="selectSubPage" id="selectSubPage" class="form-select" required>
                                    <option value='marketingStrategy'>Marketing Strategy</option>
                                    <option value='graphic'>Graphic and Branding</option>
                                    <option value='webs'>3 Websites</option>
                                    <option value='photoAndVideo'>Photo&Video</option>
                                </select><br>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                <textarea name="comments" id="comments" class="form-control" rows="5" placeholder="Enter your text here" required></textarea>
                            </div><br>
                            <div class="text-center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- upload images -->
    <div class="container mt-5">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header text-center">
                        <h3>Upload images</h3>
                        <br>
                        <h6>Select category first</h6>
                    </div>
                    <div class="card-body mt-2">
                        <form action="upload.php" enctype="multipart/form-data" method="post" name="img"
                            class="dropzone" id="image-upload">
                            <div class="mt-2"></div>
                            <div class="form-group">
                                <div class="form-group">
                                    <input id="nameInput" style="display: none;" name="name" type="text"
                                        class="form-control" placeholder="Name" required>
                                </div><br>
                                <div class="form-group">
                                    <input id="positionInput" style="display: none;" name="position" type="text"
                                        class="form-control" placeholder="Position" required>
                                </div>
                                <label for="category">Select Category:</label>
                                <select name="category" id="category" class="form-select" required>
                                    <?php echo getAllImageCategories(); ?>
                                </select>
                            </div><br>
                            <div class="text-center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- upload client ratings -->
    <div class="container mt-5">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header text-center">
                        <h3>Add client rating</h3>
                        <br>
                    </div>
                    <div class="card-body mt-2">
                        <form action="upload-rating.php" enctype="multipart/form-data" method="post" name="clientRatingForm">
                            <div class="mt-2"></div>
                            <div class="form-group">
                                <div class="form-group">
                                <label for="clientName">Client name:</label>
                                    <input id="clientName" name="name" type="text"
                                        class="form-control" placeholder="Client name" required>
                                </div><br>
                                <label for="employment">Employment/Position:</label>
                                <div class="form-group">
                                    <input id="positionInput" name="employment" type="text"
                                        class="form-control" placeholder="employment" required>
                                </div><br>
                                <label for="starCount">Rating:</label>
                                <select name="starCount" id="starCount" class="form-select" required>
                                    <option value='1'>1 star</option>
                                    <option value='2'>2 star</option>
                                    <option value='3'>3 star</option>
                                    <option value='4'>4 star</option>
                                    <option value='5'>5 star</option>
                                </select><br>
                                <textarea name="comments" id="comments" class="form-control" rows="5" placeholder="Enter your text here" required></textarea>
                            </div><br>
                            <div class="text-center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize: 10,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
    </script>
</body>

</html>
<script>
    // Get the elements
    const nameInput = document.getElementById('nameInput');
    const positionInput = document.getElementById('positionInput');
    const categorySelect = document.getElementById('category');

    // Add event listener to the category select element
    categorySelect.addEventListener('change', function () {
        // Get the selected category value
        const selectedCategory = this.value;
        
        // Show or hide "Name" and "Position" inputs based on the selected category
        if (selectedCategory === 'team') {
            nameInput.style.display = 'block';
            positionInput.style.display = 'block';
        } else {
            nameInput.style.display = 'none';
            positionInput.style.display = 'none';
        }
    });
</script>