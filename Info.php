<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css\style.css" rel="stylesheet">
    <link href="css\styleInfo.css" rel="stylesheet">
    <link href="css\media.css" rel="stylesheet">
    <link type="image/x-icon" href="img\doomicon512.ico" rel="shortcut icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    <title>Doom In</title>
    
</head>
<body>

    <div class="body__wrapper">
    <header id="start">
        <div class="header__wrapper">

            <div class="header_top_wrapper">

                <div class="back_arrow"><a href="index.php"><img src="img\arrow-back.svg" alt=""></a></div>
                <!-- <div class="burger_menu">

                    <div class="burger_menu_lines">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    
                </div> -->
                <nav class="main-nav hamburger-menu">

                            
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                        <span></span>
                    </label>
                    

                    <ul class="menu__box">
                        <li><a class="menu__item" href="#">Головна</a></li>
                        <li><a class="menu__item" href="#">Персонажі</a></li>
                        <li><a class="menu__item" href="#">Розробники</a></li>
                        <li><a class="menu__item" href="#">Блог</a></li>
                        <li><a class="menu__item" href="#">Контакти</a></li>
                    </ul>
                </nav>
            </div>

            <div class="header_main_wrapper">
                <div class="name_site"><h1>Doom Eternal: Info</h1></div>
                <div class="img">
                    <img src="img/arrow.svg" alt="">
                </div>
            </div>

             </div>
    </header>

<main>

    

        <!-- <div class="categories_wrapper">
            <div class="title"><h2>Categories</h2></div>

            <div class="categories_content">

                <div class="content_row">
                    
                        <a href="#" class="categories_block bck_cont_1">
                            <div class="categories_block_title">Doom Eternal: Info</div>
</a>
                    
                        <a class="categories_block bck_cont_2">
                            <div class="categories_block_title">Doom Slayer</div>
</a>
                   
                </div>

                <div class="content_row">
                    
                        <a class="categories_block bck_cont_3">
                            <div class="categories_block_title">Demons</div>
</a>
                    
                        <a class="categories_block bck_cont_4">
                               <div class="categories_block_title">Guns</div>
</a>
                    
                        <a class="categories_block bck_cont_5">
                           <div class="categories_block_title">Gallery</div>
</a>
                    
                </div>

            </div>

        </div> -->
        

</main>
</div>
<footer class="footer">
        <div class="foter_text">© 2023 Bethesda Softworks LLC, a ZeniMax Media company. Bethesda, Bethesda Softworks, ZeniMax and related logos are registered trademarks or trademarks of ZeniMax Media Inc. in the U.S. and/or other countries. DOOM, id, id Software, id Tech and related logos are registered trademarks or trademarks of id Software LLC in the U.S. and/or other countries. All Rights Reserved.</div>
        

        
        <div class="sub">
                <div class="sub_text">Підпишіться на оновлення гри</div>
            <section class="sub_block">
                <form id="subscription_form" class="form_sub">
                        <div class="inputs">
                            <input type="text" name="name" required placeholder="Ім'я"> 
                            <input type="email" name="email" required placeholder="Пошта">
                        </div>
                    <button type="submit">Оформити підписку</button>
                </form>
            </section>
        </div>
        
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>