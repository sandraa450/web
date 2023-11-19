<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
</head>
<body>
<div class="span" id="header">
            <div id="menu">
                <span>Menu</span>
                <div class="dropdown-options">
                    <ul>
                        <a href="main.php"> 
                            <li>Main</li>
                        </a>
                        <a href="CV.php">
                            <li>CV</li>   
                        </a>
                        <a href="gallery.php">
                            <li>Gallery</li>   
                        </a>
                        <a href="contactus.php">
                            <li>ContactUs</li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="welcome" style="float: right;">
                <div class="text" style="display: inline-block;"> 
                    <?php
                        echo '<p>';
                        echo "Welcome ";
                        echo $_SESSION["username"];
                        echo '</p>';
                    ?>
                </div>
                <button class="logout-button" style="display: inline-block;" id="button" onclick="logout()">Logout</button>
            </div>

        </div>
        <style>
            #header {
    background: #3498db;
    height: 55px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

#menu {
    cursor: pointer;
    color: #fff;
    font-size: large;
}

.dropdown-options {
    display: none;
    position: absolute;
    background-color: #3498db;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    padding: 10px;
    z-index: 1;
}

#menu:hover .dropdown-options {
    display: block;
}

#menu ul {
    list-style-type: none;
    padding: 0;
}

#menu li {
    color: #fff;
    padding: 8px 0;
}

.welcome {
    display: flex;
    align-items: center;
}

.text {
    margin-right: 10px;
    color: #fff;
}

.logout-button {
    background-color: transparent;
    color: #fff;
    border: 1px solid #fff;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
}



        </style>
<div class="container">
    <h1>Contact Us</h1>
    <p>If you have any questions or need assistance, please don't hesitate to reach out to us.</p>
    <p>We can also connect on social media:</p>
    <ul class="social-media">
        <li>Facebook: Sandra Abdallah</li>
        <li>Instagram: sandra_ab2</li>
        <li>Twitter: Sandra Abdallah</li>
    </ul>
    <p>Email: <a href="mailto:your.email@example.com">sandra.abdallah02@lau.edu</a></p>
</div>
</body>
</html>

<script>
    function logout() {
        location.href = "index.php";
    }
</script>