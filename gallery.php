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
        margin: 10px; /* Adjusted margin to provide more space around each image */
        width: 200px;
        height: 200px;
        overflow: hidden;
    }

    .img-link {
        display: block;
        width: 100%;
        height: 100%;
        text-decoration: none;
        color: #333;
        overflow: hidden;
    }

    .img-link img {
        width: 100%;
        height: 100%;
        object-fit: cover;
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

    <div class="gallery">
        <?php
            $imageNames = file('gallery.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach($imageNames as $image){
                $imageLink =  $image;
                echo '<div class="img-cont">';
                    echo "<a class=\"img-link\" href=\"$imageLink\" target=\"_self\" >";
                        echo "<img src=\"$imageLink\">";
                    echo '</a>';
                echo '</div>';
            }
        ?>
    </div>

    <script>
        function logout() {
            location.href = "index.php";
        }

        function toggleDropdown() {
            var dropdownContent = document.querySelector('.dropdown-content');
            dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.icon')) {
                var dropdowns = document.getElementsByClassName('dropdown-content');
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === 'block') {
                        openDropdown.style.display = 'none';
                    }
                }
            }
        }
    </script>
</body>
</html>
