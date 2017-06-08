<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tsundere Sharks</title>
    
    <link rel="stylesheet" href="styles/master-style.css">
    <link rel="stylesheet" href="styles/submit-style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts/master-script.js"></script>
</head>
<body>
    <div id="wrapper">
        
        <?php include "header.php"; ?>
        
        <main>
            <?php if(isset($_SESSION['userName']) && !empty($_SESSION['userName'])) { ?>
                <div class="logged-in">
                    <p><a href="php/logout.php?logout=true" class="btn">Logout</a> to register a new user, baka!</p>
                </div>
            <?php } else { ?>
                <form action="php/registerUser.php" method="POST">
                    <section id="form-wrapper">
                        <div class="form-half">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="text">
                            </div>
                            <div class="form-group">
                                <label for="userName">Username</label>
                                <input name="userName" type="text">
                            </div>
                            <div class="form-group">
                                <label for="profilePic">Profile Picture</label>
                                <input name="profilePic" type="text">
                            </div>
                        </div>
                        <div class="form-half">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password">
                            </div>
                            <div class="form-group">
                                <label for="repassword">Confirm Password</label>
                                <input name="repassword" type="password">
                            </div>
                            <div class="form-group">
                                <input class="submit" type="submit" value="S-submit">
                            </div>
                        </div>
                    </section>
                </form>
            <?php } ?>
        </main>
    </div>
    
    <?php require "footer.php" ?>

</body>
</html>