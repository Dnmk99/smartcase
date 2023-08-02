<?php include 'includes/db.php';
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
// echo $lang;
$acceptLang = ['en', 'cz'];
$lang = in_array($lang, $acceptLang) ? $lang : 'en';
// require_once "index_{$lang}.php"; 
$language = $lang;
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
        } //<div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
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
            echo '<div class="swiper-slide"> <img class="vertical-img" src="' . $url . '" style="width: 100%;
            padding: 5rem;" alt="Slide Image"> </div>';
        } //<div class="swiper-slide"> <img src="Images/Customers/FX_logo.png"></div>
    }
}
function getAllClientRatings($language)
{
    global $connection;
    $textColumn = ($language === 'cz') ? 'text_cz' : 'text_en';
    $query = "SELECT client_name, client_employment, $textColumn AS text, stars FROM client_ratings ORDER BY RAND() LIMIT 3";
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







function getTranslation($key) {
    // Define your translations here
    global $language;
    $translations = array(
        // English translations
        'button_1_text' => array(
            'en' => 'We have a comprehensive solution',
            'cz' => 'Máme komplexní řešení'
        ),
        'marketing_title_1' => array(
            'en' => 'Marketing Solutions',
            'cz' => 'Marketingová řešení'
        ),
        'marketing_subtitle_1' => array(
            'en' => 'Tailored',
            'cz' => 'na míru'
        ),
        'marketing_text_1' => array(
            'en' => 'We will help you launch your business!',
            'cz' => 'Pomůžeme Vám rozjet Vaše podnikání!'
        ),
        'button_2_text' => array(
            'en' => 'Learn More',
            'cz' => 'Více informací'
        ),
        'section_2_heading' => array(
            'en' => 'EXPECTATIONS',
            'cz' => 'OČEKÁVÁNÍ'
        ),
        'section_2_title_1' => array(
            'en' => 'Important is',
            'cz' => 'Důležité je'
        ),
        'section_2_title_2' => array(
            'en' => 'to start',
            'cz' => 'začít'
        ),
        'section_2_text' => array(
            'en' => 'Change should only be better. And that\'s what we\'ll ensure for you!',
            'cz' => 'Změna by měla být pouze lepší. A to my Vám zajistíme!'
        ),
        'button_3_text' => array(
            'en' => 'Collaboration',
            'cz' => 'Spolupráce'
        ),
        'button_4_text' => array(
            'en' => 'Our Results',
            'cz' => 'Naše výsledky'
        ),
        'section_3_heading' => array(
            'en' => 'WE COLLABORATE',
            'cz' => 'SPOLUPRACUJEME'
        ),
        'section_3_title' => array(
            'en' => 'Long-term with clients from all industries',
            'cz' => 'Dlouhodobě s klienty ze všech odvětví'
        ),
        'section_3_text' => array(
            'en' => 'Each client is unique, and so is the entire marketing process with them. No client is an obstacle - we are prepared for everything.',
            'cz' => 'Každý klient je unikátní a s ním i celý marketingový postup. Žádný klient není překážka - Na vše jsme připravení.'
        ),
        'section_4_heading' => array(
            'en' => 'OUR STRATEGY',
            'cz' => 'NAŠE STRATEGIE'
        ),
        'section_4_title_1' => array(
            'en' => 'Unique',
            'cz' => 'Unikátní'
        ),
        'section_4_title_2' => array(
            'en' => 'Marketing',
            'cz' => 'Marketingový'
        ),
        'section_4_title_3' => array(
            'en' => 'Plan',
            'cz' => 'plán'
        ),
        'section_4_text' => array(
            'en' => 'Audit of the current situation, based on which we will assess your status and create a plan tailored specifically for you.',
            'cz' => 'Audit aktuální situace, podle které zjistíme Váš stav a vytvoříme plán Vám přímo na míru.'
        ),
        'button_5_text' => array(
            'en' => 'Learn More',
            'cz' => 'Více informací'
        ),
        'section_5_heading' => array(
            'en' => 'OUR SERVICES',
            'cz' => 'SLUŽBY'
        ),
        'section_5_text' => array(
            'en' => 'We value quality and availability. With us, everyone will find what they need according to their requirements.',
            'cz' => 'Zakládáme si na kvalitě a dostupnosti. U nás si každý najde své dle jeho potřeby.'
        ),
        'section_6_heading' => array(
            'en' => 'REFERENCES',
            'cz' => 'REFERENCE'
        ),
        'section_6_title' => array(
            'en' => 'How do our clients rate our services?',
            'cz' => 'Jak hodnotí naše služby naši klienti?'
        ),
        'section_6_text' => array(
            'en' => 'Many clients from various industries use our services. See for yourself how our clients rate our services and collaboration with us.',
            'cz' => 'Naše služby využívá mnoho klientů z mnoha odvětví. Přesvěčte se sami, jak hodnotí naše služby a spolupráci s námi.'
        ),
        // ... add more translations ...
    );

    if (isset($translations[$key][$language])) {
        return $translations[$key][$language];
    } else {
        return ''; // Return an empty string if translation not found
    }
}