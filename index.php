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
                <button id="section-1-button" type="button" class="btn btn-outline-primary reveal_slow"
                    style="max-width: 14rem;"><?php echo ($language === 'cz') ? 'Máme komplexní řešení' : 'We Have Comprehensive Solutions'; ?></button>
                <div> <br><br>
                    <span class="title title-bold reveal_slow">
                        <?php echo ($language === 'cz') ? 'Marketingová <br> řešení' : 'Marketing Solutions'; ?>
                    </span><br>
                    <span class="title reveal_slow">
                        <?php echo ($language === 'cz') ? 'na míru' : 'Tailored'; ?>
                    </span>
                    <br><br>
                    <span class="reveal_slow">
                        <?php echo ($language === 'cz') ? 'Pomůžeme Vám rozjet Vaše podnikání!' : 'We Will Help You Launch Your Business!'; ?>
                    </span>
                    <?php include 'includes/tiles_1.php'; ?>
                    <div class="row" style="max-height: 3rem;">
                        <button type="button" style="height: 2.5rem;" class="btn btn-primary reveal_slow">
                            <?php echo ($language === 'cz') ? 'Více informací' : 'More Information'; ?>
                            <i class="bi bi-arrow-right-short"></i>
                        </button>
                    </div>
                </div>
            </div><br><br>
            <div id="section-1-col-right" class="two-columns column-right">
                <img class="section-1-img reveal_faster" src="Images/big_picture_with_phone_and_contacts.png" alt="">
            </div>
        </section>
        <section id="section-2" class="row section section-2">
            <div class="section-2-tile reveal transition">
                <div class="row">
                    <div class="transition section-2-tile-left">
                        <h6 class="h_blue pl-4">
                            <?php echo ($language === 'cz') ? 'OČEKÁVÁNÍ' : 'EXPECTATIONS'; ?>
                        </h6>
                        <br>
                        <p class="title title-bold lowerLineHeight pl-4">
                            <?php echo ($language === 'cz') ? 'Důležité je' : 'It is Important'; ?>
                        </p>
                        <p class="title lowerLineHeight pl-4">
                            <?php echo ($language === 'cz') ? 'začít' : 'to Start'; ?>
                        </p>
                        <p class="pl-4">
                            <?php echo ($language === 'cz') ? 'Změna by měla být pouze lepší. <br>A to my Vám zajistíme!' : 'Change should only be for the better. And we will ensure that!'; ?>
                        </p><br>
                    </div>
                    <div class="section-2-tile-right">
                        <img src="Images/iso_certificate.png"
                            alt="<?php echo ($language === 'cz') ? 'isocertificate' : 'ISO Certificate'; ?>"
                            width="100%" class="img-fluid iso-img transition">
                    </div>
                </div>
                <div class="row-buttons" style="gap: 0.5rem;">
                    <button type="button" class="btn btn-outline-primary">
                        <?php echo ($language === 'cz') ? 'Spolupráce' : 'Collaboration'; ?><i
                            class="bi bi-arrow-right-short"></i>
                    </button>
                    <button type="button" class="btn btn-primary">
                        <?php echo ($language === 'cz') ? 'Naše výsledky' : 'Our Results'; ?><i
                            class="bi bi-arrow-right-short"></i>
                    </button>
                </div>

            </div>

        </section>
        <div class="section-3-bg"></div>
        <section id="section-3" class="row section section-3">

            <div class="section-3-row-1 reveal">
                <h6 class="h_blue">
                    <?php echo ($language === 'cz') ? 'SPOLUPRACUJEME' : 'WE COOPERATE'; ?>
                </h6>
                <h4 class="h_blue">
                    <?php echo ($language === 'cz') ? 'Dlouhodobě s klienty ze všech odvětví' : 'Long-Term with Clients from All Industries'; ?>
                </h4>
                <span style="width: 80%; text-align: center;">
                    <?php echo ($language === 'cz') ? 'Každý klient je unikátní a s ním i celý marketingový postup. Žádný klient není překážka - Na vše jsme připravení.' : 'Each client is unique, and with them, the entire marketing process. No client is an obstacle - we are prepared for everything.'; ?>
                </span>
            </div><br>

            <?php include 'includes/swiper_horizontal.php' ?>
        </section>

        <section id="section-4" class="section section-4">
            <div id="section-4-col-left" class="two-columns column-left reveal">
                <div id="section-4-col-left" class="two-columns column-left reveal">
                    <div> <br><br>
                        <h6>
                            <?php echo ($language === 'cz') ? 'NAŠE STRATEGIE' : 'OUR STRATEGY'; ?>
                        </h6>
                        <span class="title title-bold">
                            <?php echo ($language === 'cz') ? 'Unikátní <br> Marketingový' : 'Unique <br> Marketing'; ?>
                        </span><br>
                        <span class="title">
                            <?php echo ($language === 'cz') ? 'plán' : 'plan'; ?>
                        </span>
                        <br><br>
                        <span>
                            <?php echo ($language === 'cz') ? 'Audit aktuální situace, podle které zjistíme Váš stav <br> a vytvoříme plán Vám přímo na míru' : 'Audit of the current situation, based on which we will determine your status <br> and create a plan tailored directly to you'; ?>
                        </span>
                        <div class="row" style="margin-top: 1rem !important;">
                            <button type="button" style="max-width: 12rem;" class="btn btn-primary">
                                <?php echo ($language === 'cz') ? 'Více informací' : 'More Information'; ?> <i
                                    class="bi bi-arrow-right-short"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div id="section-4-col-right" class="two-columns column-right reveal">
                <img class="section-4-img" src="Images/exampleimg1.png" alt="">
            </div>
        </section>
        <section id="section-5" class="section section-5">
            <div class="section-5-row-1 reveal">
                <h6 class="h_blue">
                    <?php echo ($language === 'cz') ? 'SLUŽBY' : 'SERVICES'; ?>
                </h6>
                <span>
                    <?php echo ($language === 'cz') ? 'Zakládáme si na kvalitě a dostupnosti. <br> U nás si každý najde své dle jeho potřeby.' : 'We value quality and accessibility. <br> Everyone will find what they need with us.'; ?>
                </span>
            </div>
            <?php include 'includes/tiles_2.php' ?>
            <div class="section-5-row-2 reveal">
                <h6>
                    <?php echo ($language === 'cz') ? 'NAŠE PRÁCE' : 'OUR WORK'; ?>
                </h6>
                <h4>
                    <?php echo ($language === 'cz') ? 'Jak vypadá naše práce v praxi?' : 'What does our work look like in practice?'; ?>
                </h4>
                <span>
                    <?php echo ($language === 'cz') ? 'Použití a reálné výsledky v praxi jsou bezpochyby ta nejdůležitější část. <br> Podívejte se sami, jak naše práce v praxi vypadá.' : 'The use and real results in practice are undoubtedly the most important part. <br> See for yourself what our work looks like in practice.'; ?>
                </span>
            </div>

            <div class="swiperWrap-vertical">
                <?php include 'includes/swiper_vertical.php' ?>
            </div>

        </section>
        <section id="section-6" class="section-6">
            <div class="section-6-row-1 reveal transition">
                <h6>
                    <?php echo ($language === 'cz') ? 'REFERENCE' : 'REFERENCES'; ?>
                </h6>
                <h4>
                    <?php echo ($language === 'cz') ? 'Jak hodnotí naše služby naši klienti?' : 'How do our clients rate our services?'; ?>
                </h4>
                <p>
                    <?php echo ($language === 'cz') ? 'Naše služby využívá mnoho klientů z mnoha odvětví. <br>
            Přesvěčte se sami, jak hodnotí naše služby a spolupráci s námi.' : 'Many clients from various industries use our services. <br>
            See for yourself how our clients rate our services and collaboration.'; ?>
                </p>
            </div>

            <div class="section-6-row-2">
                <div class="grid-container-3fr">
                    <?php getAllClientRatings($language) ?>
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