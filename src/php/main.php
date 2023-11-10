<!DOCTYPE html>
<html lang="<?= $siteINFO -> langSite ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $langJSON["name"] . ' (' . $siteINFO -> langSite . ')' ?></title>
    <link rel="stylesheet" href="<?= $siteINFO -> mainPath ?>css/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <meta name="theme-color" content="#ff0000">
</head>
<body>

<div id="preLoader">
    <div class="inner">
        <div class="front">NN</div>
        <div class="back">Németh Norbert</div>
    </div>
    <div class="loading">loading</div>
</div>

<main id="main">
    <div id="home" class="box">
        <div id="parallax">
            <img id="parallax1" src="<?= $siteINFO -> mainPath ?>img/parallax/01.webp" alt="">
        </div>
        <div class="title">
            <h1><?= $langJSON["name"] ?></h1>
            <p>Frontend Developer</p>
            <?php printContact(); ?>
        </div>
    </div>

    <nav id="navDesktop">
        <div class="logo">NN</div>
        <div class="menu">
            <div>Főoldal</div>
            <div>Munka</div>
            <div>Rólam</div>
            <div>Kapcsolat</div>
        </div>
    </nav>

    <div id="work" class="box">
        <h2><?= $langJSON["nav"]["work"] ?></h2>
        <div id="filterMenu">
            <?= filterMenu(); ?>
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
        <div>
            <?php printContact(); ?>
        </div>

        <b>Írj közvetlen az oldalról</b>
        <form action="feldolgozas.php" method="post">
            <input type="text" id="nev" name="nev" placeholder="Név" required><br>
            <input type="email" id="email" name="email"  placeholder="Email" required><br>
            <textarea id="szoveg" name="szoveg" rows="4" cols="50"  placeholder="Szöveg" required></textarea><br>

            <input type="submit" value="Küldés">
        </form>
    </div>
</main>

<nav id="navMobile">
    <div class="mobMenu">
        <a class="mobNavItem mobNavActive" href="#home">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                </svg>
            </div>
        </a>
        <a class="mobNavItem" href="#work">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path d="M7 0a2 2 0 0 0-2 2H1.5A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14H2a.5.5 0 0 0 1 0h10a.5.5 0 0 0 1 0h.5a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2H11a2 2 0 0 0-2-2H7ZM6 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1H6ZM3 13V3h1v10H3Zm9 0V3h1v10h-1Z"/>
                </svg>
            </div>
        </a>
        <a class="mobNavItem" href="#about">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
            </div>
        </a>
        <a class="mobNavItem" href="#contact">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
            </div>
        </a>

        <div class="mobNavBord"></div>
    </div>
</nav>

<div class="svg-container">
    <svg viewBox="0 0 202.9 45.5" >
      <clipPath id="menu" clipPathUnits="objectBoundingBox" transform="scale(0.0049285362247413 0.021978021978022)">
        <path  d="M6.7,45.5c5.7,0.1,14.1-0.4,23.3-4c5.7-2.3,9.9-5,18.1-10.5c10.7-7.1,11.8-9.2,20.6-14.3c5-2.9,9.2-5.2,15.2-7
          c7.1-2.1,13.3-2.3,17.6-2.1c4.2-0.2,10.5,0.1,17.6,2.1c6.1,1.8,10.2,4.1,15.2,7c8.8,5,9.9,7.1,20.6,14.3c8.3,5.5,12.4,8.2,18.1,10.5
          c9.2,3.6,17.6,4.2,23.3,4H6.7z"/>
      </clipPath>
    </svg>
</div>

<footer>
    <div>
        <div class="title"><?= $langJSON["name"] ?></div>
        <p>Frontend Developer</p>
        <?php printContact(); ?>
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

<script src="<?= $siteINFO -> mainPath ?>js/main.js?v=<?= time() ?>"></script>
</body>
</html>