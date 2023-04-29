<?php declare(strict_types=1); session_start();?>
<?php require('admin/MySQL/dibi/db.php'); ?>
<!DOCTYPE html>
<html>
    <head>
<?php include('contents/headpage/header.php'); ?>
        <link rel="stylesheet" type="text/css" href="lib/css/main.css">
    </head>
    <body>
        <div class="menu-wrapper">
            <nav id="header" class="header">
                <ul class="header-nav">
                    <li class="svg home">
                        <a href="#">
                            <svg class="icon">
                                <use xlink:href="/sprite.svg#home"></use>
                            </svg>
                            <span>Acceuil</span>
                        </a>
                    </li> <?php
                    if(!isset($_SESSION['logged_username'])) { ?>
                        <li class="svg">
                            <a href="/login">
                                <svg class="icon">
                                    <use xlink:href="/sprite.svg#user"></use>
                                </svg>
                                <span>Se connecter</span>
                            </a>
                        </li>
                        <li class="svg">
                            <a href="/register">
                                <svg class="icon">
                                    <use xlink:href="/sprite.svg#pen"></use>
                                </svg>
                                <span>S'inscrire</span>
                            </a>
                        </li> <?php } else { ?>
                        <li class="svg">
                            <a href="/profile/">
                                <svg class="icon">
                                    <use xlink:href="/sprite.svg#user"></use>
                                </svg>
                                <span>Mon Profile</span>
                            </a>
                        </li>
                        <li class="svg">
                            <a href="../contents/script/logout.php">
                                <svg class="icon">
                                    <use xlink:href="/sprite.svg#logout"></use>
                                </svg>
                                <span>Logout</span>
                            </a>
                        </li>
                    <?php }?>
                    <li class="svg">
                        <a href="/uploading">
                            <svg class="icon">
                                <use xlink:href="/sprite.svg#edit"></use>
                            </svg>
                            <span>Upload</span>
                        </a>
                    </li>
                    <li class="svg">
                        <a href="#">
                            <svg class="icon">
                                <use xlink:href="/sprite.svg#comment"></use>
                            </svg>
                            <span>Chat</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Messenger Plugin de discussion Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de discussion code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "123148754045223");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    </body>
</html>