<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <header class="navbar customNavbar navbar-light bg-light" aria-label="">
        <div class="container-fluid">
            <a href="index.html"><img id="headerLogo" href="" class="header-logo transition navControll" src="Images/smartcase_logo.png"
                alt="" srcset=""></a>
            <div class="dropdown transition">
                <a class="dropbtn"><img class="navControll" src="Images/grey_button_menu.png" alt="Menu">
                </a>
                <div class="dropdown-content">
                    <a href="marketingove_strategie.html" class="transition dropdown-item">Marketingové strategie</a>
                    <a href="foto_video_sluzby.html" class="transition dropdown-item">Foto-Video Služby</a>
                    <a href="grafika_a_branding.html" class="transition dropdown-item">Firemní grafika</a>
                    <a href="tvorba_webu.html" class="transition dropdown-item">Tvorba webů</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="row" style="justify-content: space-between; padding: 1rem; gap: 3rem;">
            <div class="column-left">
                <h6>JSME TU PRO VÁS</h6>
                <span-title-bold>Kontaktujte</span-title-bold><span-title> nás</span-title><br>
                <div class="row" style="justify-content: start; align-items: center;">
                    <img src="Images/svgs/mail.svg" alt="">
                    <p style="margin: 0 !important; padding: 0 !important;">Info@smartcase.cz</p>
                </div>
                <div class="row" style="justify-content: start; align-items: center;">
                    <img src="Images/svgs/call.svg" alt="">
                    <p style="margin: 0 !important; padding: 0 !important;">+420 727 913 350</p>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.0999526000955!2d13.371802376983368!3d49.74656307146641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1fae139f757%3A0xd41b813e399fa41d!2zUHJlxaFvdnNrw6EgMTk0LzE1LCAzMDEgMDAgUGx6ZcWIIDM!5e0!3m2!1scs!2scz!4v1690583639230!5m2!1scs!2scz"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h6>SmartCase Agency, s.r.o.</h6>
                <p>Prešovská 194/15301 00 Plzeň Česká republika</p>

            </div>
            <div class="column-right">
                <div class="contact-form">
                    <h6 style="color: white;">KONTAKT</h6><br>

                    <span-title-bold style="color: white;">Kontaktujte</span-title-bold><br><span-title
                        style="color: white;"> nás</span-title><br>
                    <span style="color: white;">Máte dotaz? Pojďme se sejít a společně vše proberme!</span><br>
                    <form action="kontakt.php" method="post">
                        <input name="name" placeholder="Jméno" class="formInput" type="text"><br><br>
                        <input name="email" placeholder="Email" class="formInput" type="email"><br><br>
                        <input name="tel" placeholder="Telefon" class="formInput" type="tel"><br><br>
                        <textarea name="message" placeholder="Zpráva..." id="" class="formMessage" cols="30"
                            rows="10"></textarea>
                        <input type="submit" name="submit" class="btn btn-light transition" value="Sjednat schůzku"><br>
                        <div style="justify-content: space-between; align-items: center;" class="row">
                            <h5 style="color: white;">SLEDUJTE NÁS</h5>
                            <div>
                                <a href="https://www.facebook.com/SmartcaseAgency"><img class="transition"
                                        src="Images/svgs/facebook-white.svg" alt=""></a>
                                <a href="https://www.instagram.com/smartcase_agency/"><img class="transition"
                                        src="Images/svgs/instagram-white.svg" alt=""></a>
                            </div>
                        </div>
                        <?php
                        // include 'db.php';
                        if (isset($_POST['submit'])) {
                            $headers = "From: Contact form" . "\r\n";
                            $mailTo = 'ti18.mika@gmail.com';
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $tel = $_POST['tel'];
                            $emailAndTel = 'From: ' . $email . "\n Tel: " . $tel;
                            $message = $_POST['message'];


                            if ($name && $email && $tel && $message) {
                                //ok
                                // echo '<h5 style="color: white;">Odpovíme vám co nejdříve to bude možné.<h5>';
                                // mail($headers,$mailTo,$name, $emailAndTel ,$message);
                                exit; // Make sure to exit after the redirect to prevent further code execution
                            } else if (!$name) {
                                echo '<br><h5 style="color: white;">Abych věděli kdo nás kontaktuje</h6><br>
                                <h6 style="color: white; position: relative; top: -2rem;"> <i style="color: white;" class="bi bi-exclamation-circle"></i> Zadejte prosím jméno a příjmení.<h6>';
                                
                            } else if (!$email) {
                                echo '<br><h5 style="color: white;">Abych věděli kdo nás kontaktuje</h6><br>
                                <h6 style="color: white; position: relative; top: -2rem;"><i style="color: white;" class="bi bi-exclamation-circle"></i> Zadejte prosím e-mailovou adresu.<h6>';
                                
                            } else if (!$tel) {
                                echo '<br><h5 style="color: white;">Abych věděli kdo nás kontaktuje</h6><br>
                                <h6 style="color: white; position: relative; top: -2rem;"><i style="color: white;" class="bi bi-exclamation-circle"></i> Zadejte prosím své telefonní číslo.<h6>';
                                
                            } else if (!$message) {
                                echo '<br><h6 style="color: white;"><i style="color: white;" class="bi bi-exclamation-circle"></i> Zpráva neobsahuje žádné znaky.<h6>';
                             
                            }
                           
                        }
                        ?>
                    </form>
                </div>


            </div>
        </div>
    </main>
    <footer class="foot">
        <div class="footer-wrapper">
            <div class="footer-part-1">
                <a href=""><img class="transition" src="Images/smartcase_logo.png" alt=""></a>
            </div>
            <div class="footer-part-2">
                <a href="">
                    <h5 class="transition">KONTAKT</h5>
                </a>
            </div>
            <div class="footer-part-3">
                <a href="">
                    <h5 class="transition">PODMÍNKY</h5>
                </a>
            </div>
            <div class="footer-part-4">
                <a href="">
                    <h5 class="transition">POMOC</h5>
                </a>
            </div>
            <div class="footer-part-5">
                <a href="">
                    <h5 class="transition">ÚČET</h5>
                </a>
            </div>
        </div>
        <div class="row" style="padding: 1rem; gap: 1rem;">
            <a href="https://www.facebook.com/SmartcaseAgency" class="transition"><img src="Images/svgs/facebook.svg"
                    alt=""></a>
            <a href="https://www.instagram.com/smartcase_agency/" class="transition"><img
                    src="Images/svgs/instagram.svg" alt=""></a>
        </div>
        <div class="row" style="padding: 1rem;">
            Copyright Smart Case s.r.o.
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>

</html>