<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Osman's Portfolio</title>
    <link rel="stylesheet" href="css/application.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
</head>

<body>
    <div class="topbar__button" id="menu-btn">
        <span class="icon-menu"></span>
    </div>
    <section class="topbar-section">
        <div class="topbar">
            <ul class="topbar__navigation">
                <li><a href="about.html">About Me</a></li>
                <li><a href="index.html#projects">My Portfolio</a></li>
                <li><a href="examples.html">Coding Examples</a></li>
                <li><a href="scion.html">SCS Scheme</a></li>
                <li><a href="index.html#contact">Contact Me</a></li>
            </ul>
        </div>
    </section>
    <section class="sidebar-section">
        <div class="sidebar">
            <!-- Logo -->
            <div class="sidebar__logo">
                <a href="index.php#header">
                    <img src="img/calligraphy-sig-big.ico" alt="Osman's initials" />
                    <span class="logo"></span>
                </a>
            </div>
            <!-- Navigation list -->
            <ul class="sidebar__navigation">
                <li><a href="about.php">About Me</a></li>
                <li><a href="index.php#projects">My Portfolio</a></li>
                <li><a href="examples.php">Coding Examples</a></li>
                <li><a href="scion.php">SCS Scheme</a></li>
                <li><a href="index.php#contact">Contact Me</a></li>
            </ul>
            <!-- Socials list -->
            <ul class="sidebar__socials">
                <a rel="noopener noreferrer" target="_blank" href="https://github.com/KingZxi">
                    <li>
                        <span class="sidebar__socials__element-github"><span class="icon-github"></span></span>
                    </li>
                </a>
                <li>
                    <a rel="noopener noreferrer" target="_blank"
                        href="https://www.linkedin.com/in/osman-mahmood-21b844269/">
                        <span class="sidebar__socials__element-linkedin"><span class="icon-linkedin"></span></span>
                    </a>
                </li>
                <li>
                    <a rel="noopener noreferrer" target="_blank" href="#contact">
                        <span class="sidebar__socials__element-mail4"><span class="icon-mail4"></span></span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <div class="margin-to-sidebar">
        <div id="particles-js"></div>
        <script src="js/plugins/particles.js"></script>
        <script src="js/plugins/app.js"></script>
        <header class="header">
            <section class="header-section">
                <div class="header-container">
                    <div></div>
                    <div>
                        <div class="header__text">
                            <div class="typewriter-contain">
                                <h1 class="typewriter"><?php echo $typewriter; ?></h1>
                                <span class="caret"></span>
                            </div>
                            <p>I am an aspiring web developer...</p>
                        </div>
                    </div>
                    <a href="#about">
                        <div class="next-button">
                            <span class="next-button__text">Next Section</span>
                            <span class="icon-arrow-down2"></span>
                        </div>
                    </a>
                </div>
            </section>
        </header>