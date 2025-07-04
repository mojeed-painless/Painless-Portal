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
    <title>HTML INLINE & BLOCK ELEMENTS</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/html_styles/inline.css">

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
            <h1>HTML Inline & Block Elements</h1>
        </header>

        <main>

            <section id="inline">
                <div id="cover">
                    <div class="spacing inline">
<p>
    HTML elements are broadly categorized into two types based on how they behave in a web page layout: <strong>block-level elements</strong> and <strong>inline elements</strong>.
</p>

  <h3>Block Elements</h3>
  <p>
    A <strong>block-level element</strong> always starts on a new line and stretches out to the full width of the container (by default).
    The browser also typically adds space (margin) above and below these elements.
  </p>

  <p>Common examples of block elements include:</p>

<pre>
&lt;div&gt;, &lt;p&gt;, &lt;h1&gt; to &lt;h6&gt;, &lt;table&gt;, &lt;ol&gt;, &lt;ul&gt;, &lt;form&gt;, &lt;nav&gt;, &lt;header&gt;, &lt;footer&gt;, &lt;section&gt;, &lt;article&gt;, &lt;aside&gt;
</pre>

  <h4>Example of a Block Element</h4>
<pre>
&lt;div&gt;
  &lt;h2&gt;Welcome to Web Development&lt;/h2&gt;
  &lt;p&gt;This is a paragraph inside a div.&lt;/p&gt;
&lt;/div&gt;
</pre>

  <h4>The &lt;div&gt; Element</h4>
  <p>
    The <code>&lt;div&gt;</code> tag is one of the most commonly used block-level elements. It acts as a container for other elements, helping structure your page and making it easier to apply CSS styling later.
  </p>

  <h3>Inline Elements</h3>
  <p>
    An <strong>inline element</strong> only takes up as much width as its content needs. It does not start on a new line, and no margin is added by default.
  </p>

  <p>Common examples of inline elements include:</p>

<pre>
&lt;span&gt;, &lt;a&gt;, &lt;img&gt;, &lt;strong&gt;, &lt;em&gt;, &lt;i&gt;, &lt;b&gt;, &lt;br&gt;, &lt;small&gt;, &lt;sup&gt;, &lt;sub&gt;, &lt;select&gt;, &lt;textarea&gt;, &lt;button&gt;
</pre>

  <h4>Example of an Inline Element</h4>
<pre>
&lt;p&gt;This is a &lt;span&gt;highlighted&lt;/span&gt; word in a sentence.&lt;/p&gt;
</pre>

  <h4> The &lt;span&gt; Element</h4>
  <p>
    The <code>&lt;span&gt;</code> tag is commonly used to style part of the text inside a block element. It's especially useful when combined with CSS.
  </p>

  <h4>Formatting with Inline Tags</h4>
  <p>
    You can format your content using inline tags like:
  </p>

  <ul>
    <li><code>&lt;b&gt;</code> or <code>&lt;strong&gt;</code> – bold text</li>
    <li><code>&lt;i&gt;</code> or <code>&lt;em&gt;</code> – italic text</li>
  </ul>

  <h3 class="bold">
    While these tags are helpful, modern development encourages using CSS for styling, as it improves readability and separates design from content.
  </h3>

<div class="watch">
    <p>🎥 Watch: Block vs Inline Elements</p>
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
                       <a href="./hyperlinks.php" target="_self">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>previous</span>
                       </a>

                       <a href="./forms.php" target="_self">
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