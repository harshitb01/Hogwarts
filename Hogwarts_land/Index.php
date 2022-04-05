<?php
include('login.php');
if (isset($_SESSION['login_user'])) {
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Generics</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="Styles.css" />
        <link rel="stylesheet" href="styles-foot.css" />
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="form">
                <form class="signUp" action="register.php" onSubmit="get" method="post">
                    <h1 class="signUpTitle">Welcome</h1>
                    <div class="btn">
                        <button class="signUpBtn">SIGN UP</button>
                        <button class="loginBtn">LOG IN</button>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Name</h5>
                            <input
                                type="text"
                                name="username"
                                class="input"
                                id="name"
                                required
                                autocomplete="off"
                            />
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Email Address</h5>
                            <input
                                type="email"
                                name="email"
                                class="input"
                                id="userName"
                                required
                                autocomplete="off"
                            />
                        </div>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Phone Number</h5>
                            <input
                                type="text"
                                name="phone"
                                class="input"
                                id="contactNo"
                                required
                                autocomplete="off"
                            />
                        </div>
                    </div>
                    <div class="input-div one">
                        <table>
                            <tr>
                                <div class="signUpGender">
                                    <h3>Gender:</h3>
                                </div>
                            </tr>
                            <td>
                                <input class="radioButton" type="radio" name="gender" value="m" required />
                                <label class="radioGender">Male</label>
                                <input class="radioButton" type="radio" name="gender" value="f" required />
                                <label class="radioGender">Female</label>
                            </td>
                        </table>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input
                                type="password"
                                class="input"
                                name="password1"
                                id="password"
                                pattern="(?=.*[a-z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                required
                                autocomplete="off"
                            />
                        </div>
                    </div>
                    <div class="checkBox">
                        <input type="checkbox" name="checkbox" id="checkbox" required />
                        <span class="text">I agree with term & conditions</span>
                    </div>
                    <input type="submit" name="submit" class="button" value="SignUp" />
                </form>
                <form class="login" action="" method="post">
                    <h1 class="logInTitle">Welcome</h1>
                    <div class="btn">
                        <button class="signUpBtn">SIGN UP</button>
                        <button class="loginBtn">LOG IN</button>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Username</h5>
                            <input
                                type="text"
                                class="input"
                                name="userid"
                                id="username"
                                required
                                autocomplete="off"
                            />
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input
                                type="password"
                                class="input"
                                name="pswrd"
                                id="password"
                                required
                                autocomplete="off"
                            />
                        </div>
                    </div>
                    <div class="checkBox">
                        <input type="checkbox" name="checkbox" id="checkbox" required />
                        <span class="text">Keep me signed in on this device</span>
                    </div>
                    <input type="submit" name="submit" class="button" value="Login" />
                    <span><?php echo $error; ?></span>
                </form>
            </div>
        </div>
    </body>
    <script src="jQuery.js"></script>
    <footer class="main-footer">
        <div class="container main-footer-container">
            <h3 class="band-name">The Gryffindor's Hub</h3>
            <div class="icon facebook">
                <div class="tooltip">Facebook</div>
                <span
                    ><a href="https://www.facebook.com/wizardingworld/"><i class="fab fa-facebook-f"></i></a
                ></span>
            </div>

            <div class="icon twitter">
                <div class="tooltip">Twitter</div>
                <span
                    ><a
                        href="https://twitter.com/wizardingworld?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                        ><i class="fab fa-twitter"></i></a
                ></span>
            </div>

            <div class="icon instagram">
                <div class="tooltip">Instagram</div>
                <span
                    ><a href="https://www.instagram.com/wizardingworld/?hl=en"><i class="fab fa-instagram"></i></a
                ></span>
            </div>

            <div class="icon youtube">
                <div class="tooltip">YouTube</div>
                <span
                    ><a href="https://www.youtube.com/c/WizardingWorld/videos"><i class="fab fa-youtube"></i></a
                ></span>
            </div>
        </div>
    </footer>
</html>
