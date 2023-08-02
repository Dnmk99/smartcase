<?php include 'functions.php' ?>
<?php include 'subpageFunctions.php' ?>
<?php $subpageId = 4; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafika a branding</title>
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/photoVideo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbarnavbar-dark bg-white sticky-top">
        <div class="container-fluid">
            <?php include 'includes/navbar.php' ?>
        </div>
    </nav>
    <main>
        <div class="pv-1-bg"></div>
        <section id="pv-section-1" class="pv-section">
            <?php 
                echo generateSubpageHTML($subpageId, $language);
            ?><br><br>
            <?php 
                    $descriptionData = getDescription($subpageId, $language);
                    $textAbove = $descriptionData['text_above'];
                    $textDown = $descriptionData['text_down'];
                ?>
                <div class="container-fluid">
                    <div class="row w-100 p-4 d-flex justify-content-center text-center">
                        <h4><?php echo $textAbove ?></h4>
                    </div>
                </div>
                <div class="container-fluid">
                <div class="row justify-content-center">
                    <?php
                        generateSubpageTile($subpageId, $language);
                    ?>
                </div>
            </div>
            <div class="container-fluid">
                    <div class="row w-100 p-4 d-flex justify-content-center text-start">
                        <h5><?php echo $textDown ?></h5>
                    </div>
                </div>
        </section>
        <section id="pv-section-2" class="pv-section-2">
        <?php
            $sectionContent = getSectionContent($subpageId, $language);
            $count = count($sectionContent);

            for ($i = 0; $i < $count; $i++) {
                echo '<div class="container-fluid">';
                echo '    <div class="row w-100">';
            
                // Line (Text)
                if ($i % 2 == 0) {
                    echo '        <div class="col-md-6 text-left order-md-first order-sm-first order-first reveal_faster">';
                    echo '            <h1 style="color: ' . $sectionContent[$i]['color'] . ' !important;">' . $sectionContent[$i]['number'] . '</h1>';
                    echo '            <span-title-bold class="title-bold">' . $sectionContent[$i]['title'] . '</span-title-bold>';
                    echo '            <p class="pt-2 text-left">' . $sectionContent[$i]['text'] . '</p>';
                    echo '        </div>';
            
                    // Line (Image)
                    echo '        <div class="col-md-6 order-md-last order-md-first reveal_slow">';
                    echo '            <img class="img-fluid p-2" src="' . $sectionContent[$i]['image'] . '" alt="">';
                    echo '        </div>';
                } else {
                    // Line (Image)
                    echo '        <div class="col-md-6 order-md-first order-sm-last order-last reveal_slow">';
                    echo '            <img class="img-fluid p-2" src="' . $sectionContent[$i]['image'] . '" alt="">';
                    echo '        </div>';
            
                    // Line (Text)
                    echo '        <div class="col-md-6 text-right order-md-last order-md-first reveal_faster">';
                    echo '            <h1 style="color: ' . $sectionContent[$i]['color'] . ' !important;">' . $sectionContent[$i]['number'] . '</h1>';
                    echo '            <span-title-bold class="title-bold">' . $sectionContent[$i]['title'] . '</span-title-bold>';
                    echo '            <p class="pt-2 text-right">' . $sectionContent[$i]['text'] . '</p>';
                    echo '        </div>';
                }
            
                echo '    </div>';
                echo '</div>';
            }
            ?>
        </section>
    </main>
    
    <?php include 'includes/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.min.js"></script>
    <script src="Scripts/index.js"></script>
</html>