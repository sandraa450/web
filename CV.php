
<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:index.php");
    }
?>



<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Main Page</title>
        <link rel="stylesheet"  href="main.css" >
        <link rel="stylesheet"  href="styleCV.css" >
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
    color: #fff;
}

.text {
    margin-right: 10px;
    color: black;
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
    <head>
        <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
        <title> My CV </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel = "stylesheet" type = "text/css" href = "styleCV.css"
    </head>
    <body>
        <div class = "container">
            <div class ="left_Side">
                <div class = "profileText">
                    <div class = "imgBx">
                        <img src = "CVimage.jpg">
                    </div>
                    <h2> Sandra Abdallah<br><span>Web Developer</span></h2>
                </div>

            <div class = "contactInfo">
                <h3 class="title">Contact Info </h3>
                <ul>
                    <li>
                        <span class = "icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                        <span class = "text">www.linkedin.com</span>
                    </li>
                    <li>
                        <span class = "icon"><i class="fa fa-map-pin" aria-hidden="true"></i></span>
                        <span class = "text">Beirut, Lebanon</span>
                    </li>
                    <li>
                        <span class = "icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class = "text">+961 81 039 787</span>
                    </li>
                </ul>
            </div>

            <div class = "contactInfo education">
                <h3 class="title">Education </h3>
                <ul>
                    <li>
                        <h5> 2005-2020</h5>
                        <span class = "icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                        <span class = "text">Al Kawthar High School</span>
                    </li>
                    
                    <li>
                        <h5>2021-present</h5>
                        <span class = "icon"><i class="fa fa-university" aria-hidden="true"></i></span>
                        <span class = "text">Lebanese American University</span>
                    </li>
                </ul>
            </div>
            <div class = "contactInfo language">
                <h3 class="title">Languages</h3>
                <ul>
                    <li>
                        <span class = "text">Arabic</span>
                        <span class = "percent">
                            <div style="width:100%;"></div>
                        </span>
                         
                    </li>
                    <li>
                        <span class = "text">English</span>
                        <span class = "percent">
                            <div style="width:90%;"></div>
                        </span>
                         
                    </li>
                    <li>
                        <span class = "text">French</span>
                        <span class = "percent">
                            <div style="width:50%;"></div>
                        </span>
                         
                    </li>
                    
                    <li>
                        <span class = "text">Turkish</span>
                        <span class = "percent">
                            <div style="width:40%;"></div>
                        </span>
                        
                    </li>

                </ul>
            </div>

            </div>

            <div class ="right_Side">
                <div class = "about">
                    <h2 class = "title2"> Profile </h2>
                    <p>I'm a dedicated third-year computer science student, passionate about problem-solving and technology. With a strong foundation in programming and a curiosity for emerging trends, I'm eager to apply my skills to real-world challenges. I thrive on learning, collaboration, and the exciting possibilities that lie ahead.</p>
                </div>
                <div class = "about">
                    <h2 class = "title2">Experience</h2>
                    <div class = "box">
                        <div class = "year_company">
                            <h5>2020-2021</h5>
                            <h5>Finished many online computer science courses</h5>
                            <p>Courses related to AI and web programming</p>
                        </div>
                        <div class = "year_company">
                            <h5>2020-present</h5>
                            <h5>Volunteer at Tech Events held at LAU and my school</h5>
                            <p>been in touch with a huge number of people who have excelled in the field and learned from the experience </p>
                        </div>
                        <div class = "year_company">
                            <h5>2021-2021</h5>
                            <h5>Internship at Beirut Digital District</h5>
                            <p>created and designed several websites including a time watch</p>
                        </div>
                    </div>
                </div>

                <div class = "about skills">
                    <h2 class = "title2">Professional Skills</h2>
                    <div class = "box">
                        <h4>Html</h4>
                        <div class = "percent">
                            <div style = "width:95%;"></div>
                        </div>
                    </div>
                    <div class = "box">
                        <h4>CSS</h4>
                        <div class = "percent">
                            <div style = "width:95%;"></div>
                        </div>
                    </div>
                    <div class = "box">
                        <h4>JavaScript</h4>
                        <div class = "percent">
                            <div style = "width:90%;"></div>
                        </div>
                    </div>
                    <div class = "box">
                        <h4>Photoshop</h4>
                        <div class = "percent">
                            <div style = "width:80%;"></div>
                        </div>
                    </div>
                    <div class = "box">
                        <h4>Design</h4>
                        <div class = "percent">
                            <div style = "width:70%;"></div>
                        </div>
                    </div>
                </div>

                <div class = "about interest">
                    <h2 class = "title2">Hobbies</h2>
                    <ul>
                        <li><i class="fa fa-file-code-o" aria-hidden="true"></i> Coding</li>
                        <li><i class="fa fa-book" aria-hidden="true"></i> Reading</li>
                        <li><i class="fa fa-cutlery" aria-hidden="true"></i> Cooking</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    function logout() {
        location.href = "index.php";
    }
</script>
