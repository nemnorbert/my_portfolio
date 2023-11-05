<?php
// Load JSON
function loadJSON($filePath) {
    $json = file_get_contents($filePath);
    return json_decode($json, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Error decoding JSON: ' . json_last_error_msg());
    }

    return $data;
}

function urlRedirect($siteINFO) {
    $url = $siteINFO -> mainPath . $siteINFO -> langSite;
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: ' . $url . '/');
    exit();
}

function buildGallery($siteINFO, $siteJSON) {
    $project = "";

    foreach ($siteJSON["project"] as $item) {
        $project .= '<div class="filter '.$item['tech'].'">
            <b>'.$item['name'].'</b>
            <img src="'. $siteINFO -> mainPath .'img/work/'.$item['cover'].'" alt="">
        </div>';
    }

    echo $project;
}

function buildMenu($siteJSON, $langJSON) {
    $html = "";

    for ($i=0; $i < count($siteJSON["nav"]); $i++) { 
        $active = $i === 0 ? ' active' : '';
        $html .= 
        '<div class="item'.$active.'">
            <a href="#'. $siteJSON["nav"][$i] .'">
                <span class="icon"><i class="'. $siteJSON["icons"][$i] .'"></i></span>
                <span class="text">'. $siteJSON["nav"][$i] .'</span>
            </a>
        </div>';
    }

    echo $html;
}

function printSocial()
{
    echo '<div class="social">
        <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="#" target="_blank"><i class="bi bi-github"></i></a>
        <a href="#" target="_blank"><i class="bi bi-behance"></i></a>
    </div>';
}
?>