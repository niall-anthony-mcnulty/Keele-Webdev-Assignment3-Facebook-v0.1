<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FriendZone Registration Page</title>
    <meta name="description" content="registration-page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bellota&family=Bellota+Text&display=swap" rel="stylesheet", type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">  
    <script src='js/main.js' async></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class='wrapper'>
        <div class='content-inside'>
            <nav>
                <div class="container nav nav-registration">
                    <div class='row justify-content-center no-gutters title-row title-registration-row w-100'>
                        <div class ='col-xs-12 col-sm-10 col-md-8 col-lg-8 title-col title-registration-col'>
                            <a href='index.php' class='login-link registration-login-link'><img src='img/logo.png' alt='Friendzone logo' class='logo-pic' id='registration-pic'><span class='registration-title'>Friend<u>Z</u>one</span></a>
                        </div>
                    </div>
                </div>
            </nav>
            <main class='container registration'>
                <div class='row justify-content-center no-gutters registration-row'>
                    <div class ='col-xs-11 col-sm-11 col-md-11 col-lg-11 registration-col'>
                        <form id='login-form registration-form' method="post" action="index.php" autocomplete="off" required="true">
                            <h1 class='signup-text'> Sign Up </h1>
                            <div class='name-wrapper'>
                                <div class="registration-group first-name">
                                    <input class="signup-form" type="text" name="fname" placeholder="First name" required="true">
                                </div>
                                <div class="registration-group last-name">
                                    <input class="signup-form" type="text" name="lname" placeholder="Last name" required='true'>
                                </div>
                            </div>
                            <div class="registration-group">
                                <input class="signup-form" type='email' pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$" name="Email" placeholder="Email address" autocomplete="Email-Address" required='true'>
                            </div>

                            <div class="registration-group">
                                <input class="singup-form registration-password" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title='A minimum of eight characters, at least one uppercase letter, one lowercase letter, one number and one special character is required:' name="new-password" placeholder= 'Set password' autocomplete= "new-password" required='true'>
                            </div>
                            <div class='reader-poster-wrapper'>
                                <div class="registration-group poster-button">
                                    <span class='text-poster-button'>Poster</span>
                                    <input class='signup-form signup-form-poster' type="radio" name="usertype" value="Poster" required='true'>
                                </div>

                                <div class="registration-group reader-button">
                                    <div class="text-wrapper-radio">
                                        <span class='text-reader-button'>Reader</span>
                                        <input class='signup-form signup-form-reader' type="radio" name="usertype" value="Reader" required='true'>
                                    </div>
                                </div>
                                <div class='popup-explanation'></div>
                            </div class='reader-poster-wrapper'>
                            <div class='line'>
                                <hr class='horizontal-line' >
                            </div>
                            <div class="form-register registration-group signup" id='registration-button' >
                                <input class='register-button singup' type="submit" name="signup" value="Signup">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </main>
        </div>
    </div>
    <footer class="container footer">
        <div class='row justify-content-center no-gutters footer-row w-100'>
            <div class ='col-xs-8 col-sm-8 col-md-8 col-lg-8 footer-col'>
                <p class="registration-footer">FriendZ<u>o</u>ne - Made by Niall McNulty</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
</body>                                          
</html>

                
                 