<?php include 'functions.php';?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php /*include 'includes/navbar.php'*/?>
    <nav id="navbar" class="navbar customNavbar navbar-light bg-white " aria-label="Fifth navbar example">
        <div class="container-fluid">
            <div style="display: flex; max-width: 30%;padding-top: 0.5rem; display: flex; 
                padding-top: 0.5rem; align-content: center; flex-wrap: wrap;">
                <a class="navbar-brand" href="index.php">
                    <image src="Images/smartcase_logo.png" style="width: 100%;" />
                </a>
            </div>
            <div style="display: flex; max-width: 60%;padding-top: 0.5rem; display: flex; 
                padding-top: 0.5rem; align-content: center; flex-wrap: wrap;">
                <button href="kontakt.php" type="button" class="btn btn-primary">Kontakt</button>
                <button class="navbar-toggler collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="images/grey_button_menu.png" class="transition navbar-toggler-image" alt="">
                </button>

            </div>
            <div class="navbar-collapse collapse" id="navbar" style="list-style-type: none; margin: 0;padding: 1rem;">
                <div id="navbar" class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-end" style="padding-left: 80%">
                    <div class="row row-cols-4 text-center">
                        <a class="col" href=""><img style="width:1.5rem" src="Images/Icons/subpage_small_target.png" alt=""></a>
                        <a class="col" href=""><img style="width:2rem" src="" alt=""></a>
                        <a class="col" href=""><img style="width:2rem" src="" alt=""></a>
                        <a class="col" href=""><img style="width:2rem" src="" alt=""></a>
                    </div>
                </div>
            </div>
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
                    <div class="grid-container">
                        <a class="a-tile" href="marketingove_strategie.php">
                            <div class="tile tile-transition hoverBlue">
                                <div class="image-wrapper"><img class="tile-img"
                                        src="Images/Icons/subpage_small_target.png" alt=""></div>
                                <div class="text-wrapper"><span class="tile-text">Marketingové <br> strategie</span>
                                </div>
                            </div>
                        </a>

                        <a class="a-tile" href="grafika_a_branding.php">
                            <div class="tile tile-transition hoverYellow">
                                <div class="image-wrapper"><img class="tile-img"
                                        src="Images/Icons/subpage_small_picture.png" alt=""></div>
                                <div class="text-wrapper"><span class="tile-text">Firemní grafika <br> Branding</span>
                                </div>
                            </div>
                        </a>

                        <a class="a-tile" href="foto_video_sluzby.php">
                            <div class="tile tile-transition hoverGreen">
                                <div class="image-wrapper"><img class="tile-img"
                                        src="Images/Icons/subpage_small_camera.png" alt=""></div>
                                <div class="text-wrapper"><span class="tile-text">Profesionální <br> Foto-Video
                                        služby</span></div>
                            </div>
                        </a>

                        <a class="a-tile" href="tvorba_webu.php">
                            <div class="tile tile-transition hoverRed">
                                <div class="image-wrapper"><img class="tile-img"
                                        src="Images/Icons/subpage_small_web.png" alt="">
                                </div>
                                <div class="text-wrapper"><span class="tile-text">Tvorba webů <br> Prodejní
                                        systémy</span>
                                </div>
                            </div>
                        </a>

                    </div><br><br>
                    <div class="row" style="max-height: 3rem;">
                        <button type="button" style="height: 2.5rem;" class="btn btn-primary">Více informací <i
                                class="bi bi-arrow-right-short"></i></button>
                    </div>
                </div>
            </div>
            <div id="section-1-col-right" class="two-columns column-right">
                <img class="section-1-img" src="Images/big_picture_with_phone_and_contacts.png" alt="">
            </div>
        </section>
        <section id="section-2" class="row section section-2">
            <div class="section-2-tile reveal transition">
                <div class="row">
                    <div class="transition section-2-tile-left">
                        <h6>OČEKÁVÁNÍ</h6>
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
                <h6>SPOLUPRACUJEME</h6>
                <h4>Dlouhodobě s klienty ze všech odvětví</h4>
                <span style="width: 80%; text-align: center;">Každý klient je unikátní a s ním i celý marketingový
                    postup.
                    Žádný klient není překážka - Na vše jsme připravení.</span>
            </div><br>
            
            <div class="swiper-container reveal">
                <div class="swiper-wrapper">
                <?php 
                    getAllCustomerData();
                ?>
                    <div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
                    <div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
                    <div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
                    <div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
                    <div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
                    <div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
                <div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
                <div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
                <div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
                <div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
                <div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
                
                </div>
            </div>
            
        
            
            
                
            
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
                <h6>SLUŽBY</h6>
                <span>Zakládáme si na kvalitě a dostupnosti. <br> U nás si každý najde své dle jeho potřeby.</span>
            </div>
            <div class="grid-container reveal transition">
                <a href="marketingove_strategie.php">
                    <div class="tile tile-transition hoverBlue">
                        <div class="image-wrapper-large"><img class="tile-img-large" src="Images/Icons/big_target.png"
                                alt=""></div>
                        <div class="text-wrapper">
                            <div style="display: flex; flex-direction: column;">
                                <span class="tile-text-blue-bald">Marketingová</span>
                                <span class="tile-text-blue"> strategie</span>
                                <span>Zjistíme, na co se zaměřit a jak postupovat</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="grafika_a_branding.php">
                    <div class="tile tile-transition hoverYellow">
                        <div class="image-wrapper-large"><img class="tile-img-large"
                                src="Images/Icons/big_business_graphics.png" alt=""></div>
                        <div class="text-wrapper">
                            <div style="display: flex; flex-direction: column;">
                                <span class="tile-text-yellow-bald">Firemní grafika</span>
                                <span class="tile-text-yellow">Branding a Identita</span>
                                <span>Vytvořme Vašemu podnikání pravou tvář</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="foto_video_sluzby.php">
                    <div class="tile tile-transition hoverGreen">
                        <div class="image-wrapper-large"><img class="tile-img-large"
                                src="Images/Icons/big_photoandvideo.png" alt=""></div>
                        <div class="text-wrapper">
                            <div style="display: flex; flex-direction: column;">
                                <span class="tile-text-green-bald">Profesionální </span>
                                <span class="tile-text-green">Foto-Video Služby</span>
                                <span>Podívejme se na Vás z jiného pohledu</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="tvorba_webu.php">
                    <div class="tile tile-transition hoverRed">
                        <div class="image-wrapper-large"><img class="tile-img-large"
                                src="Images/Icons/big_websitesinternet.png" alt=""></div>
                        <div class="text-wrapper">
                            <div style="display: flex; flex-direction: column;">
                                <span class="tile-text-red-bald">Webové stránky </span>
                                <span class="tile-text-red">Prodejní systémy</span>
                                <span>Zapojme klienty a začněme prodávat</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="section-5-row-2 reveal">
                <h6>NAŠE PRÁCE</h6>
                <h4>Jak vypadá naše práce v praxi?</h4>
                <span>Použití a reálné výsledky v praxi jsou bezpochypně ta nejduležitější část. <br> Podívejte se sami,
                    jak naše práce v praxi vypadá.</span>
            </div>
            <div style="max-height: 20rem; width: 100%;">
            <swiper-container class="verticalSwiper reve" direction="vertical" pagination="true" pagination-clickable="true">
                <?php 
                    getAllOurWork(); 
                ?>
            </swiper-container>
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const mySwiper = new Swiper('.swiper-container', {
    direction: 'horizontal', // Set the swiper direction to horizontal
    loop: true, // Enable looping of the slides
    slidesPerView: 5, // Display 5 slides at a time
    spaceBetween: 50, // Set the space between slides to 50 (adjust this value as needed)
    autoplay: {
      delay: 4000, // Set the delay (in milliseconds) between each slide change
      disableOnInteraction: false, // Allow autoplay to continue even when the user interacts with the swiper
    },
    pagination: {
      el: '.swiper-pagination', // Add pagination
    },
  });
});
</script>

<?php include 'includes/footer.php'?>
</html>
