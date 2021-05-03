<?php
/**
 * @var $content string
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jukovskii.com</title>

    <script src="/js/main.js?t=<?=time()?>"></script>
    <link rel="stylesheet" href="/css/style.min.css?t=<?=time()?>">
</head>
<body>
<div class="wrapper">

    <header class="header">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?= "$this->controller/$this->action" == 'site/index' ? 'active' : ''?>">
                            <a class="nav-link" href="/">About me</a>
                        </li>
                        <li class="nav-item <?= "$this->controller/$this->action" == 'site/cats' ? 'active' : ''?>">
                            <a class="nav-link" href="/site/cats">My cats</a>
                        </li>
                        <li class="nav-item <?= "$this->controller/$this->action" == 'site/projects' ? 'active' : ''?>">
                            <a class="nav-link" href="/site/projects">My projects</a>
                        </li>
                        <li class="nav-item <?= "$this->controller/$this->action" == 'site/relocation' ? 'active' : ''?>">
                            <a class="nav-link" href="/site/relocation">Relocation</a>
                        </li>
                        <li class="nav-item <?= $this->controller == 'feedback' ? 'active' : ''?>">
                            <a class="nav-link" href="/feedback">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header> <!-- /.header -->

    <div class="content">
        <?= $content ?>
    </div> <!-- /.content -->

    <footer class="footer">
        <hr>
        <div class="container">
            <p>© Jukovskii.com</p>
            <div class="social">
                <a href="https://www.facebook.com/shtall">
                    <img alt="fb-icon" class="social-icon" id="facebook" src="/img/facebook.png" />
                </a>
                <a href="https://twitter.com/zhukovskey">
                    <img alt="twitter-icon" class="social-icon" id="twitter" src="/img/twitter.png" />
                </a>
                <a href="https://www.instagram.com/greyshtall/">
                    <img alt="instagram-icon" class="social-icon" id="instagram" src="/img/instagram.png" />
                </a>
            </div>
        </div>
    </footer> <!-- /.footer -->
</div>
</body>
</html>
