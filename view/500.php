<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Server Error</title>
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
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/navigation.php"?>
        </nav>
        <main>
            <h2>Sever Error Test</h2>
            <p>Our apologies--this server appears to be experiencing technical difficulties. Error code 500.</p>
        </main>
        <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/footer.php"?>
        </footer>
    </div>
</body>
</html>


