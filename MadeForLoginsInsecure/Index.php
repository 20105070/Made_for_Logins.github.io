<html>

<head>
    <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Made for Logins</title>
    <link rel="stylesheet" href="Style.css" />
</head>

<body>

    <br /><br /><br /><br /><br /><br /><br /><br />

    <!--Index PHP-->
    <?php
        error_reporting(0);
        if ($_GET["username"] == "admin" && $_GET["password"] == "admin") {
            header("Location:http://localhost:8000/MakeLogins.php");
        }
    ?>

    <!--Index HTML-->
    <div class="flex">
        <h1><i>Made for Logins</i></h1>
    </div>
    <div class="flex">
        <form action="Index.php" method="get">
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit">LOGIN</button>
        </form>
    </div>
            
</body>

</html>

            