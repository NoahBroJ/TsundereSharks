<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tsundere Sharks</title>
    
    <link rel="stylesheet" href="styles/master-style.css">
    <link rel="stylesheet" href="styles/index-style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
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
                <div class="link-item active-link"><a href="#">Kyaaaa!</a></div>
                <div class="link-item"><a href="#">B-Baka!</a></div>
                <div class="link-item"><a href="#">Senpai!</a></div>
                <div class="link-item"><a href="#">Login/Sign up</a></div>
            </nav>
        </header>
        
        <main>
            <div class="article-wrapper">
                
                <?php
                include "mainFeed.php";
                ?>
                
            </div>
            
            <aside>
                <div class="login aside-box">
                    <form action="">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email">
                            <small>It's not like we'll share your email with anyone... baka.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password">
                        </div>
                        <div class="form-group">
                            <input class="submit" value="Login" type="submit">
                            <input class="submit" value="Login gently" type="submit">
                        </div>
                    </form>
                </div>
                
                <div id="recent-posts" class="news aside-box">
                    <h2>Recent Posts</h2>
                    
                    <?php
                    include "recentPosts.php";
                    ?>
                
                </div>
                
                <div class="news aside-box">
                    <h2>News around the Ocean</h2>
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
                    <article>
                        <h3>Mini-article 5</h3>
                        <p>Tempora ut obcaecati suscipit sapiente nam veritatis voluptates optio odio repellendus.</p>
                    </article>
                    <article>
                        <h3>Mini-article 6</h3>
                        <p>Tempora ut obcaecati suscipit sapiente nam veritatis voluptates optio odio repellendus.</p>
                    </article>
                </div>
            </aside>
        </main>
    </div>
    
    <footer class="main-footer">
        © Noah Bro-Jørgensen | 2017
    </footer>
</body>
</html>