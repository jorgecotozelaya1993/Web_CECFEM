<!DOCTYPE html>
<html dir="ltr" lang="es-US">
<head>
 <?php include("paginas/head.php");?>
</head>
<body>
<div id="art-main">
<nav class="art-nav clearfix">
    <?php include("paginas/menu.php");?>
</nav>
<header class="art-header clearfix">
  <?php include("paginas/banner.php");?>                   
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1 clearfix"><div class="art-block clearfix">
                             <?php include("paginas/panelizquierdo.php");?>      
     </div>
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <?php include("paginas/imagenesiteractivas.php");?>  
</div>
<div class="art-content-layout-br layout-item-1">
</div> 
<?php include("paginas/contenido.php");?>  
<?php include("paginas/basica.php");?>
<?php //include("paginas/publicidad.php");?>                                        
</div>              
                </article></div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">
 <?php include("paginas/pie.php");?>  
</footer>
    </div>
</div>
</body></html>