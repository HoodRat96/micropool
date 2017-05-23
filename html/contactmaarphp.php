<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   	<link rel="shortcut icon" href="../img/iconini.png" />  
    <title>Contact - Micropool</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="brand"><img src="../img/headerlogo.png" alt="" height="60px">  Micropool</div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Micropool</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../index.html">Home</a>
                    </li>
                    <li>
                        <a href="./team.html">Over ons</a>
                    </li>
                    <li>
                        <a href="./vision.html">Visie</a>
                    </li>
                    <li>
                        <a href="./contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

       	
        <div class="row">
         	<!-- Kaartje met als locatie de uni -->
            <div class="box">
                <div class="col-md-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Micropool</strong>
                    </h2>
                    <hr>
                </div>

                <div class="col-md-12">
                   	<iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=14&center=51.4486%2C5.4907&key=AIzaSyBwh6GI7f-hYaAAB9bisyRk6ZVR7mIopXo" allowfullscreen></iframe>
                </div>
                                
                <div class="clearfix"></div>
            </div>
        </div>
  

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr><h2 class="intro-text text-center">Ons 
                    <strong>Contactformulier</strong>
                    </h2><hr>
                    <p class="text-center">Mocht u nog vragen of onduidelijkheden hebben, aarzel dan alstublieft niet ons te contacteren. Wij horen graag van u!</p>
                    <p class="text-center">Stuur een mail naar <strong><a href="mailto:contact@micropool.nl">contact@micropool.nl</a></strong>, of vul onderstaand contactformulier in.</p>
                    
                    <form role="form" action="./contactmaarphp.php" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="naam">Naam</label>
                                <input type="text" id="naam" name="name" class="form-control" placeholder="Uw naam" required autocomplete="name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="email">Email-adres</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="email@voorbeeld.nl" required autocomplete="email">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="telnr">Telefoonnummer</label>
                                <input type="tel" id="telnr" name="tel" class="form-control" placeholder="06 12345678" required autocomplete="tel">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Bericht</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Verstuur</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

   	<!-- footer, niks interessants -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Micropool 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>