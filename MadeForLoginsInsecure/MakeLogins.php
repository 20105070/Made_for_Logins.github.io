<html>

<head>
    <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Made for Logins</title>
    <link rel="stylesheet" href="Style.css" />
</head>

<body>

    <!--Navigation Bar-->
    <div class="flex">
        <div class="navOn">
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

    <!--MakeLogins HTML-->
    <div class="flex">
        <h1>Input fields and click MAKE to create login</h1>
    </div>
    <div class="flex">

    <!--MakeLogins PHP-->
    <?php
        if (!isset($_GET['submit'])) {
    ?>

    <!--MakeLogins HTML 2.0-->
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
        <label for="website">Website</label>
        <input type="text" name="website" required>
        <label for="username">Username</label>
        <input type="text" name="username" required>
        <label for="password">Password</label>
        <input type="text" name="password" required>
        <input type="submit" name="submit" value="MAKE">
    </form>

    <!--MakeLogins PHP 2.0-->
    <?php
    } 
    else {
        try {
            $db = new PDO('sqlite:MadeForLogins.db');
            $sql = "INSERT INTO Logins (website, username, password) VALUES
            (:website, :username, :password)";
            $stmt = $db->prepare($sql);
            $website = $_GET['website'];
            $stmt->bindValue(':website', $website, PDO::PARAM_STR);
            $username = $_GET['username'];
            $stmt->bindValue(':username', $username, PDO::PARAM_STR);
            $password = $_GET['password'];
            $stmt->bindValue(':password', $password, PDO::PARAM_STR);
            $success = $stmt->execute();
            if($success){
                echo "Login made!";
            } 
            else {
                echo "Login not made!";
            }
            $db = null;
        } 
        catch (PDOException $e) {
            print "Error found: " . $e->getMessage() . "<br />";
            die();
        }
    }
    ?>

    <!--MakeLogins HTML 3.0-->
    </div>

</body>

</html>