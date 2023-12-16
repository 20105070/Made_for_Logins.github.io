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
        <div class="navOff">
            <a href="/LoadLogins.php">Load Logins</a>
        </div>
    </div>

    <br /><br /><br /><br /><br /><br /><br /><br />

    <!--Login PHP-->
    <?php
    $db = new PDO('sqlite:MadeForLogins.db');
    try {
        $sql = "SELECT * FROM Logins WHERE id=:id";
        $statement = $db->prepare($sql);
        $id = filter_input(INPUT_GET, 'id');
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $r = $statement->fetch();
        $db = null;
        if(!$r) {
            echo "Login not found!";
            exit();
        }
    }
    catch (PDOException $e) {
        print "Error found: " . $e->getMessage() . "<br />";
        die();
    }
    ?>

    <!--Login HTML-->
    <div class="flex">
        <h1>
            <?php echo "Read the username and password of " . htmlspecialchars($r['website']) ?>
        </h1>
    </div>
    <div class="flex">
        <p>username: 
            <?php echo htmlspecialchars($r['username']); ?>
        </p>
    </div>
    <div class="flex">
        <p>password: 
            <?php echo htmlspecialchars($r['password']); ?>
        </p>
    </div>

</body>

</html>