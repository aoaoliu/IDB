
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Grid Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/IDB/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/IDB/css/grid.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">

      <div class="page-header">
        <h1>Bootstrap grid examples</h1>
        <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
      </div>

      <h3>Three equal columns</h3>
      <p>Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and below, the columns will automatically stack.</p>
      <div class="row">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <h3>Three unequal columns</h3>
      <p>Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.</p>
      <div class="row">
        <div class="col-md-3">.col-md-3</div>
        <div class="col-md-6">.col-md-6</div>
        <div class="col-md-3">.col-md-3</div>
      </div>

      <h3>Two columns</h3>
      <p>Get two columns <strong>starting at desktops and scaling to large desktops</strong>.</p>
      <div class="row">
        <div class="col-md-8">.col-md-8</div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <h3>Full width, single column</h3>
      <p class="text-warning">No grid classes are necessary for full-width elements.</p>

      <hr>

      <h3>Two columns with two nested columns</h3>
      <p>Per the documentation, nesting is easy—just put a row of columns within an existing row. This gives you two columns <strong>starting at desktops and scaling to large desktops</strong>, with another two (equal widths) within the larger column.</p>
      <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>
      <div class="row">
        <div class="col-md-8">
          .col-md-8
          <div class="row">
            <div class="col-md-6">.col-md-6</div>
            <div class="col-md-6">.col-md-6</div>
          </div>
        </div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <hr>

      <h3>Mixed: mobile and desktop</h3>
      <p>The Bootstrap 3 grid system has four tiers of classes: xs (phones), sm (tablets), md (desktops), and lg (larger desktops). You can use nearly any combination of these classes to create more dynamic and flexible layouts.</p>
      <p>Each tier of classes scales up, meaning if you plan on setting the same widths for xs and sm, you only need to specify xs.</p>
      <div class="row">
        <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6">.col-xs-6</div>
        <div class="col-xs-6">.col-xs-6</div>
      </div>

      <hr>

      <h3>Mixed: mobile, tablet, and desktop</h3>
      <p></p>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8">.col-xs-12 .col-sm-6 .col-lg-8</div>
        <div class="col-xs-6 col-lg-4">.col-xs-6 .col-lg-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
      </div>

      <hr>

      <h3>Column clearing</h3>
      <p>Clear floats at specific breakpoints to prevent awkward wrapping with uneven content.</p>
      <div class="row">
        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

        <!-- Add the extra clearfix for only the required viewport -->
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
      </div>

      <hr>

      <h3>Offset, push, and pull resets</h3>
      <p>Reset offsets, pushes, and pulls at specific breakpoints.</p>
      <div class="row">
        <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
        <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0</div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-6">.col-sm-6 .col-md-5 .col-lg-6</div>
        <div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0">.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0</div>
      </div>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>