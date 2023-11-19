<?php
    session_start();
    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h2>Login to your account</h2>

            <form id="login-form" name="login-form" method="post" action="login.php">
                <div class="input-group">
                    <div class="input-field">
                        <label for="un">Username</label>
                        <br>
                        <div class="input-cont">
                            <input id="un" type="text" name="username" placeholder="username" class="input-txt">
                        </div>
                        
                    </div>

                    <div class="input-field">
                        <label for="pw">Password</label>
                        <br>
                        <div class="input-cont">
                            <input id="pw" type="password" name="password" placeholder="password" class="input-txt">
                        </div>
                        <br>
                    </div>

                    <input type="button" value="LOG IN" onclick="login()" class="button" style="margin: 25px auto 0px;">

                    <div style="margin: 20px auto 0px;">
                         <a href="signup.html" style="color: #9dc1d3; cursor: pointer; text-align: center;">
                             <p>If you don't have an account, Sign up here!</p>
                         </a>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function login() {
            var form = document.getElementById('login-form');
            var un = document.getElementById('un').value.trim();
            var pw = document.getElementById('pw').value.trim();

            var error = '';

            if (un === '') {
                error += 'Username is required\n';
            }
            if (pw === '') {
                error += 'Password is required\n';
            }

            if (error != '') {
                alert(error);
            } else {
                form.submit();
            }
        }
    </script>
</body>

</html>


