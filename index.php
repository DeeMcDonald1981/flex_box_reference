<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Flexbox Reference Guide</title>
</head>

<body>
  <header id="header">
    <nav class="navigation">
      <div class="container">
        <div class="left">
          <a href="index.php" class="title">flexbox reference</a>
        </div><!-- left -->
        <div class="navmenu">
          <div class="navbar"></div>
          <div class="navbar"></div>
          <div class="navbar"></div>
        </div><!-- navmenu -->
        <div class="right">
          <a href="#">home</a>
          <a href="#basics">basics</a>
          <a href="#justify">justify </a>
          <a href="#align">align</a>
          <a href="#content">content</a>
          <a href="#self">self</a>
          <a class="mobile">x</a>
        </div><!-- right -->
      </div><!-- container -->
    </nav>
  </header>
  <div class="hero">
    <div class="container">
      <h1>flex box tutorial</h1>
    </div><!-- container -->
  </div><!-- hero -->

  <section id="basics">
    <div class="container">
      <h2>basics</h2>
      <div class="databox">
        <div class="box expand">
          <h3>flex box diagram</h3>
          <div class="layover"> </div><!-- layover -->

          <img src="./img/flexbox.png" alt="">
        </div><!-- box -->
        <div class="modal">
          <div class="modalContent">
            <img src="./img/flexbox.png" alt="">
            <small>close X</small>
          </div><!-- modalContent -->
        </div><!-- modal -->

        <div class="box">
          <h3>creating a flexbox</h3>
          <ul>
            <li>add <span>display: flex;</span> to the parent container</li>
            </li>
          </ul>
          <h3>changing layout of flex items</h3>
          <ul>
            <li>
              add <span>flex-direction:row;</span> to the parent container
            </li>
            <li>
              add <span>flex-direction:row-reverse;</span> to the parent container
            </li>
            <li>
              add <span>flex-direction:column;</span> to the parent container
            </li>
            <li>
              add <span>flex-direction:column-reverse;</span> to the parent container
            </li>
          </ul>
        </div><!-- box -->

        <div class="box expand">
          <h3>row vs column layout</h3>
          <div class="layover"> </div><!-- layover -->

          <img src="./img/col_row.png" alt="">

        </div><!-- box -->

        <div class="modal">
          <div class="modalContent">
            <img src="./img/col_row.png" alt="">
            <small>close X</small>
          </div><!-- modalContent -->
        </div><!-- modal -->
        <div class="box">
          <h3>child element width</h3>
          <ul>
            <li>add <span>flex: #;</span> to to child elements to adjust the width of child elements</li>
            <li>add <span>flex-wrap: wrap;</span> to make elements wrap to next line upon reaching container maximum width</li>
            <li>add <span>flex-wrap: nowrap</span>to prevent elements from wrapping to the next line thus crating a horizontal scroll bar</li>
            <li>add <span>flex-bases:#px</span> to add width to flex items</li>
          </ul>
        </div><!-- box -->
      </div><!-- databox -->

    </div><!-- container -->
  </section>

  <section id="justify">
    <div class="container">
      <h2>justify content</h2>
      <div class="databox db-1">
        <div class="box">
          <h3>flex-start</h3>
          <p>which aligns items to the left edge of the parent container</p>
          <p class="property">justify-content:flex-start;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-2">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-3">
        <div class="box">
          <h3>flex-end</h3>
          <p>which aligns items to the right edge of the parent container</p>
          <p class="property">justify-content:flex-end;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-4">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-5">
        <div class="box">
          <h3>flex-center</h3>
          <p>which aligns items to the center the parent container</p>
          <p class="property">justify-content:center;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-6">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-7">
        <div class="box">
          <h3>space-around</h3>
          <p>which divides the space around items evenly </p>
          <p class="property">justify-content:space-around;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-8">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-9">
        <div class="box">
          <h3>space-between</h3>
          <p>which divides the space between items evenly </p>
          <p class="property">justify-content:space-between;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-10">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-11">
        <div class="box">
          <h3>space-evenly</h3>
          <p>which divides the space on all sides of items evenly </p>
          <p class="property">justify-content:space-evenly;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-12">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->
    </div><!-- container -->
  </section>

  <section id="align">
    <div class="container">
      <h2>align items</h2>
      <div class="databox db-1">
        <div class="box">
          <h3>stretch</h3>
          <h4>***parent container must have a height to work***</h4>
          <p>which stretches content to the full height of the parent container</p>
          <p class="property">align-items:stretch;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-2">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-3">
        <div class="box">
          <h3>flex-start</h3>
          <p>which aligns content to the top of the parent container</p>
          <p class="property">align-items:flex-start;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-4">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-5">
        <div class="box">
          <h3>flex-end</h3>
          <p>which aligns content to the bottom of the parent container</p>
          <p class="property">align-items:flex-end;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-6">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-7">
        <div class="box">
          <h3>flex-center</h3>
          <p>which aligns content to the center of the parent container</p>
          <p class="property">align-items:center;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-8">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

    </div><!-- container -->
  </section>

  <section id="content">
    <div class="container">
      <h2>align content</h2>
      <div class="databox db-1">
        <div class="box">
          <h3>flex-start</h3>
          <h4>***aligns content when there are more than two columns***</h4>
          <p>align columns to the top of the parent container</p>
          <p class="property">align-content:flex-start;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-2">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-3">
        <div class="box">
          <h3>flex-end</h3>
          <p>which aligns columns to the bottom of the parent container</p>
          <p class="property">align-content:flex-end;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-4">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-5">
        <div class="box">
          <h3>center</h3>
          <p>which aligns columns to the center of the parent container</p>
          <p class="property">align-content:center;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-6">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-7">
        <div class="box">
          <h3>space-between</h3>
          <p>which divides space between columns evenly</p>
          <p class="property">align-content:space-between;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-8">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-9">
        <div class="box">
          <h3>space-around</h3>
          <p>which divides the space around columns evenly </p>
          <p class="property">align-content:space-around;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-10">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-11">
        <div class="box">
          <h3>stretch</h3>
          <p>which stretches columns to the full height of the parent container</p>
          <p class="property">align-content:center;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-12">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

    </div><!-- container -->
  </section>


  <section id="self">
    <div class="container">
      <h2>align self</h2>
      <div class="databox db-1">
        <div class="box">
          <h3>flex-start</h3>
          <h4>***align individual child elements vertically***</h4>
          <p>which aligns child element to the top of the parent container</p>
          <p class="property">align-content:flex-start;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-2">
        <div class="box box-1">box 1</div>
        <div class="box box-2">box 2</div>
        <div class="box box-3">box 3</div>
      </div><!-- databox -->

      <div class="databox db-3">
        <div class="box">
          <h3>flex-end</h3>
          <p>which aligns child element to the bottom of the parent container</p>
          <p class="property">align-self:flex-end;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-4">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-5">
        <div class="box">
          <h3>center</h3>
          <p>which aligns child element to the center of the parent container</p>
          <p class="property">align-self:center;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-6">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->

      <div class="databox db-7">
        <div class="box">
          <h3>stretch</h3>
          <p>which stetches child element to the full height of the parent container</p>
          <p class="property">align-self:;</p>
        </div><!-- box -->
      </div><!-- databox -->

      <div class="databox db-8">
        <div class="box box-1">box</div>
        <div class="box box-2">box</div>
        <div class="box box-3">box</div>
      </div><!-- databox -->


    </div><!-- container -->
  </section>


  <footer id="footer">
    <div class="container">
      <div class="left">
        <p>flexbox tutorial &copy; <?php echo date('Y') ?></p>
      </div>
      <div class="right">
        <a class="up" href="#">&UpArrow;</a>
      </div>
    </div><!-- container -->
  </footer>
  <script src="js/script.js"></script>
</body>

</html>