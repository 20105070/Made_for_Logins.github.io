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
        <div class="navOn">
            <a href="/Faqs.php">FAQs</a>
        </div>
        <div class="navOff">
            <a href="/LoadLogins.php">Load Logins</a>
        </div>
    </div>

    <br /><br /><br /><br /><br /><br /><br /><br />

    <!--FAQs HTML-->
    <div class="flex">
        <h1>Read answers to the FAQs of <i>Made for Logins</i></h1>
    </div>
    <div class="faqs">
        <p>How do I log into <i>Made for Logins</i>?</p>
        <p>Input admin into username, input admin into password, and click LOGIN.</p>
        <br />
        <p>How do I create a login on <i>Made for Logins</i>?</p>
        <p>Click Make Logins, input the fields, and click MAKE.</p>
        <br />
        <p>How do I read FAQs on <i>Made for Logins</i>?</p>
        <p>Click FAQs.</p>
        <br />
        <p>How do I load logins on <i>Made for Logins</i>?</p>
        <p>Click Load Logins.</p>
        <br />
        <p>How do I read a username and password of a website on <i>Made for Logins</i>?</p>
        <p>Click Load Logins and click the name of a website.</p>
        <br />
        <p>Is this the secure or insecure version of <i>Made for Logins</i>?</p>
        <p>Insecure.</p>
        <br />
        <p>How is this version of <i>Made for Logins</i> insecure against SQL Injection vulnerabilities?</p>
        <p>FILTER methods have been removed, website has replaced id as the SQL query parameter, and LIKE has replaced WHERE in the SQL query.</p>
        <br />
        <p>How is this version of <i>Made for Logins</i> insecure against XSS vulnerabilities?</p>
        <p>htmlspecialchars() methods have been removed.</p>
        <br />
        <p>How is this version of <i>Made for Logins</i> insecure against Sensitive Data Exposure vulnerabilities?</p>
        <p>GET methods have replaced POST methods.</p>
    </div>

</body>

</html>
