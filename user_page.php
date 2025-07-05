<?php

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painless Portal</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
    
    <div class="container">

        <div id="header">
            <div id="logo">
                <a href="#user_page.php" target="_self"><img src="img/logo.png" alt="Painless Portal Logo"></a>
            </div>

            <!-- <div class="user-name">
                <h4>Welcome, <span><?= $_SESSION['name']; ?></span></h4>
            </div> -->

            <div id="logos">
                <a href="#"><img src="img/html_logo.png" alt="HTML logo"></a>
                <a href="#"><img src="img/css_logo.png" alt="CSS logo"></a>
                <a href="#"><img src="img/js_logo.png" alt="JS logo"></a>
                <button class="logout" onclick="window.location.href='logout.php'" 
                style="background: var(--para_color2); padding: 0.2rem 1rem; border-radius: 0.2rem; border: none; color: white; cursor: pointer;">
                    Logout
                </button>
            </div>
        </div>

        <header>
            <div class="img">
                <img src="./img/web1.png" alt="web1 image">
            </div>

            <div class="text">
                <h1>Welcome to the world of Web Development</h1>
                <p>This course is carefully designed to take complete beginners from ground level 
                    to confident web developers. Whether you’ve never written a line of code before 
                    or you're curious about how websites are built, this is the perfect starting point.
                    By the end of the course, you’ll have a solid foundation in web technologies 
                    and the hands-on skills to create modern, responsive websites—ready to take 
                    on real-world projects or dive deeper into advanced development.
                </p>
            </div>
        </header>


        <main>
            <section id="intro">
                <div id="cover">
                    <div class="spacing intro">
                        <div class="head">
                            <div id="head_left">
                                <i class="fa-solid fa-door-open"></i>
                                <p><span>INTRODUCTION:</span> Learn the basics of web structure</p>
                            </div>

                            <div id="head_right">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div id="content" class="hide">

                            <a href="./pages/general.php" target="_self">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>General Overview</p>
                                </div>
                            </a>

                            <a href="./pages/why.php" target="_self">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Why should I learn Coding</p>
                                </div>
                            </a>

                            <a href="./pages/course.php" target="_self">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Course Overview</p>
                                </div>
                            </a>

                            <a href="./pages/editors.php">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Code Editors</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="html">
                <div id="cover">
                    <div class="spacing html">
                        <div class="head">
                            <div id="head_left">
                                <i class="fa fa-code" aria-hidden="true"></i>
                                <p><span>HTML:</span> Learn the basics of web structure</p>
                            </div>

                            <div id="head_right">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div id="content" class="hide">

                            <a href="./pages/html_pages/structure.php" target="_self">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>HTML Page Structure</p>
                                </div>
                            </a>

                            <a href="./pages/html_pages/lists.php">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>HTML List</p>
                                </div>
                            </a>

                            <a href="./pages/html_pages/tables.php">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>HTML Tables</p>
                                </div>
                            </a>

                            <a href="./pages/html_pages/images.php">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>HTML Images</p>
                                </div>
                            </a>

                            <a href="./pages/html_pages/hyperlinks.php">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>HTML Hyperlinks</p>
                                </div>
                            </a>

                            <a href="./pages/html_pages/inline.php">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>HTML Inline & Block Elements</p>
                                </div>
                            </a>

                            <a href="./pages/html_pages/forms.php">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>HTML Forms, Types & Fields</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="css">
                <div id="cover">
                    <div class="spacing css">
                        <div class="head">
                            <div id="head_left">
                                <i class="fa fa-paint-brush" aria-hidden="true"></i>
                                <p><span>CSS:</span> Learn to give the web page an attractive appearance</p>
                            </div>

                            <div id="head_right">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div id="content" class="hide">
                             <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Introduction to CSS</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>CSS Syntax</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Inserting CSS</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Selectors</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Colors</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Background</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Borders, Margin, Padding, Height & Width</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Box Model & Outline</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Text Formatting</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Icons & Links</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Lists & Tables</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Layout</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Combinators</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Pseudo-classes & Pseudo-elements</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Navigation Bar</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Form & Attributes Selector</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Opacity & Box Shadow</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Transition</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="js">
                <div id="cover">
                    <div class="spacing js">
                        <div class="head">
                            <div id="head_left">
                                <i class="fa-brands fa-node-js"></i>
                                <p><span>Javascript:</span> Learn to make the web page dynamic</p>
                            </div>

                            <div id="head_right">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div id="content" class="hide">
                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Placeholder</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Placeholder</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Placeholder</p>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <i class="fa-solid fa-file"></i>
                                    <p>Placeholder</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; 2025 Painless Portal. All rights reserved.</p>
        </footer>

    </div>

    <script src="js/script.js"></script>
</body>
</html>