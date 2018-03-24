<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generate Artikel Tools</title>
    <!-- Global stylesheets -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
  	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
  	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
  	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
  	<!-- /global stylesheets -->

  	<!-- Core JS files -->
  	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
  	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
  	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
  	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
  	<!-- /core JS files -->

  	<!-- Theme JS files -->
  	<script type="text/javascript" src="assets/js/plugins/editors/ace/ace.js"></script>

  	<script type="text/javascript" src="assets/js/core/app.js"></script>
  	<script type="text/javascript" src="assets/js/pages/editor_code.js"></script>
  	<!-- /theme JS files -->
	<!-- /theme JS files -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/ourjs.js"></script> -->

</head>
<body>
  <!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php"><img src="assets/images/logo_icon_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>


			</ul>

			<p class="navbar-text"><span class="label bg-success">Program ini memudahkan Anda untuk membuat banyak artikel dengan sekali submit saja !</span></p>

		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">BM-Mediatama</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> Jl. Lotus Timur, Blok D RSO. 12, Bekasi Selatan
									</div>
								</div>


							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">
                <?php
                function active($currect_page){
                  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
                  $url = end($url_array);
                  if($currect_page == $url){
                      echo 'active'; //class name in css
                  }
                }
                ?>
								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="<?php active('index.php') or active('');?>"><a href="index.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li class="<?php active('index.php?m=pp');?>"><a href="index.php?m=pp"><i class="icon-list-unordered"></i> <span>Susun Keyword</a></li>
								<li class="<?php active('index.php?m=keyword');?>"><a href="index.php?m=keyword"><i class="icon-search4"></i> <span>Keyword</span></a></li>
								<!-- /main -->
                <li class="<?php active('index.php?m=random');?>"><a href="index.php?m=random"><i class=" icon-file-xml"></i> <span>Sinonim</a></li>
                <li class="<?php active('index.php?m=listtext');?>"><a href="index.php?m=listtext"><i class=" icon-clipboard3"></i> <span>Artikel 2 paragraf</a></li>
                <li class="<?php active('index.php?m=hasil');?>"><a href="index.php?m=hasil"><i class=" icon-stack"></i> <span>Lihat Hasil</a></li>

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->
<!-- <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">MARC Tools</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="pp.php" target=_blank>Susun Keyword</a></li>
                <li><a href="index.php?m=keyword">Keyword</a></li>
                <li><a href="index.php?m=random">Sinonim</a></li>
                <li><a href="index.php?m=listtext">Artikel 2 paragraf</a></li>
                <li><a href="index.php?m=hasil">Lihat Hasil</a></li>
            </ul>
        </div>
    </div>
</nav> -->
<div class="content-wrapper">
				<!-- Content area -->
				<div class="content">
    <?php
        $m = ((isset($_GET['m']) ? $_GET['m'] : ''));
        switch($m) {
            case "keyword":
                include("keyword.inc.php");
                break;
            case "pp":
                include("pp.inc.php");
                break;
            case "random":
                include("random.inc.php");
                break;
            case "listtext":
                include("listtext.inc.php");
                break;
            case "hasil":
                include("hasil.inc.php");
                break;
            default:
                include("welcome.inc.php");
        }
    ?>
  </div>
</div>
</body>
</html>
