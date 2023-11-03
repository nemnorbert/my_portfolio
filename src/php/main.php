<!DOCTYPE html>
<html lang="<?= $siteINFO -> langSite ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $langJSON["name"] . ' (' . $siteINFO -> langSite . ')' ?></title>
    <link rel="stylesheet" href="<?= $siteINFO -> mainPath ?>css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
</head>
<body>
<nav>
    <a href="#home" class="logo">NN</a>
    <?= buildMenu($siteJSON, $langJSON); ?>
</nav>
<main>
    <div id="home" class="box">
        <div id="parallax">
            <img id="parallax1" src="./img/parallax/01.webp" alt="">
        </div>
        <div class="title">
            <h1><?= $langJSON["name"] ?></h1>
            <p>Frontend Developer</p>
        </div>
    </div>
    <div id="work" class="box">
        <h2><?= $langJSON["nav"]["work"] ?></h2>
        <div id="workSelect">
            <div class="btn active" onclick="filterSelect('all')">összes</div>
            <div class="btn" onclick="filterSelect('css')"><i class="devicon-sass-plain"></i> css</div>
            <div class="btn" onclick="filterSelect('ts')"><i class="devicon-typescript-plain"></i> typescript</div>
            <div class="btn" onclick="filterSelect('react')"><i class="devicon-react-plain"></i> react</div>
            <div class="btn" onclick="filterSelect('php')"><i class="devicon-php-plain"></i> php</div>
            <div class="btn" onclick="filterSelect('mysql')"><i class="devicon-mysql-plain"></i> mysql</div>
            <div class="btn" onclick="filterSelect('wp')"><i class="devicon-wordpress-plain"></i> wordpress</div>
        </div>
        <div id="gallery">
            <?php buildGallery($siteINFO, $siteJSON); ?>
        </div>
    </div>

    <div id="about" class="box">
        <h2><?= $langJSON["nav"]["about"] ?></h2>

    </div>

    <div id="contact" class="box">
        <h2><?= $langJSON["nav"]["contact"] ?></h2>
        
    </div>
</main>

<footer>
    <div>
        <div class="title"><?= $langJSON["name"] ?></div>
        <p>Frontend Developer</p>
        <?php printSocial(); ?>
    </div>
    <div>
        <div class="title">Kapcsolat</div>
        <a href="mailto:info@red-cat.hu"><i class="bi bi-envelope-fill"></i> Email</a>
        <a href=""><i class="bi bi-person-vcard-fill"></i> Digitális névjegykártya</a>
    </div>
    <div>
        <div class="title">Menü</div>
        <a href="#home">Főoldal</a>
        <a href="#work">Munkáim</a>
        <a href="#about">Rólam</a>
        <a href="#contact">Kapcsolat</a>
    </div>
</footer>

<script src="<?= $siteINFO -> mainPath ?>js/main.js"></script>
</body>
</html>