<?php

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML IMAGES</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/html_styles/images.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
    
    <div class="container">
        <div id="header">
            <div id="logo">
                <a href="../../user_page.php" target="_self"><img src="../../img/logo.png" alt="Painless Portal Logo"></a>
            </div>

            <div id="logos">
                <a href="#"><img src="../../img/html_logo.png" alt="HTML logo"></a>
                <a href="#"><img src="../../img/css_logo.png" alt="CSS logo"></a>
                <a href="#"><img src="../../img/js_logo.png" alt="JS logo"></a>
            </div>
        </div>

        <header>
            <h1>HTML Images</h1>
        </header>

        <main>

            <section id="images">
                <div id="cover">
                    <div class="spacing images">
                       <p>The <code>&lt;img&gt;</code> tag is used when you want to display images in an HTML page. It is a <strong>self-closing tag</strong>, meaning it does not need a closing tag like <code>&lt;/img&gt;</code>.</p>

  <h3>Basic Syntax</h3>
  <p>
    The most important attribute is <code>src</code>, which stands for "source". It tells the browser where to find the image.
  </p>

<pre>
&lt;img src="./img/car.png"&gt;
</pre>

  <p>
    This will display an image located in the <code>img</code> folder of your project directory.
  </p>




  <h3>Setting Image Size with style</h3>
  <p>
    You can style the image using the <code>style</code> attribute to control the <code>width</code> and <code>height</code>.
  </p>

<pre>
&lt;img src="./img/car.png" style="width:120px; height:56px;"&gt;
</pre>




  <h3>Alternatively: Use Width and Height Attributes</h3>
  <p>
    Instead of using <code>style</code>, you can directly use the <code>width</code> and <code>height</code> attributes:
  </p>

<pre>
&lt;img src="./img/car.png" width="120" height="56"&gt;
</pre>




  <p>⚠️ Always ensure your image path is correct. If you're using an external image, you can provide a full URL:</p>
<pre>
&lt;img src="https://example.com/image.jpg" width="300"&gt;
</pre>



<div class="watch">
    <p>🎥 Watch: Adding images to a webpage</p>
    <video controls>
      <source src="#" type="video/mp4">
    </video>
</div>

                    </div>
                </div>
            </section>

            <section id="navigator">
                <div id="cover">
                    <div class="spacing navigator">
                       <a href="./tables.php" target="_self">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>previous</span>
                       </a>

                       <a href="./hyperlinks.php" target="_self">
                        <span>next</span>
                        <i class="fa-solid fa-arrow-right"></i>
                       </a>
                    </div>
                </div>
            </section>


        </main>


        <footer>
            <p>&copy; 2025 Painless Portal. All rights reserved.</p>
        </footer>


    </div>



    <script src="../../js/script.js"></script>
</body>
</html>