<?php
if (!isset($_SESSION['loggedin']))
    header('Location: /phpmotors');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>My Account</title>
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
            <h1><?php echo $_SESSION['clientData']['clientFirstname'] . " " . $_SESSION['clientData']['clientLastname'];?></h1>
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                $_SESSION['message'] = null;
            }
            ?>
            <?php
            $cd = $_SESSION['clientData'];
            $ul = '<ul>';
            $ul .= "<li>First name: $cd[clientFirstname]</li>";
            $ul .= "<li>Last name: $cd[clientLastname]</li>";
            $ul .= "<li>Email: $cd[clientEmail]</li>";
            $ul .= '</ul>';
            echo $ul;
            echo '<p><a class="p-link" href="/phpmotors/accounts/index.php?action=update-account">Update Account Information</a></p>';
            if ($cd['clientLevel'] > 1) {
                echo '<h2>Administrative Actions</h2>';
                echo '<p>Use the following link to administer inventory:</p>';
                echo '<p><a class="p-link" href="/phpmotors/vehicles">Vehicle Management</a></p>';
            }
            ?>
            <div class="reviews"></div>
        </main>
        <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/footer.php"?>
        </footer>
        <script src="../js/admin.js" type="module"></script>

    </div>
</body>
</html>