<?php include 'includes/db.php';
function getAllCustomerData()
{
    global $connection;
    $query = "SELECT * FROM images WHERE category_id = '1'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('query FAILED' . mysqli_error());
    }
    $slides = array_chunk(mysqli_fetch_all($result, MYSQLI_ASSOC), 3);

    foreach ($slides as $slide) {
        foreach ($slide as $row) {
            $url = $row['url'];
            echo '<div class="swiper-slide"> <img src="' . $url . '" style="width: 30%;" alt="Slide Image"> </div>';
        }   //<div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
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
    while ($row = mysqli_fetch_assoc($result)) {
        $category = $row['category'];
        echo "<option value='$category'>$category</option>";
    }
}
function getAllOurWork()
{
    global $connection;
    $query = "SELECT * FROM images WHERE category_id = '2'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('query FAILED' . mysqli_error());
    }
    $slides = array_chunk(mysqli_fetch_all($result, MYSQLI_ASSOC), 8);

    foreach ($slides as $slide) {
        foreach ($slide as $row) {
            $url = $row['url'];
            echo '<div class="swiper-slide"> <img src="' . $url . '" style="width: 100%;
            padding: 5rem;" alt="Slide Image"> </div>';
        }   //<div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
    }
}
function getAllClientRatings()
{
    global $connection;
    $query = "SELECT * FROM client_ratings ORDER BY RAND() LIMIT 3";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('query FAILED' . mysqli_error());
    }
    foreach ($result as $rating) {
        $clientName = $rating['client_name'];
        $clientEmployment = $rating['client_employment'];
        $text = $rating['text'];
        $stars = $rating['stars'];
        $starSrc = '';
        if ($stars == 1)
            $starSrc = 'Images/svgs/one-star.svg';
        else if ($stars == 2)
            $starSrc = 'Images/svgs/two-stars.svg';
        else if ($stars == 3)
            $starSrc = 'Images/svgs/three-stars.svg';
        else if ($stars == 4)
            $starSrc = 'Images/svgs/four-stars.svg';
        else if ($stars == 5)
            $starSrc = 'Images/svgs/five-stars.svg';
        echo "
        <div class='tile-wrapper transition-blue reveal'>
            <div class='tile-references'>
                <img src='$starSrc' alt=''>
                    <p>$text</p>
                        </div>
                        <div class='customer-name'>
                            <h4>$clientName</h4>
                            <p class='tile-text-blue'>$clientEmployment</p>
                        </div>
                    </div>";
    }


}
