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
        <header>
            <div class="side-frame"></div>
            <div class="picture-frame">
                <img src="img/hShark.jpg" alt="Big Tsundere">
            </div>
            <div class="side-frame"></div>
            <nav>
                <div class="link-item"><a href="index.php">Kyaaaa!</a></div>
                <div class="link-item active-link"><a href="#">S-submit!</a></div>
                <div class="link-item"><a href="#">Senpai!</a></div>
                <div class="link-item"><a href="#">Login/Sign up</a></div>
            </nav>
        </header>
        
        <main>
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
        </main>
    </div>
    
    <footer class="main-footer">
        © Noah Bro-Jørgensen | 2017
    </footer>
</body>
</html>