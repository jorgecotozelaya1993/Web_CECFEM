    <meta charset="utf-8">
    <title>CECFEM</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<link rel="icon" href="images/favicon.ico">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



<script>jQuery(function($) {
    'use strict';
    if ($.fn.slider) {
        $(".art-slidecontainercontntimage01").each(function () {
            var slideContainer = $(this), tmp;
            var inner = $(".art-slider-inner", slideContainer);
            var helper = null;


            inner.children().eq(0).addClass("active");
            slideContainer.slider({
                pause: 5345,
                speed: 345,
                repeat: true,
                animation: "horizontal",
                direction: "next",
                navigator: slideContainer.siblings(".art-slidenavigatorcontntimage01"),
                helper: helper
                            });
        });
    }
});
</script><style>.art-content .art-postcontent-0 .layout-item-0 { vertical-align: bottom;  }
.art-content .art-postcontent-0 .layout-item-1 { border-top-width:1px;border-top-style:solid;border-top-color:#A3CDD7;  }
.art-content .art-postcontent-0 .layout-item-2 { color: #193339; background: ;  }
.art-content .art-postcontent-0 .layout-item-3 { color: #193339; padding-top: 0px;padding-right: 15px;padding-bottom: 0px;padding-left: 15px;  }
.art-content .art-postcontent-0 .layout-item-4 { padding: 15px;  }
.art-content .art-postcontent-0 .layout-item-5 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:0px;border-top-color:#BBC9CE;border-right-color:#BBC9CE;border-bottom-color:#BBC9CE;border-left-color:#BBC9CE;  border-collapse: separate; border-radius: 20px;  }
.art-content .art-postcontent-0 .layout-item-6 { padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px; border-radius: 20px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

.art-slidecontainercontntimage01 {
    position: relative;
        width: 437px;
    height: 285px;
        }

.art-slidecontainercontntimage01 .art-slide-item
{

}

.art-slidecontainercontntimage01 .art-slide-item {
    -webkit-transition: 345ms ease-in-out left;
    -moz-transition: 345ms ease-in-out left;
    -ms-transition: 345ms ease-in-out left;
    -o-transition: 345ms ease-in-out left;
    transition: 345ms ease-in-out left;
    position: relative;
    display: none;
    width:  100%;
    height: 100%;
}

.art-slidecontainercontntimage01 .active, .art-slidecontainercontntimage01 .next, .art-slidecontainercontntimage01 .prev {
    display: block;
}

.art-slidecontainercontntimage01 .active {
    left: 0;
}

.art-slidecontainercontntimage01 .next, .art-slidecontainercontntimage01 .prev {
    position: absolute;
    top: 0;
    width: 100%;
}

.art-slidecontainercontntimage01 .next {
    left: 100%;
}

.art-slidecontainercontntimage01 .prev {
    left: -100%;
}

.art-slidecontainercontntimage01 .next.forward, .art-slidecontainercontntimage01 .prev.back {
    left: 0;
}

.art-slidecontainercontntimage01 .active.forward {
    left: -100%;
}

.art-slidecontainercontntimage01 .active.back {
    left: 100%;
}




.art-slidecontntimage010 {
    background-image:  url('images/slidecontntimage010.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage011 {
    background-image:  url('images/slidecontntimage011.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage012 {
    background-image:  url('images/slidecontntimage012.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage013 {
    background-image:  url('images/slidecontntimage013.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage014 {
    background-image:  url('images/slidecontntimage014.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage015 {
    background-image:  url('images/slidecontntimage015.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage016 {
    background-image:  url('images/slidecontntimage016.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage017 {
    background-image:  url('images/slidecontntimage017.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage018 {
    background-image:  url('images/slidecontntimage018.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage019 {
    background-image:  url('images/slidecontntimage019.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage0110 {
    background-image:  url('images/slidecontntimage0110.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage0111 {
    background-image:  url('images/slidecontntimage0111.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidecontntimage0112 {
    background-image:  url('images/slidecontntimage0112.jpg');
    background-position:  0 0;
    background-repeat: no-repeat;
}


.art-slidenavigatorcontntimage01 {
  display: inline-block;
  position: absolute;
  direction: ltr !important;
  top: 264px;
  left: 13.27%;
  z-index: 101;
  line-height: 0 !important;
  -webkit-background-origin: border !important;
  -moz-background-origin: border !important;
  background-origin: border-box !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
    white-space: nowrap;
    }
.art-slidenavigatorcontntimage01
{
background: #BBC9CE;background: transparent;background: transparent;background: transparent;background: transparent;background: transparent;background: transparent;-svg-background: transparent;
-webkit-border-radius:15px;-moz-border-radius:15px;border-radius:15px;


padding:3px;





}
.art-slidenavigatorcontntimage01 > a
{
background: #7A959F;background: #7A959F;background: #7A959F;background: #7A959F;background: #7A959F;background: #7A959F;background: #7A959F;-svg-background: #7A959F;
-webkit-border-radius:20%;-moz-border-radius:20%;border-radius:20%;

border:1px solid #8FA5AE;

margin:0 10px 0 0;

width: 15px;

height: 15px;
}
.art-slidenavigatorcontntimage01 > a.active
{
background: #E57694;background: #E57694;background: #E57694;background: #E57694;background: #E57694;background: #E57694;background: #E57694;-svg-background: #E57694;
-webkit-border-radius:20%;-moz-border-radius:20%;border-radius:20%;

border:1px solid #D93661;

margin:0 10px 0 0;

width: 15px;

height: 15px;
}
.art-slidenavigatorcontntimage01 > a:hover
{
background: #D93661;background: #D93661;background: #D93661;background: #D93661;background: #D93661;background: #D93661;background: #D93661;-svg-background: #D93661;
-webkit-border-radius:20%;-moz-border-radius:20%;border-radius:20%;

border:1px solid #DF587C;

margin:0 10px 0 0;

width: 15px;

height: 15px;
}

</style>


<!--de aqi botones-->
<script type='text/javascript'>
//Función para ir hasta arriba del documento
//Objeto JQuery(): Devuelve una colección de elementos coincidentes con el o los argumentos pasados,
//ya sea que se encuentren en el DOM o sean creados por el paso de una cadena HTML.
/*
	jQuery.noConflict();				//Renunciar al control de jQuery de la variable $.
										//$ es un selector que le pasa atributos a JQuery()
	jQuery(document).ready(function() { //Especifica una funcion que se ejecuta cuando el DOM (Documento)
										//esta completamente cargado
		jQuery("#ArribayAbajo").hide(); 	//ocultamos el boton para el primer ejemplo
		jQuery("#Arriba").hide();		//Oculta los elementos que coincidad con el identificador
		jQuery(function () {			//JQuery(funcion()) Ejecuta la funcion cuando se carga el DOM (esta listo)
			jQuery(window).scroll(function () { //Manejador del evento 'scroll' que ejecuta cierta funcion
				if (jQuery(this).scrollTop() > 50) { //Obtiene el valor de la posicion actual de la barra de 	
													 //'scroll' con respecto al elemento, en este caso 'this'
					jQuery('#Arriba').fadeIn();		 //Muestra los elementos coincidentes con un efecto de  		
													 //desvanecimiento
				} else {
					jQuery('#Arriba').fadeOut();     //Oculta los elementos coincidentes con un efecto de  		
													 //desvanecimiento
				}
			});
			jQuery('#Arriba').click(function () {  //Manejador del evento click que ejecuta cierta funcion
				jQuery('body,html').animate({scrollTop: 0}, 800); //Animate(): Realiza una animación personalizada 	
																  //de un conjunto de propiedades.
				return false;
			});
		});
	});
*/	
	$(document).ready(function() {
		$("#Arriba").hide(); //ocultamos el boton para el primer ejemplo
        $('#Abajo').fadeIn();
        $('#Arriba1').fadeOut();
		
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 50) {
					$('#Arriba1').fadeIn();
				} else {
					$('#Arriba1').fadeOut();
				}
			});
			$('#Arriba1').click(function () {
				$('body,html').animate({scrollTop: 0}, 1500);
				return false;
			});
			$('#Abajo').click(function () {
				$('body,html').animate({scrollTop: $(document).height()}, 10); //obtenemos el alto del documento
				return false;
			});
		});
	});
</script>