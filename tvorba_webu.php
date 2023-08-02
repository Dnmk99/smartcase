<?php include 'functions.php' ?>
<?php include 'subpageFunctions.php' ?>
<?php $subpageId = 3; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tvorba webů a prodejní systémy</title>
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/web.css">
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
        <div class="web-1-bg"></div>
        <section id="strategy-section-1" class="web-section">
            <div class="web-row web-row-1">
                <?php echo generateSubpageHTML($subpageId, $language); ?>
            </div>
            <div class="container-fluid">
                <div class="row w-100 p-4 d-flex justify-content-center text-center">
                    <h4>
                        <?php echo $textAbove ?>
                    </h4>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <?php
                    generateSubpageTile('Images/svgIcons/red1.svg', '#E5005A', '01', 'Audit aktuální situace, podle které zjistíme Váš stav a vytvoříme plán Vám přímo na míru', 'hoverRed');
                    generateSubpageTile('Images/svgIcons/red2.svg', '#E5005A', '02', 'Audit aktuální situace, podle které zjistíme Váš stav a vytvoříme plán Vám přímo na míru', 'hoverRed');
                    generateSubpageTile('Images/svgIcons/red3.svg', '#E5005A', '03', 'Audit aktuální situace, podle které zjistíme Váš stav a vytvoříme plán Vám přímo na míru', 'hoverRed');
                    generateSubpageTile('Images/svgIcons/red4.svg', '#E5005A', '04', 'Audit aktuální situace, podle které zjistíme Váš stav a vytvoříme plán Vám přímo na míru', 'hoverRed');
                    ?>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row w-100 p-4 d-flex justify-content-center text-start">
                    <h5>
                        <?php echo $textDown ?>
                    </h5>
                </div>
            </div>
        </section>
        <section id="strategy-section-2" class="web-section-2">
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