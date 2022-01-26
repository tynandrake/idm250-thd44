<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tynan Drake | Portfolio</title>
    <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <?php 
    wp_nav_menu(
        [
            'theme_location' => 'primary_menu'
        ]
        );
    ?>

    <!-- <header>
        <div>
            <div id="header-logo">
                <a href="index.html">
                    <img src="images/logo.svg" alt="logo">
                </a>
            </div>
            <div id="header-menu">
                <ul>
                    <li>
                        <a href="about_me.html">about.</a>
                    </li>
                    <li>
                        <a href="images/tynandrake-resume.pdf" target="_blank">resume.
                            <img src="images/homepage/resume-dl-icon.svg" id="resume-dl">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header> -->
