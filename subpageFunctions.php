<?php
include 'includes/db.php';
// $subpage_1_color = '#226FB7';
// $subpage_2_color = 'F2BA44';
// $subpage_3_color = '#E5005A';
// $subpage_4_color = '#49B085';
function generateSubpageHTML($subpageId, $language)
{
    global $connection;
    // Determine the title and description columns based on the language
    $titleColumn = ($language === 'cz') ? 'page_title_cz' : 'page_title_en';
    $descriptionColumn = ($language === 'cz') ? 'page_description_cz' : 'page_description_en';
    // Query to fetch data for the specific subpage
    $query = "SELECT id, name, color, $titleColumn as page_title, $descriptionColumn as page_description, main_image FROM subpages WHERE id = $subpageId";
    $result = $connection->query($query);
    // Check for query execution errors
    if (!$result) {
        die("Query failed: " . $connection->error);
    }
    // Fetch the subpage data
    $subpage = $result->fetch_assoc();
    $bootstrapClass = '';
    if ($subpage['color'] == '#226FB7')
        $bootstrapClass = "primary";
    else if ($subpage['color'] == '#49B085')
        $bootstrapClass = "success";
    else if ($subpage['color'] == '#F2BA44')
        $bootstrapClass = "warning";
    else if ($subpage['color'] == '#E5005A')
        $bootstrapClass = "danger";
    // Generate HTML using the retrieved data
    $html = '<div class="container-fluid">
                <div div class="row">
                    <div class="col-lg-6">
                        <h6 style="color:' . $subpage['color'] . '!important;">NAŠE STRATEGIE</h6>
                        <span-title-bold class="p-0 pb-2">' . $subpage['page_title'] . '</span-title-bold><br>
                        <p class="w-100 p-0 pt-2">' . $subpage['page_description'] . '</p>
                        <div class="pv-row-buttons">
                            <button class="btn btn-outline-' . $bootstrapClass . '">Více informací<i class="bi bi-arrow-right-short"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid p-1 pt-4" src="' . $subpage['main_image'] . '" alt="">
                    </div>
                </div>
            </div>';
    return $html;
}
function getDescription($subpageId, $language)
{
    global $connection;

    // Determine the text above and text down columns based on the language
    $textAboveColumn = ($language === 'cz') ? 'text_above_cz' : 'text_above_en';
    $textDownColumn = ($language === 'cz') ? 'text_down_cz' : 'text_down_en';

    // Query to fetch title and description for the specific subpage
    $query = "SELECT $textAboveColumn as text_above, $textDownColumn as text_down FROM subpage_tile_description WHERE subpage_id = $subpageId";
    $result = $connection->query($query);

    // Check for query execution errors
    if (!$result) {
        die("Query failed: " . $connection->error);
    }

    // Fetch the subpage title and description data
    $titleDescription = $result->fetch_assoc();

    return array(
        'text_above' => $titleDescription['text_above'],
        'text_down' => $titleDescription['text_down']
    );
}
function getSectionContent($subpageId, $language) {
    global $connection;

    // Determine the title and text columns based on the language
    $titleColumn = ($language === 'cz') ? 'title_cz' : 'title_en';
    $textColumn = ($language === 'cz') ? 'text_cz' : 'text_en';

    // Query to fetch section content data and corresponding subpage color
    $query = "SELECT sc.id, sc.subpage_id, sc.image, $titleColumn as title, $textColumn as text, sp.color, sc.number
              FROM section_content sc
              JOIN subpages sp ON sc.subpage_id = sp.id
              WHERE sc.subpage_id = $subpageId";
    $result = $connection->query($query);

    // Check for query execution errors
    if (!$result) {
        die("Query failed: " . $connection->error);
    }

    // Fetch the section content data
    $sectionContent = array();
    while ($row = $result->fetch_assoc()) {
        $sectionContent[] = $row;
    }

    return $sectionContent;
}

function generateSubpageTile($subpage_id, $language)
{
    global $connection;

    // Fetch data from the subpage_tile table for the given subpage_id
    $query = "SELECT img_url, number_color_hex, number, " . ($language === 'cz' ? 'text_cz' : 'text_en') . " AS text FROM subpage_tile WHERE subpage_id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $subpage_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        die("Query failed: " . $connection->error);
    }
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="col-lg-6 p-2">
            <a class="a-tile" href="marketingove_strategie.php">
                <div class="subPage_tile h-auto p-2 ' . $row['number_color_hex'] . '">
                    <div class="d-flex mb-2">
                        <div class="p-2 w-50 h-50 d-flex justify-content-left">
                            <img class="img-fluid" src="' . $row['img_url'] . '" alt="">
                        </div>
                        <div class="p-2 w-50 h-50 text-right">
                            <h1 style="color: ' . $row['number_color_hex'] . ' !important;">' . $row['number'] . '</h1>
                        </div>
                    </div>
                    <div class="p-2">
                        <p class="mb-2">' . $row['text'] . '</p>
                    </div>
                </div>
            </a>
        </div>
    ';
    }
}
?>