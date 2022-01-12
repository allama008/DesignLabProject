<html>
	<head>
		<title></title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
		<link rel="stylesheet" href="main.css">
		<style>p.indent{ padding-left: 45em }</style>
	</head>
	<body>
		
<!-- Fixed navbar -->
        <nav id="header" class="navbar navbar-fixed-top" style="background-color:#121223;height:100px;color:white;font-weight:bold;">
            <div id="header-container" class="container navbar-container" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" style="padding:0px;" href="#"><img src="logo1.png"></a>
                </div>
                
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                    	 <li class="active"><p class="indent"></p></a></li>
                    	  <li class="active"></a></li>
                        <li class="active"><a href="#">Login</a></li>
                        <li><a href="#about">Logout</a></li>
                       
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->

        <div class="container" id="container">

            <div class="row row-offcanvas row-offcanvas-right">

                <div class="col-xs-12 col-sm-12">
                    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                    <div class="jumbotron">
                        <h2>Resource Reservation System</h2>
                        
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-lg-4">
                            <h2>Book Resource</h2>
                            <p><a class="btn btn-default" href="#" role="button">Book »</a></p>
                        </div><!--/.col-xs-6.col-lg-4-->
                        <div class="col-xs-6 col-lg-4">
                            <h2>View Resource</h2>
                            <p><a class="btn btn-default" href="#" role="button">View »</a></p>
                        </div><!--/.col-xs-6.col-lg-4-->
                    </div><!--/row-->
                </div><!--/.col-xs-12.col-sm-9-->
                
                <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                    <div class="list-group">
                        <!--<a href="#" class="list-group-item active">Link</a>
                        <a href="#" class="list-group-item">Link</a>-->
                        
                    </div>
                </div>
            </div><!--/row-->
        
            <hr>

            <footer>
                <p></p>
            </footer>

        </div><!--/.container-->
	</body>	
</html>