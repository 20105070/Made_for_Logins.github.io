<html>

<head>
    <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Made for Logins</title>
    <link rel="stylesheet" href="Style.css" />
</head>

<body>

    <!--Navigation Bar-->
    <div class="flex">
        <div class="navOff">
            <a href="/MakeLogins.php">Make Logins</a>
        </div>
        <div class="navOff">
            <a href="/Faqs.php">FAQs</a>
        </div>
        <div class="navOn">
            <a href="/LoadLogins.php">Load Logins</a>
        </div>
    </div>

    <br /><br /><br /><br /><br /><br /><br /><br />

    <!--LoadLogins PHP-->
    <?php
        $pdo = new PDO('sqlite:MadeForLogins.db');
        $statement = $pdo->query("SELECT * FROM Logins");
        $logins = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo "<div class='flex'><h1>Click website to read username and password</h1></div>";
        echo "<div class='flex'><ul>";
        foreach($logins as $row => $login) {
            echo "<li><a href=\"Login.php?website=" . $login['website'] . "\">" . $login['website'] . "</a></li>" ;
        }
        echo "</ul></div>";
    ?>

</body>

</html>
