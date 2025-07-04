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
    <title>HTML LISTS</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/html_styles/lists.css">

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
            <h1>HTML List Tag</h1>
        </header>

        <main>

            

            <section id="list">
                <div id="cover">
                    <div class="spacing list">
                        <p>
                            In HTML, lists are essential for organizing related items. Whether you're outlining steps, presenting features, or simply grouping content, the <strong>list tag</strong> gives your webpage a clean and structured look.
                        </p>

                        <p></p>

                        <p>
                            There are two main types of lists in HTML:
                        </p>

                        <h3>Ordered List – &lt;ol&gt;&lt;/ol&gt;</h3>
                        <p>
                            An ordered list is used when the <strong>order of items matters</strong>, like steps in a recipe or instructions in a process.
                        </p>

                        <h4>Syntax:</h4>

<p>Click <i><b>"Run code"</b></i> to display output</p>
<article>
    <div class="example example-code">
        <div class="code-header">
            <div>HTML code</div>
            <button class="run-btn">Run code</button>
        </div>

        <div class="code-content">
<pre>
&lt;ol&gt;
  &lt;li&gt;Item One&lt;/li&gt;
  &lt;li&gt;Item Two&lt;/li&gt;
  &lt;li&gt;Item Three&lt;/li&gt;
&lt;/ol&gt;
</pre>
        </div>
    </div>

    <div class="example example-output hide-output">
        <div class="output-header">
            <div>Output</div>
        </div>

        <div class="output-content">
            <img src="../../img/list1.png" alt="">
        </div>
    </div>
</article>

                        <p>
                            By default, an ordered list displays items with <strong>numbers (1, 2, 3...)</strong>, but you can change the numbering style using the <code>type</code> attribute.
                        </p>



                        <h4>Other List Types (Using type attribute):</h4>
                        <table>
                            <thead>
                            <tr>
                                <th>Type Value</th>
                                <th>Description</th>
                                <th>Example Markers</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td>1</td><td>Default (numeric)</td><td>1, 2, 3</td></tr>
                            <tr><td>A</td><td>Uppercase letters</td><td>A, B, C</td></tr>
                            <tr><td>a</td><td>Lowercase letters</td><td>a, b, c</td></tr>
                            <tr><td>I</td><td>Uppercase Roman numerals</td><td>I, II, III</td></tr>
                            <tr><td>i</td><td>Lowercase Roman numerals</td><td>i, ii, iii</td></tr>
                            </tbody>
                        </table>

  <h4>Example:</h4>

<p>Click <i><b>"Run code"</b></i> to display output</p>
<article>
    <div class="example example-code">
        <div class="code-header">
            <div>HTML code</div>
            <button class="run-btn">Run code</button>
        </div>

        <div class="code-content">
<pre>
&lt;ol type="A"&gt;
  &lt;li&gt;Apple&lt;/li&gt;
  &lt;li&gt;Banana&lt;/li&gt;
  &lt;li&gt;Cherry&lt;/li&gt;
&lt;/ol&gt;
</pre>
        </div>
    </div>

    <div class="example example-output hide-output">
        <div class="output-header">
            <div>Output</div>
        </div>

        <div class="output-content">
            <img src="../../img/list2.png" alt="">
        </div>
    </div>
</article>

                        <h3>Unordered List – &lt;ul&gt;&lt;/ul&gt;</h3>
                        <p>
                            An unordered list is used when the <strong>order of items doesn’t matter</strong>, like a list of features or ingredients.
                        </p>
                        <p>
                            By default, items are marked with <strong>bullet points (•)</strong>, but this can be changed using CSS.
                        </p>

  <h4>Syntax:</h4>


<p>Click <i><b>"Run code"</b></i> to display output</p>
<article>
    <div class="example example-code">
        <div class="code-header">
            <div>HTML code</div>
            <button class="run-btn">Run code</button>
        </div>

        <div class="code-content">
<pre>
&lt;ul&gt;
  &lt;li&gt;Milk&lt;/li&gt;
  &lt;li&gt;Bread&lt;/li&gt;
  &lt;li&gt;Butter&lt;/li&gt;
&lt;/ul&gt;
</pre>
        </div>
    </div>

    <div class="example example-output hide-output">
        <div class="output-header">
            <div>Output</div>
        </div>

        <div class="output-content">
            <img src="../../img/list3.png" alt="">
        </div>
    </div>
</article>

                        <h4>Changing Bullet Style with CSS:</h4>
                        <table>
                            <thead>
                            <tr>
                                <th>Value</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td>disc</td><td>Default solid circle</td></tr>
                            <tr><td>circle</td><td>Hollow circle</td></tr>
                            <tr><td>square</td><td>Solid square</td></tr>
                            <tr><td>none</td><td>No bullet</td></tr>
                            </tbody>
                        </table>

  <h4>Example:</h4>

<p>Click <i><b>"Run code"</b></i> to display output</p>
<article>
    <div class="example example-code">
        <div class="code-header">
            <div>HTML code</div>
            <button class="run-btn">Run code</button>
        </div>

        <div class="code-content">
<pre>
&lt;ul style="list-style-type: square;"&gt;
  &lt;li&gt;Red&lt;/li&gt;
  &lt;li&gt;Green&lt;/li&gt;
  &lt;li&gt;Blue&lt;/li&gt;
&lt;/ul&gt;
</pre>
        </div>
    </div>

    <div class="example example-output hide-output">
        <div class="output-header">
            <div>Output</div>
        </div>

        <div class="output-content">
            <img src="../../img/list4.png" alt="">
        </div>
    </div>
</article>





  <h3>Nesting Lists</h3>
  <p>
    You can also nest a list inside another list. This is useful when you want to break items into subcategories:
  </p>

<p>Click <i><b>"Run code"</b></i> to display output</p>
<article>
    <div class="example example-code">
        <div class="code-header">
            <div>HTML code</div>
            <button class="run-btn">Run code</button>
        </div>

        <div class="code-content">
<pre>
&lt;ol&gt;
  &lt;li&gt;Fruits
    &lt;ul&gt;
      &lt;li&gt;Apple&lt;/li&gt;
      &lt;li&gt;Mango&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Vegetables
    &lt;ul&gt;
      &lt;li&gt;Carrot&lt;/li&gt;
      &lt;li&gt;Spinach&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ol&gt;
</pre>
        </div>
    </div>

    <div class="example example-output hide-output">
        <div class="output-header">
            <div>Output</div>
        </div>

        <div class="output-content">
            <img src="../../img/list5.png" alt="">
        </div>
    </div>
</article>





  <h3 class="bold">
    Use &lt;ol&gt; when the order of the items matters, and &lt;ul&gt; when it doesn’t. You can customize the appearance using attributes in HTML or CSS, and even nest lists inside one another to create more detailed structures.
  </h3>

  <div class="watch">
    <p>🎥 Watch: HTML List tags</p>
    <video controls>
      <source src="#" type="video/mp4">
    </video>
  </div>



  <hr>




  <div class="exercise">
    
    <h3>Practice Exercise</h3>

    <p>Instructions:</p>

    <ol>
        <li>Create an unordered list of your 4 favorite fruits.</li>
        <li>Create an ordered list of 3 places you want to visit, using lowercase Roman numerals.</li>
        <li>Create a nested list of programming languages and their related frameworks.</li>
    </ol>
                    </div>
                </div>
            </section>

            <section id="navigator">
                <div id="cover">
                    <div class="spacing navigator">
                       <a href="./structure.php" target="_self">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>previous</span>
                       </a>

                       <a href="./tables.php" target="_self">
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