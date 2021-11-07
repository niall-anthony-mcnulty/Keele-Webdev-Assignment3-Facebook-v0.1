<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FriendZone Edit Bio</title>
    <meta name="description" content="edit-bio-page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bellota&family=Bellota+Text&display=swap" rel="stylesheet", type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
</head>
<body>
    <main>
        <div class='center'>
            <div class='row justify-content-center align-text center'>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h1 class='edit-bio-header'> Edit your bio! </h1>
                    <form action='profile.php' method='POST' id='add-bio-form'>
                        <label id="name-label" for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your full name"/>
                    
                        <label id="email-label" for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="default@gmail.com"/>

                        <label id="position-label" for="position">Introduction</label><br>
                        <textarea id='myThoughts' onkeyup="$(this).height(5);$(this).height($(this).prop('scrollHeight'))" form= 'post-article' placeholder="What's on your mind..." maxlength='100'></textarea>
                    </form> 
                    <form class='submit-button' action='profile.php'>
                        <input type='submit' value='Submit' form='add-bio-form'>
                    </form>
                </div>
            </div>
        </div>
    </main> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
</body>
</html>