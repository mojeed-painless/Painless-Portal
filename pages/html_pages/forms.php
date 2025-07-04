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
    <title>HTML FORMS</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/html_styles/forms.css">

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
            <h1>HTML Forms</h1>
        </header>

        <main>

            <section id="forms">
                <div id="cover">
                    <div class="spacing forms">
<p>
    Forms are essential for gathering input from users on a website. They can range from simple contact forms to complex data entry systems.
    All form elements are wrapped in the <code>&lt;form&gt;</code> tag.
</p>

  <h3>Basic Form Structure</h3>

  <p>
    Traditionally, the <code>&lt;label&gt;</code> tag is used to indicate the purpose of a form field. However, in modern design, the <code>placeholder</code> attribute is often preferred for a cleaner look.
  </p>

<pre>
&lt;form&gt;
  &lt;input type="text" placeholder="Enter your name"&gt;
  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
</pre>

  <h3>Common Input Types</h3>

  <ul>
    <li><code>&lt;input type="text"&gt;</code> – For single-line text input</li>
    <li><code>&lt;input type="password"&gt;</code> – For entering passwords (hidden characters)</li>
    <li><code>&lt;input type="submit"&gt;</code> – For submitting form data</li>
    <li><code>&lt;input type="radio"&gt;</code> – For selecting only one option from a group</li>
    <li><code>&lt;input type="checkbox"&gt;</code> – For selecting one or more options</li>
    <li><code>&lt;input type="email"&gt;</code> – For validating email input</li>
    <li><code>&lt;input type="date"&gt;</code> – For picking a calendar date</li>
    <li><code>&lt;input type="color"&gt;</code> – For picking a color</li>
  </ul>

  <h3>Radio Buttons Note</h3>
  <p>
    To ensure only one radio button can be selected, all radio inputs in the group must share the same <code>name</code> attribute.
  </p>

<pre>
&lt;input type="radio" name="gender" value="male"&gt; Male
&lt;input type="radio" name="gender" value="female"&gt; Female
</pre>

  <h3>Checkboxes</h3>
  <p>
    Checkboxes allow users to select zero, one, or multiple options independently.
  </p>

<pre>
&lt;input type="checkbox" name="skill" value="html"&gt; HTML
&lt;input type="checkbox" name="skill" value="css"&gt; CSS
</pre>

  <h3>Dropdown Menus (&lt;select&gt;)</h3>
  <p>
    The <code>&lt;select&gt;</code> tag creates a dropdown list. It uses <code>&lt;option&gt;</code> tags inside.
  </p>

<pre>
&lt;select name="country"&gt;
  &lt;option value="nigeria"&gt;Nigeria&lt;/option&gt;
  &lt;option value="ghana"&gt;Ghana&lt;/option&gt;
&lt;/select&gt;
</pre>

  <p>To allow multiple selections:</p>

<pre>
&lt;select name="languages" multiple&gt;
  &lt;option value="english"&gt;English&lt;/option&gt;
  &lt;option value="french"&gt;French&lt;/option&gt;
&lt;/select&gt;
</pre>

  <h3>Textarea</h3>
  <p>
    The <code>&lt;textarea&gt;</code> tag is used for multi-line input. The <code>rows</code> and <code>cols</code> attributes control its size.
  </p>

<pre>
&lt;textarea rows="4" cols="50" placeholder="Write your message here..."&gt;&lt;/textarea&gt;
</pre>

<div class="watch">
    <p>🎥 Watch: Form</p>
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
                       <a href="./inline.php" target="_self">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>previous</span>
                       </a>

                       <a href="#" target="_self">
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