<!DOCTYPE html>
<html lang="pt">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Edilasio Vieira, and Bootstrap contributors">
    
    <!-- Favicons -->    
    <link rel="icon" href="gtp.ico">    
    <title>GTP - Engenharia & Serviços</title>    
    
    <!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="static/assets/js/ie-emulation-modes-warning.js"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">    
    <link href="static/css/gtp-theme.css" rel="stylesheet">        

    <!-- Optional Bootstrap Theme -->
    <link href="data:text/css;charset=utf-8," data-href="static/css/bootstrap-theme.css" rel="stylesheet" id="bs-theme-stylesheet">

    <!-- Documentation extras -->
    <link href="static/assets/css/src/pygments-manni.css" rel="stylesheet">
    <link href="static/assets/css/src/anchor.css" rel="stylesheet">
    <link href="static/assets/css/src/docs.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  

    
  </head>

  <body class="undernavigation">
      <a class="sr-only" href="#content">Skip navigation</a>      
          
      <header class="navbar navbar-inverse navbar-fixed-top">

          <div>
              <?php include('layout/pt/header.php'); ?>
              <br>
          </div>
                            
      </header>
      
      <main class="content" role="main">
         <br><br><br><br>
         
         <div class="container">
                      
            <?php include('layout/slider.php') ?>
            <br>

            <div class="row" style="margin-right: -28px">              

              <?php  
                    if (isset($_GET['p']) == '' || $_GET['p'] == "gtp") {
                      echo '<div class="col-md-9">';
                              include('pages/pt/projectos.php');
                      echo '</div>';
                      echo '<div class="col-md-3" style="height: auto;">';
                              include('layout/pt/sidebar.php');
                      echo '</div>';
                    }
                    else if( $_GET['p'] == "quemsomos" )
                    {
                      echo '<div class="col-md-12" style="margin-left: -15px" >';
                            include('pages/pt/quemsomos.php');
                      echo '</div>';                      
                    }
                    else if( $_GET['p'] == "contacto" )
                    {
                      echo '<div class="col-md-12" style="margin-left: -15px" >';
                            include('pages/pt/contacto.php');
                      echo '</div>';                      
                    }
                    else if( $_GET['p'] == "quadros" )
                    {
                      echo '<div class="col-md-12" style="margin-left: -15px" >';
                            include('pages/pt/quadros.php');
                      echo '</div>';                      
                    }
                    else if( $_GET['p'] == "servicos" )
                    {
                      echo '<div class="col-md-12" style="margin-left: -15px" >';
                            include('pages/pt/servicos.php');
                      echo '</div>';                      
                    }
              ?>

            </div>

         </div>

      </main>

      <br><br><br>
      <footer class="rodape">
            <?php include('layout/pt/footer.php') ?>                    
      </footer>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>    
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="static/js/bootstrap.min.js"></script>
      <script src="static/assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>

</html>