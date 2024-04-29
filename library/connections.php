<?php
    function getPDO() {
    $server = 'localhost';
    $dbname = 'phpmotors';
    $username = 'iClient';
    $password = '7v/9xszkWt/4Sc*x';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

    try {
        $pdo = new PDO($dsn, $username, $password, $options);
        /*if (is_object($pdo)) {
            print 'Succeeded in connecting.';
        }*/
        return $pdo;
    } catch (PDOException $e) {
        print "Failed to connect. Error: " . $e->getMessage();
        header('Location: /phpmotors/view/500.php');
        exit;
    }
}
function getPDOFor($dbname) {
    $server = 'localhost';
    $username = 'iClient';
    $password = '7v/9xszkWt/4Sc*x';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

    try {
        $pdo = new PDO($dsn, $username, $password, $options);
        /*if (is_object($pdo)) {
            print 'Succeeded in connecting.';
        }*/
        return $pdo;
    } catch (PDOException $e) {
        print "Failed to connect. Error: " . $e->getMessage();
        header('Location: /phpmotors/view/500.php');
        exit;
    }
}
function query($sql) {
    $pdo = getPDO();
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();

    return $result;
}
function querydb($dbname, $sql) {
    $pdo = getPDOFor($dbname);
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();

    return $result;
}
function rowsChanged($sql) {
    $pdo = getPDO();
    $statement = $pdo->prepare($sql);
    $statement->execute();

    $rowsChanged = $statement->rowCount();
    $statement->closeCursor();
    return $rowsChanged;
}
//getPHPMotorsPDO();
?>