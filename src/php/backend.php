<?php
$siteINFO = new stdClass();
$siteINFO -> redirect = false;
$availableLang = ["hu", "en"];
$siteINFO -> langUser = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : false;
$siteJSON = loadJSON('src/json/site.json');

// Test or Live Server?
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    $preURL = '/nn_portfolio';
    $siteINFO -> test = true;
    $siteINFO -> mainPath = $siteJSON["mainPath"]["test"];
    $siteINFO -> redcatPath = $siteJSON["redcatPath"]["test"];
} else {
    $preURL = '';
    $siteINFO -> test = false;
    $siteINFO -> mainPath = $siteJSON["mainPath"]["web"];
    $siteINFO -> redcatPath = $siteJSON["redcatPath"]["web"];
}

$requestURI = $_SERVER['REQUEST_URI'];
$requestURI = str_replace($preURL, '', $requestURI);
$parts = explode("?", $requestURI);
$parts = explode("/", $parts[0]);

if (in_array($parts[1], $availableLang)) {
    $siteINFO -> langSite = $parts[1];
} else {
    $siteINFO -> langSite = in_array($siteINFO -> langUser, $availableLang) ? $siteINFO -> langUser : "en";
    $siteINFO -> redirect = true;
}

$langJSON = loadJSON('src/json/lang/'.$siteINFO -> langSite.'.json');

// Redirect it? If yes go other page
if ($siteINFO -> redirect) {urlRedirect($siteINFO);}


/*
echo '<pre>';
print_r($parts);
print_r($siteINFO);
echo '----------';
echo '</pre>';
*/
?>