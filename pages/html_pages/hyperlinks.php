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
    <title>HTML HYPERLINKS</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/html_styles/hyperlinks.css">

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
            <h1>HTML Hyperlinks</h1>
        </header>

        <main>

            <section id="hyperlinks">
                <div id="cover">
                    <div class="spacing hyperlinks">

<p>
    Adding hyperlinks to your HTML code adds functionality and navigation to your webpage.
    Hyperlinks allow users to move from one page to another within your website or to external sites on the internet.
</p>

  <h3>Syntax</h3>


<pre>
&lt;a href="https://www.example.com"&gt;Click here&lt;/a&gt;
</pre>


  <p>
    The <code>&lt;a&gt;</code> tag is the anchor tag that defines a hyperlink.
    The <code>href</code> attribute specifies the destination (URL) the link points to.
    The text between the opening and closing anchor tags is what the user sees and clicks.
  </p>

  <h3>Example</h3>

  
<pre>
&lt;a href="https://www.facebook.com"&gt;Visit Facebook&lt;/a&gt;
</pre>

  <p>
    Clicking this will take the user to Facebook.
  </p>

  <h3>The target Attribute</h3>

  <p>
    By default, links open in the same browser tab. But you can control this using the <code>target</code> attribute:
  </p>

  <ul>
    <li><code>_self</code> – Opens the link in the same tab (default behavior)</li>
    <li><code>_blank</code> – Opens the link in a new tab</li>
  </ul>

  <p>
    To open a link in a new tab while keeping your website open, use:
  </p>

<pre>
&lt;a href="https://www.twitter.com" target="_blank"&gt;Follow us on Twitter&lt;/a&gt;
</pre>

<p>
    The <code>_blank</code> is useful because we want to keep users within our webpage and 
    we don't want them going off by clicking the hyperlink.
</p>

<div class="watch">
    <p>🎥 Watch: Hyperlinks in action</p>
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
                       <a href="./images.php" target="_self">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>previous</span>
                       </a>

                       <a href="./inline.php" target="_self">
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