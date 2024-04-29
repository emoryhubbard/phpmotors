<!DOCTYPE html>
<html lang="en-US">
<head>
    <title><?php echo "$invInfo[invMake] $invInfo[invModel]"; ?> | PHP Motors</title>
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
        <main class="vehicle-detail-main">
            <?php
            if(isset($detailDisplay))
                echo $detailDisplay;
            ?>
            <?php
            if(isset($thumbnailDisplay))
                echo $thumbnailDisplay;
            ?>
            </main>
            <div class='has-reviews'>
            <h2 class='reviews-h2'>Customer Reviews</h2>
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                $_SESSION['message'] = null;
            }
            ?>
            <?php
            if (isset($_SESSION['loggedin']))
                require_once $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/new-review-form.php";
            if (!isset($_SESSION['loggedin']))
                echo '<p>Add a review by <a class="p-link" href="/phpmotors/accounts/index.php?action=login">logging in</a></p>';
            ?>
            <div class="reviews">

            </div>
            </div>
        <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/footer.php"?>
        </footer>
        <script src="../js/vehicle-detail.js" type="module"></script>
    </div>
</body>
</html>


