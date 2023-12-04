<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:index.php");
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>My Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8fb;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .row {
            display: block;
            width: 100%;
        }

        #header {
            background: #FAFAFA;
            height: 55px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 2;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            margin-top: 55px;
        }

        .img-cont {
            margin: 10px;
            width: 200px;
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .img-link {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
            color: #333;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }
        .img-link:hover {
            transform: scale(1.1); 
        }

        .img-link img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .overlay img {
            max-width: 80%;
            max-height: 80%;
            object-fit: contain;
            border-radius: 5px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
        }
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

<div class="gallery">
    <?php
        $imageNames = file('gallery.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach($imageNames as $image){
            $imageLink =  $image;
            echo '<div class="img-cont">';
                echo "<a class=\"img-link\" href=\"$imageLink\" onclick=\"showImage('$imageLink'); return false;\">";
                    echo "<img src=\"$imageLink\">";
                echo '</a>';
            echo '</div>';
        }
    ?>
</div>

<div class="overlay" id="overlay" onclick="hideImage();">
    <span class="close-btn" onclick="hideImage()">&times;</span>
    <img id="overlay-image" src="" alt="Overlay Image">
</div>

<script>
    function logout() {
        location.href = "index.php";
    }

    function showImage(imageLink) {
        var overlay = document.getElementById('overlay');
        var overlayImage = document.getElementById('overlay-image');
        overlayImage.src = imageLink;
        overlay.style.display = 'flex';
    }

    function hideImage() {
        var overlay = document.getElementById('overlay');
        overlay.style.display = 'none';
    }
</script>
</body>
</html>
