<!DOCTYPE html>
<html lang="<?= $siteLang ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $langJSON["name"] ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
</head>
<body>

<div id="sideSocial">
    <i class="bi bi-messenger"></i>

</div>
<nav id="sidenav">
    <a href="#home" class="logo">NN</a>
    <a class="workBtn" href="#work"><?= $langJSON["menu"]["work"] ?></a>
    <a class="aboutBtn" href="#about"><?= $langJSON["menu"]["about"] ?></a>
    <a class="contactBtn" href="#contact"><?= $langJSON["menu"]["contact"] ?></a>
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
        <h2><?= $langJSON["menu"]["work"] ?></h2>
        <div id="workSelect">
            <div class="btn active" onclick="filterSelect('all')">összes</div>
            <div class="btn" onclick="filterSelect('css')"><i class="devicon-sass-plain"></i> css</div>
            <div class="btn" onclick="filterSelect('ts')"><i class="devicon-typescript-plain"></i> typescript</div>
            <div class="btn" onclick="filterSelect('react')"><i class="devicon-react-plain"></i> react</div>
            <div class="btn" onclick="filterSelect('php')"><i class="devicon-php-plain"></i> php</div>
            <div class="btn" onclick="filterSelect('mysql')"><i class="devicon-mysql-plain"></i> mysql</div>
            <div class="btn" onclick="filterSelect('wp')"><i class="devicon-wordpress-plain"></i> wordpress</div>
        </div>
        <div class="gallery">
            <?php buildGallery($projectJSON);  ?>
        </div>
    </div>

    <div id="about" class="box">
        <h2><?= $langJSON["menu"]["about"] ?></h2>
        <img src="./img/profile.webp" alt="">
    </div>

    <div id="contact" class="box">
        <h2><?= $langJSON["menu"]["contact"] ?></h2>
        <div>
            <?php printSocial(); ?>
            <a href="https://id.red-cat.hu/nn" target="_blank">
                <div id="redcatID"><i class="bi bi-person-vcard-fill"></i> Digitális Névjegykártya</div>
            </a>
        </div>
        <div>
            <h5>Írj közvetlen az oldalról!</h5>
            <form id="sendMail">
                <input type="text" id="nameForm" name="name" placeholder="Név" required>
                <input type="email" id="emailForm" name="email" placeholder="Email" required>
                <textarea id="message" name="messageForm" placeholder="Az üzenet szövege" rows="4" required></textarea>
                <button type="submit">Küldés</button>
            </form>
        </div>
    </div>
</main>

<footer>
    <div>
        <h6><?= $langJSON["name"] ?></h6>
        <p>Frontend Developer</p>
        <?php printSocial(); ?>
    </div>
    <div>
        <h6>Kapcsolat</h6>
        <a href="mailto:info@red-cat.hu"><i class="bi bi-envelope-fill"></i> Email</a>
        <a href=""><i class="bi bi-person-vcard-fill"></i> Digitális névjegykártya</a>
    </div>
    <div>
        <h6>Menü</h6>
        <a href="#home">Főoldal</a>
        <a href="#work">Munkáim</a>
        <a href="#about">Rólam</a>
        <a href="#contact">Kapcsolat</a>
    </div>
</footer>

<script>
let siteData = {
    provider: "Németh Norbert",
    language: "<?= $siteLang; ?>",
    mainPath: "<?= $siteInfo->mainPath; ?>",
    redcatPath: "<?= $siteInfo->redcatPath; ?>",
    cookieConsent: {
      "necessary": ["cookie_consent_accepted", "cookie_consent_level"],
      "functionality": ["language"],
      "tracking": ["_ga"],
      "targeting": []
    }
};
</script>
<script src="<?= $siteInfo->redcatPath; ?>cookie/js/cookie.js?v=<?= time() ?>"></script>
<script src="js/main.js"></script>
</body>
</html>