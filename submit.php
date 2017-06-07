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
                <form action="php/submitArticle.php" method="POST">
                    <section id="form-wrapper">
                        <div class="form-half">
                            <div class="form-group">
                                <label for="header">Title</label>
                                <input name="header" type="text">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-half">
                            <div class="form-group">
                                <label for="imgSrc">Image Source</label>
                                <input name="imgSrc" type="text">
                            </div>
                            <div class="form-group">
                                <label for="imgAlt">Image Alt Text</label>
                                <input name="imgAlt" type="text">
                            </div>
                            <div class="form-group">
                                <input class="submit" type="submit" value="S-submit">
                            </div>
                        </div>
                    </section>
                </form>
            <?php } else { ?>
                <div id="reprimand">
                    <p>L-login, baka!</p>
                </div>
            <?php } ?>
        </main>
    </div>
    
    <?php require "footer.php" ?>

</body>
</html>