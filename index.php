<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tsundere Sharks</title>
    
    <link rel="stylesheet" href="styles/master-style.css">
    <link rel="stylesheet" href="styles/index-style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts/master-script.js"></script>
    <script src="scripts/index-script.js"></script>
</head>
<body>
    <div id="wrapper">
        
        <?php require "header.php" ?>
        
        <main>
            <div class="article-wrapper">
                
                <?php include "php/mainFeed.php"; ?>
                
            </div>
            
            <aside>
                
                <?php if(isset($_SESSION['userName']) && !empty($_SESSION['userName'])) { ?>
                    <section class="user-panel aside-box">
                        <p>Welcome to TsundereSharks, <?php echo $_SESSION['userName'] ?>!</p>
                        <p><a href="php/logout.php?logout=true" class="btn">Logout</a></p>
                    </section>
                <?php } else { ?>
                    <section class="login aside-box">
                        <form action="php/session.php" method="POST">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" id="email" type="text">
                                <small>It's not like we'll share your email with anyone... baka.</small>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" id="password" type="password">
                            </div>
                            <div class="form-group">
                                <input class="submit" value="Login" type="submit">
                                <input class="submit" value="Login gently" type="submit">
                            </div>
                        </form>
                    </section>
                <?php } ?>
                
                <div id="news-pos"></div>
                <div class="news-wrapper">
                    <section id="recent-posts" class="aside-box">
                        <h2>Recent Posts</h2>

                        <?php
                        include "php/recentPosts.php";
                        ?>

                    </section>

                    <section id="site-posts" class="aside-box">
                        <h2>Site News</h2>
                        <article>
                            <h3>Mini-article 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </article>
                        <article>
                            <h3>Mini-article 2</h3>
                            <p>Sint tempore saepe optio omnis neque deleniti labore.</p>
                        </article>
                        <article>
                            <h3>Mini-article 3</h3>
                            <p>Suscipit optio voluptates ducimus ad deleniti, sequi rem, quidem molestiae cupiditate tempore.</p>
                        </article>
                        <article>
                            <h3>Mini-article 4</h3>
                            <p>Tempora ut obcaecati suscipit sapiente nam veritatis voluptates optio odio repellendus.</p>
                        </article>
                    </section>
                </div>
            </aside>
        </main>
    </div>
    
    <?php require "footer.php" ?>
    
</body>
</html>