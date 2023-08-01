<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smart Case Homepage - Wealthy Future for you business</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
<nav class="navbar navbarnavbar-dark bg-white sticky-top">
    <div class="container-fluid">
        <?php include 'includes/navbar.php' ?>
    </div>
</nav>
<main>
    <section id="section-1" class="row section section-1">
        <div id="section-1-col-left" class="two-columns column-left">
            <button id="section-1-button" type="button" class="btn btn-outline-primary blue"
                style="max-width: 14rem;">Máme komplexní řešní</button>
            <div> <br><br>
                <span class="title title-bold">Marketingová <br> řešení</span><br>
                <span class="title">na míru</span>
                <br><br>
                <span>Pomůžeme Vám rozjet Vaše podnikání!</span>
                <?php include 'includes/tiles_1.php' ?>
                <div class="row" style="max-height: 3rem;">
                    <button type="button" style="height: 2.5rem;" class="btn btn-primary">Více informací
                        <i class="bi bi-arrow-right-short"></i>
                    </button>
                </div>
            </div>
        </div><br><br>
        <div id="section-1-col-right" class="two-columns column-right">
            <img class="section-1-img" src="Images/big_picture_with_phone_and_contacts.png" alt="">
        </div>
    </section>
    <section id="section-2" class="row section section-2">
        <div class="section-2-tile reveal transition">
            <div class="row">
                <div class="transition section-2-tile-left">
                    <h6 class="h_blue">OČEKÁVÁNÍ</h6>
                    <br>
                    <p class="title title-bold lowerLineHeight">Důležité je</p>
                    <p class="title lowerLineHeight"> začít</p>
                    <p>Změna by měla být pouze lepší. <br>
                        A to my Vám zajistíme!</p><br>
                </div>
                <div class="section-2-tile-right">
                    <img src="Images/iso_certificate.png" alt="isocertificate" width="100%"
                        class="img-fluid iso-img transition">
                </div>
            </div>
            <div class="row-buttons" style="gap: 0.5rem;">
                <button type="button" class="btn btn-outline-primary">Spolupráce<i
                        class="bi bi-arrow-right-short"></i></button>
                <button type="button" class="btn btn-primary">Naše výsledky<i
                        class="bi bi-arrow-right-short"></i></button>
            </div>
        </div>

    </section>
    <div class="section-3-bg"></div>
    <section id="section-3" class="row section section-3">

        <div class="section-3-row-1 reveal">
            <h6 class="h_blue">SPOLUPRACUJEME</h6>
            <h4 class="h_blue">Dlouhodobě s klienty ze všech odvětví</h4>
            <span style="width: 80%; text-align: center;">Každý klient je unikátní a s ním i celý marketingový
                postup.
                Žádný klient není překážka - Na vše jsme připravení.</span>
        </div><br>

        <?php include 'includes/swiper_horizontal.php' ?>
    </section>
    <section id="section-4" class="section section-4">
        <div id="section-4-col-left" class="two-columns column-left reveal">
            <div> <br><br>
                <h6>NAŠE STRATEGIE</h6>
                <span class="title title-bold">Unikátní <br> Marketingový</span><br>
                <span class="title">plán</span>
                <br><br>
                <span>Audit aktuální situace, podle které zjistíme Váš stav <br> a vytvoříme plán Vám přímo na
                    míru</span>
                <div class="row" style="margin-top: 1rem !important;">
                    <button type="button" style="max-width: 12rem;" class="btn btn-primary">Více informací <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </div>
        <div id="section-4-col-right" class="two-columns column-right reveal">
            <img class="section-4-img" src="Images/exampleimg1.png" alt="">
        </div>
    </section>
    <section id="section-5" class="section section-5">
        <div class="section-5-row-1 reveal">
            <h6 class="h_blue">SLUŽBY</h6>
            <span>Zakládáme si na kvalitě a dostupnosti. <br> U nás si každý najde své dle jeho potřeby.</span>
        </div>
        <?php include 'includes/tiles_2.php' ?>
        <div class="section-5-row-2 reveal">
            <h6>NAŠE PRÁCE</h6>
            <h4>Jak vypadá naše práce v praxi?</h4>
            <span>Použití a reálné výsledky v praxi jsou bezpochypně ta nejduležitější část. <br> Podívejte se sami,
                jak naše práce v praxi vypadá.</span>
        </div>
        <div class="swiperWrap-vertical">
            <?php include 'includes/swiper_vertical.php' ?>
        </div>

    </section>
    <section id="section-6" class="section-6">
        <div class="section-6-row-1 reveal transition">
            <h6>REFERENCE</h6>
            <h4>Jak hodnotí naše služby naši klienti?</h4>
            <p>Naše služby využívá mnoho klientů z mnoha odvětví. <br>
                Přesvěčte se sami, jak hodnotí naše služby a spolupráci s námi.</p>
        </div>
        <div class="section-6-row-2">
            <div class="grid-container-3fr">
                <?php getAllClientRatings() ?>
            </div>
        </div>
</main>
<?php include 'includes/footer.php' ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.min.js"></script>
<script src="Scripts/index.js"></script>
</html>