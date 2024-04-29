<a href="/phpmotors"><img src="/phpmotors/images/site/logo.png" alt="logo image"></a>
<div class="has-my-account">
    <?php
    if (isset($_SESSION['loggedin'])) {
        echo '<a href="/phpmotors/accounts/index.php?client-id=' . $_SESSION['clientData']['clientId'] . '"><p>Welcome, ' . $_SESSION['clientData']['clientFirstname'] . "</p></a>";
        echo '<a href="/phpmotors/accounts/index.php?action=submitLogout"><p>Log Out</p></a>';

    }
    if (!isset($_SESSION['loggedin']))
        echo '<a href="/phpmotors/accounts/index.php?action=login"><p>My Account</p></a>';
    ?>
</div>