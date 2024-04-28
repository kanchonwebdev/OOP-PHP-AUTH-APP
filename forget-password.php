<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KanchonWebDev - Password reset page</title>
    <meta name="description" content="" />
    <link rel="alternate" href="" hreflang="en" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <!-- ./Open Graph / Facebook -->

    <!-- CSS Files Section -->
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <div class="overlay-text">
        <div class="text-block">
            <div class="text">
                <span>W</span>
                <span>e</span>
                <span>l</span>
                <span>c</span>
                <span>o</span>
                <span>m</span>
                <span>e</span>
            </div>
        </div>
    </div>

    <div class="login-container">
        <div class="left-col">
            <div class="title-block">
                <h1 class="title">KanchonWebDev</h1>
                <span class="line"></span>
            </div>
            <p class="text">
                KanchonWebDev is a newly start up company. Who ready to contribute develop clients business.
                We would like to invite you visit our official website and schedule a virtual meeting.
            </p>
        </div>
        <div class="right-col">
            <div class="title-block">
                <h2 class="title">Password reset page</h2>
            </div>

            <form action="#" method="post" class="login-form" id="loginForm">
                <div id="msg"></div>
                <div class="top-field">
                    <div class="input-block">
                        <input type="email" name="email" id="email">
                        <span class="placeholder-text">OTP code</span>
                    </div>
                    <div class="input-block">
                        <input type="password" name="pass" id="pass">
                        <span class="placeholder-text">Your new password</span>
                    </div>
                    <div class="input-block">
                        <input type="submit" value="Reset Password" class="btn">
                    </div>
                    <div class="input-block">
                        <div class="link-block">
                            <a href="sign-up.html" class="link">Sign up now</a>
                            <a href="forget-password.html" class="link">Forget password?</a>
                        </div>
                    </div>
                </div>
                <div class="middle-field">
                    <div class="line line-one"></div>
                    <div class="text">OR</div>
                    <div class="line line-two"></div>
                </div>
                <div class="bottom-field">
                    <div class="btn-block">
                        <a href="" class="btn">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                        <a href="" class="btn">
                            <i class="fa-brands fa-square-twitter"></i>
                        </a>
                        <a href="" class="btn">
                            <i class="fa-brands fa-square-google-plus"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://kit.fontawesome.com/5356aed19a.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>

    <!-- placeholder text animation -->
    <script>
        $(document).ready(function() {
            $(".input-block input").on("keyup", function() {
                var valLength = $(this).val();
                if (valLength.length > 0) {
                    $(this).addClass("active");
                } else {
                    $(this).removeClass("active");
                }
            });
        });
    </script>

    <!-- ajax code with validation -->
    <script>
        $(document).ready(function() {
            var emailErr = true;
            var passErr = true;

            var email, pass;

            $("#email").on("keyup", function() {
                email = $(this).val();
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                if (!regex.test(email)) {
                    $('#msg').html("<b>Error:</b> Email must be valid");
                    emailErr = true;
                } else {
                    $('#msg').text("");
                    emailErr = false;
                }
            });

            $("#pass").on("keyup", function() {
                pass = $(this).val();

                if (pass.length > 8 || pass.length < 3) {
                    $('#msg').html("<b>Error:</b> Password minimum 3 & maximum 8 character require");
                    passErr = true;
                } else {
                    $('#msg').text("");
                    passErr = false;
                }
            });

            $("form").on("submit", function() {
                event.preventDefault();

                if (emailErr == false && passErr == false) {
                    /* $.ajax({
                        url: "loginCode.php",
                        method: "POST",
                        data: $("#loginForm").serialize(),
                        success: function (result) {
                            if (result === "done") {
                                $("#loginForm").text("Please wait redirect to HOMEPAGE");
                                location.reload();
                            } else {
                                $("#emailErr").text(result);
                            }
                        }
                    }); */
                    alert("ok");
                } else {
                    alert("Please fill up all field carefully");
                }
            });
        });
    </script>
</body>

</html>