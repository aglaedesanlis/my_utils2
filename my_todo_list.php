


<?php session_start(); ?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>My Todo List</title>
    <link rel="stylesheet" type="Text/css" href="style.css">
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>
    <?php
    function connect_to_database()
    {
        $servername = "localhost";
        $username = "aglae";
        $password = "rattrapage";
        $databasename = "todolist";
        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    $pdo = connect_to_database();
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'taches_a_faire') {
            include('taches_a_faire.php');
        } elseif ($_GET['page'] == 'taches_finies') {
            include('taches_finies.php');
        }
    }
    ?>
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>