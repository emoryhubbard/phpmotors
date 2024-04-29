<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Log into my Account</title>
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
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
            }
            ?>
            <!--administrative account that you created earlier -
            username: admin@cse340.net, password: Sup3rU$er-->
            <form action="/phpmotors/accounts/index.php" method="post">
                <fieldset>
                    <label>Email<span class="asterisk">*</span><input type="email" name="clientEmail" required placeholder="" <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?>></label>
                    <label title="Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character">Password<span class="asterisk">*</span><input class="password-input" type="password" name="clientPassword" title="Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder=""><span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span></label>
                    <input class="submit-button" type="submit" value="Sign in">
                    <label class="no-account">No account? <a href="/phpmotors/accounts/index.php?action=register">Sign up</a></label>
                    <input type="hidden" name="action" value="submitLogin">
                </fieldset>
            </form>
        </main>
        <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/footer.php"?>
        </footer>
    </div>
</body>
</html>


