<?php
if ($_SESSION['clientData']['clientLevel'] < 2) {
    header('location: /phpmotors/');
    exit;
}
?><!DOCTYPE html>
<html lang="en-US">
<head>
    <title><?php
        if (isset($invInfo['invMake']) && isset($invInfo['invModel']))
            echo "Delete $invINfo[invMake] $invInfo[invModel]";
        elseif (isset($invMake) && isset($invModel))
            echo "Delete $invMake $invModel";
        ?> | PHP Motors</title>
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
            if (isset($message)) {
                echo $message;
            }
            ?>
            <h1><?php
                if (isset($invInfo['invMake']) && isset($invInfo['invModel']))
                    echo "Delete $invInfo[invMake] $invInfo[invModel]";
                elseif (isset($invMake) && isset($invModel))
                    echo "Delete $invMake $invModel";
                ?></h1>
            <p>Confirm deletion of the vehicle. Note: deletion is permanent and cannot be undone.</p>
            <form method="post" action="/phpmotors/vehicles/index.php">
                <fieldset>
                    <label>Make<span class="asterisk">*</span><input type="text" name="invMake" title="Make is limited to 30 characters" readonly placeholder="" <?php if(isset($invMake)){echo "value='$invMake'";} elseif(isset($invInfo['invMake'])) echo "value='$invInfo[invMake]'"; ?>><span>Make is limited to 30 characters</span></label>
                    <label>Model<span class="asterisk">*</span><input type="text" name="invModel" title="Model is limited to 30 characters" readonly placeholder="" <?php if(isset($invModel)){echo "value='$invModel'";} elseif(isset($invInfo['invModel'])) echo "value='$invInfo[invModel]'"; ?>><span>Model is limited to 30 characters</span></label>
                    <label>Description<span class="asterisk">*</span><input type="text" name="invDescription" title="Required field" readonly placeholder="" <?php if(isset($invDescription)){echo "value='$invDescription'";} elseif(isset($invInfo['invDescription'])) echo "value='$invInfo[invDescription]'"; ?>></label>
                    <input class="submit-button" type="submit" value="Delete Vehicle">
                    <input type="hidden" name="action" value="submit-delete-vehicle">
                    <input type="hidden" name="invId" value="<?php
                    if (isset($invInfo['invId']))
                        echo $invInfo['invId'];
                    elseif (isset($invId))
                        echo $invId;
                    ?>">
                </fieldset>
            </form>
        </main>
        <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/footer.php"?>
        </footer>
    </div>
</body>
</html>