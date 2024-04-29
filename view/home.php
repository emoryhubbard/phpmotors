<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>PHP Motors Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/small.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/medium.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/large.css" media="screen">
</head>
<body>
    <div class="body-div">
        <header>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/header.php"?>
        </header>
        <nav>
            <?php print $navList; ?>
        </nav>
        <main>
            <section class="w-section">
                <h2>Welcome to PHP Motors!</h2>
                <div class="has-delorean">
                    <img class="delorean" src="images/vehicles/delorean.jpg" alt="image of Delorean car">
                    <div class="cover-delorean">
                        <p>DMC Delorean</p>
                        <p>3 Cup holders</p>
                        <p>Superman doors</p>
                        <p>Fuzzy dice!</p>
                        <a href='vehicles/index.php?action=detail-view&inv-id=20'><img class="own-today-medium" src=images/site/own_today.png alt="image of button that says own today"></a>
                    </div>
                </div>
                <img class="own-today" src=images/site/own_today.png alt="image of button that says own today">
            </section>
            <div class="has-ru">
                <section class="r-section">
                    <h2>DMC Delorean Reviews</h2>
                    <ul class="reviews">
                        <li>"So fast it's almost like traveling in time." (4/5)</li>
                        <li>"Coolest ride on the road." (4/5)</li>
                        <li>"I'm feeling Marty McFly!" (5/5)</li>
                        <li>"The most futuristic ride of our day." (5/5)</li>
                        <li>"80's livin and I love it!" (5/5)</li>
                    </ul>
                </section>
                <section class="u-section">
                    <h2>Delorean Upgrades</h2>
                    <div class="has-ucard">
                        <div class="ucard">
                            <div class="has-upgrade">
                                <div class="upgrade"></div>
                                <div class="has-cover-upgrade">
                                    <img class="cover-upgrade" src="images/upgrades/flux-cap.png" alt="image of a flux capacitor">
                                </div>
                            </div>
                            <a href="">Flux Capacitor</a>
                        </div>
                        <div class="ucard">
                            <div class="has-upgrade">
                                <div class="upgrade"></div>
                                <div class="has-cover-upgrade">
                                    <img class="cover-upgrade" src="images/upgrades/flame.jpg" alt="image of a flame decal">
                                </div>
                            </div>
                            <a href="">Flame Decals</a>
                        </div>
                        <div class="ucard">
                            <div class="has-upgrade">
                                <div class="upgrade"></div>
                                <div class="has-cover-upgrade">
                                    <img class="cover-upgrade" src="images/upgrades/bumper_sticker.jpg" alt="image of bumper sticker that says hello world">
                                </div>
                            </div>
                            <a href="">Bumper Stickers</a>
                        </div>
                        <div class="ucard">
                            <div class="has-upgrade">
                                <div class="upgrade"></div>
                                <div class="has-cover-upgrade">
                                    <img class="cover-upgrade" src="images/upgrades/hub-cap.jpg" alt="image of a hub cap">
                                </div>
                            </div>
                            <a href="">Hub Caps</a>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/footer.php"?>
        </footer>
    </div>
</body>
</html>