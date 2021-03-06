<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

$document =& JFactory::getDocument();
$mainframe = JFactory::getApplication();
if($document->title!=$mainframe->getCfg('sitename'))
$document->setTitle($document->title. " - " . $mainframe->getCfg('sitename'));
else $document->setTitle('Usługi dźwigowe - dźwigi - żurawie wieżowe - TRINAC Polska');
?>
<!doctype html>
<html lang="pl">
  <head>
  	<title><?php echo $document->title; //Usługi dźwigowe – dźwigi – żurawie wieżowe - TRINAC Polska ?></title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="templates/trinac/css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    
     
  </style>
<!--<script type="text/javascript" src="lightbox/js/lightbox.js"></script>  
<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />-->
        <style type="text/css">
            .dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
/*.dropdown-submenu:hover>.dropdown-menu{display:block;}*/
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
        </style>
   <script type='text/javascript'>
        
        $(document).ready(function() {
        
            $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
    // Avoid following the href location when clicking
    event.preventDefault(); 
    // Avoid having the menu to close when clicking
    event.stopPropagation(); 
    // If a menu is already open we close it
    //$('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
    // opening the one you clicked on
    $(this).parent().addClass('open');

    var menu = $(this).parent().find("ul");
    var menupos = menu.offset();
  
    if ((menupos.left + menu.width()) + 30 > $(window).width()) {
        var newpos = - menu.width();      
    } else {
        var newpos = $(this).parent().width();
    }
    menu.css({ left:newpos });

});
        
        });
        
        </script>
  </head>
<body>

<!--<header id="header" class="header header--fixed hide-from-print headroom headroom--top">
top
top
<div id="navigation">
<div class="navbar navbar-default">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                <div id="brand">
                                <a href="/index.php">
                                         <img style="width:178px; height:94px; " src="http://trinac.pl/templates/trinac/img/Trinac_Polska_072dpi.jpg" alt="Logo">
                                        </a>
                        </div>
</div>
<div class="navbar-collapse collapse">
                        <nav class="navigation">
                                <ul class="nav menunav navbar-nav navbar-right">
<li class="item-21 current active"><a href="/index.php?option=com_content&amp;view=featured&amp;Itemid=21">Головна</a></li><li class="item-2 deeper parent dropdown"><a href="/index.php?option=com_content&amp;view=category&amp;layout=blog&amp;id=80&amp;Itemid=2" class="dropdown-toggle" data-toggle="dropdown">Новини<b class="caret"></b></a><ul class="nav-child unstyled small dropdown-menu"><li class="item-227"><a href="/index.php?option=com_content&amp;view=featured&amp;Itemid=227">aktu 1</a></li></ul></li><li class="item-3"><a href="/index.php?option=com_content&amp;view=category&amp;layout=blog&amp;id=81&amp;Itemid=3">Статті</a></li><li class="item-4"><a href="/index.php?option=com_ozakonie&amp;Itemid=4">Про Чин</a></li><li class="item-5"><a href="http://b.bazylianie.pl" target="_blank" rel="noopener noreferrer">Бібліотека</a></li><li class="item-6"><a href="/index.php?option=com_content&amp;view=article&amp;id=689&amp;Itemid=6">Лінки</a></li><li class="item-7"><a href="/index.php?option=com_content&amp;view=category&amp;layout=blog&amp;id=84&amp;Itemid=7">Парафії</a></li><li class="item-8"><a href="/index.php?option=com_content&amp;view=article&amp;id=707&amp;Itemid=8">Контакти</a></li></ul>

                        </nav>
                        </div>
</div>
</div></div>
</header>-->
<!--<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/"><img style="width:154px; height:72px; " src="templates/trinac/img/Trinac_Polska_072dpi.jpg" alt="Trinac POLSKA"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="?option=com_content&view=article&id=42&Itemid=38">Kontakt</a></li>
      <li><span>|</span></li>
      <li><a href="?option=com_xmap">Mapa Strony</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>-->
    
<div class="container">
    <div class="row">
  <div class="col-md-8 col-xs-12">
    <h2><a href="/"><img style="width:154px; height:72px; " src="templates/trinac/img/Trinac_Polska_072dpi.jpg" alt="Trinac POLSKA"></a></h2>
  </div>
  <div class="col-md-4 hidden-xs">
    <ul class="nav navbar-nav navbar-right ">
      <li><a href="/att/polityka_prywatnosci_trinac_polska.pdf">Polityka prywatności</a></li>
      <li><a href="?option=com_content&view=article&id=42&Itemid=38">Kontakt</a></li>
      <li><a href="?option=com_xmap">Mapa Strony</a></li>   
    </ul>
  </div>
    </div>
    <div class="row navbar navbar-default">

  <div class="col-md-9 ">
    <jdoc:include type="modules" name="menu" style="rounded" />
  </div>
  <div class="col-md-3">
      <div class="input-group search-input-group">
    <div class="search_form">
       	  	<form action="" method="get"  id="form1">
   	      	<span id="search">
   	       		<input name="searchword" id="searchfield" type="text" class="form-control" size="10" accesskey="s" tabindex="1" value="" />
   	       	<input type="hidden" name="ordering" value="newest" /><input type="hidden" name="searchphrase" value="any" /><input type="hidden" name="option" value="com_search" />
            </span>
            <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span> Szukaj
        </button>
          </form>
    </div>    </div>

  </div>
        </div>

</div>



<div class="container">
<div id="main" class="row show-grid">

<div id="container">
     <?php if($this->countModules('mainpage')){ ?>

     <jdoc:include type="modules" name="mainpage" style="rounded" />
   
   <?php } else { 
   
  //$bannery = array('n_01.jpg','n_02.jpg','n_03.jpg','n_04.jpg','n_05.jpg','n_06.jpg','n_08.jpg','n_09.jpg','n_10.jpg','n_11.jpg','n_12.jpg','n_13.jpg','n_14.jpg','n_15.jpg','n_16.jpg','n_17.jpg','n_18.jpg','n_19.jpg','n_20.jpg');
      
   
   $nr = rand(1,20);
   $ban = "m_".str_pad($nr, 2, "0", STR_PAD_LEFT).".jpg";
   
   $ban = '/templates/trinac/trinac_bannery/'.$ban;

   

   ?>

  <div id="bb">
  <img style="width: 100%" src="<?php echo $this->baseurl ?><?php echo $ban; ?>" alt="Trinac" />
  </div>
<div class="row">   
  <div class="col-sm-2">   
    <jdoc:include type="modules" name="left" style="rounded" /></div>
  <div class="col-sm-10">
    <jdoc:include type="component" />
  </div>
</div>
<?php } ?>

</div>
</div>





</div>
<div id="stopka" class="container">
<p style="font-size: small; color: #000; text-align:right;">
<jdoc:include type="modules" name="footer" style="rounded" />
<a href="/att/polityka_prywatnosci_trinac_polska.pdf">Polityka prywatności</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.trinac.de">TRINAC GmbH </a></p>Copyright &copy; <?php echo date("Y"); ?>  TRINAC Polska </div>


<!-- start AlienSTATS code -->

<script language="javascript">

<!--

var alienPath='http://stats.trinac.pl';

var alienPageDescr='<?php echo urldecode(substr($_SERVER['REQUEST_URI'],1)); ?>';

//alienPageDescr='trinac';



document.write('<scr'+'ipt language="JavaScript" src="'+alienPath+'/astat.js?alienPageDescr='+alienPageDescr+'"><\/scr' + 'ipt>');

//-->

</script>

<!-- end AlienSTATS code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29169438-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>

</html>