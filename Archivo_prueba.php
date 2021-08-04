

<!DOCTYPE html>
<html lang="es-mx" >
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0, maximum-scale=1.0 " /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><meta name="theme-color" content="rgb(96,126,19)" /><title>

</title><link rel="shortcut icon" href="../favicon.ico" />
    <script src="../JS/jquery-1.12.3.js" type="text/javascript"></script>  
    <script type="text/javascript">
        (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-84046313-1', 'auto');
        ga('send', 'pageview');

</script>
   
  
    <link href="../CSS/StyleSheetMain.css" rel="stylesheet" type="text/css" /><link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet" type="text/css" />
    <style>
        b {
            color:#3e3e3e;
        }      
    
    </style>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script type="text/javascript">
     $(document).ready(function($) {
    $('#accordion').find('.accordion-toggle').click(function(){

      //Expand or collapse this panel
      $(this).next().slideToggle('slow');

      //Hide the other panels
     $(".accordion-content").not($(this).next()).slideUp('slow');

    });
        });


        $(function () {
            $("#tabs").tabs({ show: { effect: "fade", duration: 900 } });
        });

</script>




</head>
<body >
     
    <div class="main" style="display:block;">
  <div class="wrapper">
   <input type="radio" name="menu-bar" id="menuOpen" class="menu-inputs">        
   <input type="radio" name="menu-sub" id="close2" class="menu-close"/>
   <input type="radio" name="menu-bar" id="close" class="menu-close"/>
   <input type="radio" name="menu-bar" id="demos" class="menu-inputs"/>
   <input type="radio" name="menu-bar" id="menus" class="menu-inputs"/>
   <input type="radio" name="menu-bar" id="accesosx" class="menu-inputs"/>
   <input type="radio" name="menu-bar" id="alumnos" class="menu-inputs"/>
   <input type="radio" name="menu-bar" id="egresado" class="menu-inputs"/>
   <input type="radio" name="menu-bar" id="empresario" class="menu-inputs"/>
   <input type="radio" name="menu-bar" id="servicios" class="menu-inputs"/>
   <input type="radio" name="menu-bar" id="cic4" class="menu-inputs"/>
   <input type="radio" name="menu-bar" id="padres" class="menu-inputs"/>
   <input type="radio" name="menu-sub" id="calidad" class="menu-inputs"/>   
   <input type="radio" name="menu-sub" id="identidad" class="menu-inputs"/>
  

   <input type="radio" name="menu-sub" id="oferta" class="menu-inputs"/>
   <input type="radio" name="menu-bar" id="ofertaD" class="menu-inputs"/>

   <input type="radio" name="menu-sub" id="transparencia" class="menu-inputs"/>
   <input type="radio" name="menu-sub" id="escolares" class="menu-inputs"/>
   <input type="radio" name="menu-sub" id="escolares2" class="menu-inputs"/>
   <input type="radio" name="menu-sub" id="reglamentos" class="menu-inputs"/>
   <input type="radio" name="menu-sub" id="sector" class="menu-inputs"/>
   <input type="radio" name="menu-sub" id="alianzas" class="menu-inputs"/>
   <input type="radio" name="menu-sub" id="docentes" class="menu-inputs"/>
   <input type="radio" name="menu-sub" id="didet" class="menu-inputs"/>
   <input type="radio" name="menu-sub" id="becas" class="menu-inputs"/>
   <input type="radio" name="menu-sub" id="becas2" class="menu-inputs"/>
   <input type="radio" name="menu-sub" id="becas3" class="menu-inputs"/>
 
   <input type="checkbox" name="menu-bar" id="portales" class="menu-inputs"/>
   <input type="checkbox" name="menu-bar3" id="intranet" class="menu-inputs"/>
   <input type="radio" name="menu-bar" id="accesos" class="menu-inputs"/>

   <input type="radio" name="menu-bar3" id="close3" class="menu-inputs"/>

   <div class="menu-superior"  >
   <div style="margin: 0 auto; width:100%;">   
   <div class="barra-menu" style="max-width:780px; margin:0 auto;" >
   <div class="barra-menu-interior">
   <ul>
   <li style="list-style:none;"><h1>&nbsp;</h1></li>
                   <li>
                    <label for="accesos">OFERTA EDUCATIVA</label>
                    <label for="close" class="close-menu" id="accesos-close"></label>
                  </li>
                  <li>
                      <img src="../Images/disc-verde.png" />
                  </li>
                   <li>
                      <a id="HyperLink15" href="../Alumno/Default.aspx?gI2Sr=251">CALENDARIO ESCOLAR</a>
                  </li>                  
                   <li ><img src="../Images/disc-verde.png" /></li>                       
                  <li>
                      <a href="http://alumnos.uteq.edu.mx/" target="_blank">PORTAL DE ALUMNOS</a>
                  </li> 
                    <li>
                      <img src="../Images/disc-verde.png" />
                  </li>
                   <li>
                      <a href="http://lizard.uteq.edu.mx/pub/alumnos.php" target="_blank">LIZARD</a>
                  </li>   
                  <li>
                      <img src="../Images/disc-verde.png" />
                  </li>
                   <li>
                      <a href="../Sitios/Idiomas.aspx" >CURSOS DE IDIOMAS</a>
                  </li> 
                  <li>
                      <img src="../Images/disc-verde.png" />
                  </li>
                  <li>                   
                    <label for="intranet">TRANSPARENCIA</label>
                    <label for="close" class="close-menu" id="sub-intranet-close"></label>
                  </li>  
       <li>
                      <img src="../Images/disc-verde.png" />
                  </li>
                  <li>
                      <a href="../ConoceLaUTEQ/Default.aspx?gXr=217" >AVISOS DE PRIVACIDAD</a>
                  </li> 

              </ul>
           </div>
          </div>
        <div id="sub-intranet" class="menu-sub2" style="z-index:1500; position:relative; ">
           <div class="sub-inner2"  >
				<ul style="left:250px; border:0px solid white; right:20px;">
                    <li>                 
                    <label for="portales">Transparencia Estatal</label>
                    <label for="close" class="close-menu" id="portales-close"></label>                               
                    </li>
                     <li>
                      <img src="../Images/disc-verde.png" />
                  </li>
			      <li>
                      <a id="LkbTransFed" href="Default.aspx?gXr=191">Transparencia Federal</a>                   
                  </li>
                    <li>
                      <a id="hlContaGub" href="Default.aspx?gXr=202">Ley de Contabilidad Gubernamental </a>                   
                  </li>
                   <li>
                      <a id="hlDiscipFin" href="Default.aspx?gXr=203">Ley de Disciplina Financiera de las EF</a>                   
                  </li>
                    <li>
                      <a id="hlSol" href="http://www.plataformadetransparencia.org.mx/web/guest/sac">Solicitudes de Información Pública</a>                   
                  </li> 

                  
                </ul>
            </div>


             <div id="sub-portales" class="menu-sub2" style="z-index:1500; position:relative; ">
           <div class="sub-inner2">
		   		<ul>
			   <li>
                         <a id="LkbTransFed2" href="Default.aspx?gXr=146">Artículo 66</a>                 
                    </li>
                     <li>
                      <img src="../Images/disc-verde.png" />
                  </li>
			      <li>
                      <a id="HyperLink54e" href="Default.aspx?gXr=90">Artículo 67</a>                   
                  </li>          
                </ul>
           </div>
       </div>


       </div>
      
      
        <div id="sub-accesos" class="menu-sub2" style="z-index:1500; position:relative; ">
           <div class="sub-inner2">
				<ul>
			      <li><a href="http://consumibles.uteq.edu.mx/" target="_blank">Sistema de Consumibles (PA)</a></li>
                    <li ><img src="../Images/disc-verde.png" /></li> 
                   <li><a href="http://bsc.uteq.edu.mx/" target="_blank">Balanced Scorecard (BSC)</a></li>
                    <li ><img src="../Images/disc-verde.png" /></li> 
                  <li><a href="http://ebc.uteq.edu.mx/" target="_blank">Sistema EBC</a></li> 
                     <li ><img src="../Images/disc-verde.png" /></li> 
                  <li><a href="http://siil1.uteq.edu.mx" target="_blank"> Sistema Integral de Idiomas (SIIL 1)</a></li>                        
                </ul>
               </div>
            </div>
          </div>
       </div>     
      
      <div class="menu-wrap" >
        <div class="menu-wrap-inner" >
        

        <div class="logo">  
            <a href="/"><img src="../Images/Logo UTEQ blanco.png"  id="logo"/></a>
	    </div>       

   		<div class="menu-bar">
			<div class="menu-bar-inner" id="menu-main" >               
                <ul>
                    <li class="demos" >
                    <label for="demos" style="border-left: 0px solid #f8f8f8;" >CONOCE LA UTEQ</label>
                    <label for="close" class="close-menu" id="demos-close"></label>
                    </li>

                    <li class="menus"  >
                        <label for="menus"  >ASPIRANTE</label>
                        <label for="close" class="close-menu" id="menus-close"></label>
                    </li>     

                    <li class="alumnos">                        
                       <label for="alumnos">ALUMNO</label>
                       <label for="close" class="close-menu" id="alumnos-close"></label>
                    </li>      

                    <li  class="padres" >
                       <label for="padres">PADRES DE FAMILIA</label>
                       <label for="close" class="close-menu" id="padres-close"></label>
                    </li> 
                 
                    <li  class="egresado"> 
                       <label for="egresado" >EGRESADO</label>
                       <label for="close" class="close-menu" id="egresado-close"></label>

                    </li>

                     <li  class="empresario"> 
                         <label for="empresario" >EMPRESARIO</label>
                       <label for="close" class="close-menu" id="empresario-close"></label>

                    </li>

                     <li  class="servicios">
                          <label for="servicios">NUESTRAS CAPACIDADES</label>
                       <label for="close" class="close-menu" id="servicios-close"></label>

                    </li>     
                    
                     <li  class="cic4" style="border:none; ">
                         
                        <a id="HyperLink546" href="../CIC4/Default.aspx?gC2Sr=113">
                         <label for="cic40" style="border-right: 0px solid #f8f8f8;" >CIC 4.0</label> 
                         <label for="close" class="close-menu" id="cic4-close"></label>
                         </a>                       
                    </li>    
                    
                     <li  class="accesosx" style="border:none; padding-bottom:10px; ">
                         
                     
                         <label for="accesosx" style="border-right: 0px solid #f8f8f8;" >ACCESOS</label> 
                         <label for="close" class="close-menu" id="accesosx-close"></label>
                                           
                    </li>             

                </ul>
                
                </div>
                
	
            </div>

        <div class="menu-bars" >                      
	                    <label  for="menuOpen" ><img src="../Images/bars-menu.png" width="20" /></label>
                         <label for="close" class="close-menu" id="bars-close"></label>  
                       
        </div> 

	
            </div>

		<div id="sub-demos" class="menu-sub">
       
			<div class="sub-inner">
				<ul>
			      <li><a id="hfConoceLaUteq" href="Default.aspx?gXr=38">Historia</a></li>
                  <li><a id="HyperLink6" href="LienaDelTiempo.aspx">Línea del Tiempo</a></li>
                  <li><a id="hlMision" href="Default.aspx?gXr=35">Misión, Visión, Valores y Objetivos</a></li>                  
                  <li><a id="hlDirectorio" href="Default.aspx?gXr=39">Directorio</a></li>
                  <li><a id="hlkContraloriax" href="Default.aspx?gXr=180">Contraloría Social</a></li>  
                  <li class="calidad" ><label for="calidad" >Calidad UTEQ</label><label for="close2" class="close-menu" id="calidad-close"></label>

                  </li>                
                  <li><a id="hlMapa" href="MapaUTEQ.aspx">Mapa</a></li>
                    <li><a id="hlMapaInteractivo" href="../files/Mapa_interactivo_UTEQ_servicios_2020.pdf" target="_blank">Mapa Interactivo</a></li>
                  <li>
                      <a id="hlComoLlegar" href="Default.aspx?gXr=43">¿Cómo llegar a la UTEQ?</a>
                              
                 <li> <a id="HyperLink2" href="Default.aspx?gXr=100">Modelo Educativo</a></li>

                    <li class="identidad" >
                          <label for="identidad" >Identidad Institucional</label>
                       <label for="close2" class="close-menu" id="identidad-close"></label>

                  </li>     

				</ul>
			</div>
             <div id="sub-calidad" class="menu-sub" style="background-color:transparent;">
                   <div style="width:1014px; margin:0 auto; height:2px; background-color:green; "></div><br />  
			<div class="sub-inner">                 
				<ul>               
					<li><a id="hlCertificaciones" href="Default.aspx?gXr=41">Sistema de Gestión de Calidad</a></li>
                    <li style="width:400px;"> <a id="hlSGC" href="Default.aspx?gXr=99">Certificación y Acreditación de Programas Educativos</a></li>        
			
				</ul>
			</div>
		</div>

             <div id="sub-identidad" class="menu-sub" style="background-color:transparent;">
                   <div style="width:1014px; margin:0 auto; height:2px; background-color:green; "></div><br />  
			<div class="sub-inner">                 
				<ul>               
		<li style="width:auto;"><a id="hlManualIdentidad" href="Default.aspx?gXr=97">Manual de Identidad</a></li>
        <li><a id="hlGaleria" href="../Noticias/Galeria.aspx">Galeria</a></li>			
		</ul>
		</div>
		</div>

       
		</div>

		<div id="sub-menus" class="menu-sub">
			<div class="sub-inner">
				<ul> 
                    
                      <li class="oferta" >
                          <label for="oferta" >Oferta Educativa</label>
                       <label for="close2" class="close-menu" id="oferta-close"></label>

                  </li>     
                   <li>
                       <a id="hlAdmisiones" href="../Aspirante/Default.aspx?gI2Sr=52">Admisiones</a>
                   </li>
                     <li class="becas2">
                      
                           <label for="becas2" >Becas</label>
                       <label for="close2" class="close-menu" id="becas2-close"></label>
                   </li>                      
                     <li>
                       <a id="hlModelo" href="../Aspirante/Default.aspx?gI2Sr=100">Modelo Educativo</a>
                   </li>  
                    <li>
                       <a id="hlTalentos" href="../Aspirante/Default.aspx?gI2Sr=88">Programa Talentos</a>
                   </li>                 
				    <li>
                       <a id="hlEstancia" href="../Aspirante/Default.aspx?gI2Sr=120">Bachillerato Universitario</a>
                   </li>  	
                    
                     <li>
                       <a id="hlexani" href="../Aspirante/Default.aspx?gI2Sr=132">Criterios de Selección</a>
                   </li>   
                     <li>
                       
                   </li>  

				</ul>
			</div>
              <div id="sub-oferta" class="menu-sub"  style="background-color:transparent; ">
                   <div style="width:1014px; margin:0 auto; height:2px; background-color:green; "></div><br />  
			<div class="sub-innerx"  > 

                <div class="oferta-content" style="visibility:hidden;display:none; " >

               <div style="margin:0 auto;"> <h2 style="font-family:'Century Gothic'; color:dimgrey;  font-weight:bold; ">EN ACTUALIZACIÓN</h2></div>

                </div>
                
                <div class="oferta-content" style="margin-bottom:2px;" id="oferta-row1" >
                        
                  <div style="width:50%; padding:3px; margin-left:2px; border:1px dotted #2d64ae; height:215px;" id="oferta-dea">
                    <div style="display:inline-flex; width:100%; align-items:center;" >
                        <div style="width:45%; padding:3px; ">
                     <div style="  background-image:url('../Images/dea-arrow.png'); background-position:right; background-repeat:no-repeat;">
                    <h3><span style="color:#17a5bc;">TSU</span> en Administración<br />
                    <a id="HyperLink41" href="../Aspirante/Default.aspx?gI2Sr=199">Área Capital Humano</a>
                    </h3>
                         </div>
                     <div style=" background-image:url('../Images/dea-arrow.png'); background-position:right; background-repeat:no-repeat;">
                         <h3><span style="color:#17a5bc;">TSU</span> en Desarrollo de Negocios<br />
                    <a id="HyperLink51" href="../Aspirante/Default.aspx?gI2Sr=200">Área Servicios Posventa Automotriz</a><br />
                           <a id="HyperLink52" href="../Aspirante/Default.aspx?gI2Sr=201">Área Mercadotecnia</a>
                    </h3>

                    </div>
                            </div>
                    <div style="width:45%; padding:3px; padding-bottom:16px;  margin-left:10px; ">
                       <a id="HyperLink38" href="../Aspirante/Default.aspx?gI2Sr=231"><h3>Continuidad a <br /> <span style="color:#17a5bc;"> Licenciatura</span> en Gestión del Capital Humano</h3></a>
                      <a id="HyperLink42" href="../Aspirante/Default.aspx?gI2Sr=230"><h3>Continuidad a <br /> <span style="color:#17a5bc;"> Licenciatura</span> en Innovación de Negocios y Mercadotecnia</h3></a>
                    </div>

                    </div>
                   
                 <div style="display:inline-flex; width:100%; align-items:center;" >  
                     <div style="width:45%; padding:3px;   background-image:url('../Images/dea-arrow.png'); background-position:right; background-repeat:no-repeat;">    
                 <h3><span style="color:#17a5bc;">TSU</span> en Logística<br />
                    <a id="HyperLink43" href="../Aspirante/Default.aspx?gI2Sr=18">Área Cadena de Suministros</a><br />
                    
                </h3>
                         </div>
                     <div  style="width:45%; padding:3px; margin-left:10px;">
                         <a id="HyperLink45" href="../Aspirante/Default.aspx?gI2Sr=235"><h3>Continuidad a <br /> <span style="color:#17a5bc;"> Licenciatura</span> en Diseño y Gestión de Redes Logísticas</h3></a>
                     </div>
                     </div>
                    </div>


                  <div style="width:50%; padding:3px; margin-left:2px; border:1px dotted #ed6825; height:215px;" id="oferta-di">
                    <div style="display:inline-flex; width:100%; align-items:initial;" >
                     <div style="width:45%; padding:3px;   background-image:url('../Images/industrial-arrow.png'); background-position:right; background-repeat:no-repeat;">
                    <h3><span style="color:#ed6825;">TSU</span> en Mantenimiento<br />
                    <a id="HyperLink46" href="../Aspirante/Default.aspx?gI2Sr=23">Área Industrial</a>
                    </h3>
                    </div>
                    <div style="width:45%; padding:3px;  margin-left:10px; ">
                      <a id="HyperLink47" href="../Aspirante/Default.aspx?gI2Sr=11"><h3>Continuidad a <br /> <span style="color:#ed6825;"> Ingeniería</span> en Mantenimiento Industrial</h3></a>
                    </div>

                    </div>

                     <div style="display:inline-flex; width:100%; align-items:center;" >
                     <div style="width:45%; padding:3px;   background-image:url('../Images/industrial-arrow.png'); background-position:right; background-repeat:no-repeat;">
                    <h3><span style="color:#ed6825;">TSU</span> en Nanotecnología<br />
                    <a id="HyperLink44" href="../Aspirante/Default.aspx?gI2Sr=15">Área Materiales</a>
                    </h3>
                    </div>
                    <div style="width:45%; padding:3px;  margin-left:10px; ">
                      <a id="HyperLink53" href="../Aspirante/Default.aspx?gI2Sr=12"><h3>Continuidad a <br /> <span style="color:#ed6825;"> Ingeniería</span> en Nanotecnología</h3></a>
                    </div>

                    </div>
                   
                 <div style="display:inline-flex; width:100%; align-items:center;" >  
                     <div style="width:45%; padding:3px;   background-image:url('../Images/industrial-arrow.png'); background-position:right; background-repeat:no-repeat;">    
                 <h3><span style="color:#ed6825;">TSU</span> en Procesos Industriales<br />
                    <a id="HyperLink48" href="../Aspirante/Default.aspx?gI2Sr=21">Área Manufactura</a><br />
                     <a id="HyperLink49" href="../Aspirante/Default.aspx?gI2Sr=24">Área Plásticos</a>
                </h3>
                         </div>
                     <div  style="width:45%; padding:3px; margin-left:10px;">
                         <a id="HyperLink50" href="../Aspirante/Default.aspx?gI2Sr=13"><h3>Continuidad a <br /> <span style="color:#ed6825;"> Ingeniería</span> Industrial</h3></a>
                     </div>
                     </div>                     
                      
                      
                    <div style="display:inline-flex; width:100%; align-items:center;" >  
                     <div style="width:45%;  padding:3px;   background-image:url('../Images/industrial-arrow.png'); background-position:right; background-repeat:no-repeat;">   
                 <h3><span style="color:#ed6825;">TSU</span> en Mecánica<br />
                    <a id="HyperLink540" href="../Aspirante/Default.aspx?gI2Sr=196">Área Automotriz</a><br />
                    <a id="HyperLink954" href="../Aspirante/Default.aspx?gI2Sr=214">Área Moldes y Troqueles</a>
                </h3>
                          </div>
                        
                 
                           <div style="width:45%; padding:3px; margin-left:10px; background-image:url('../Images/nueva_carrera.jpg'); background-position-x:103%; background-position-y:17%; background-repeat:no-repeat;">    
                       <h3>Continuidad a <br /><a id="hlmm" href="../Aspirante/Default.aspx?gI2Sr=249"><span style="color:#ed6825;">Ingeniería</span> Metal Mecánica<br /></a>
                  

                </h3>
                     </div>
                     </div>       
                                         
              </div>

                </div>	

                <div class="oferta-content" id="oferta-row2" >
                 <div style="width:50%; padding-right:3px; margin-left:2px;  border:1px dotted transparent;" id="oferta-ambiental" > 
                <div style="width:100%; border-right:1px solid #fff; padding:3px; margin-bottom:1px; padding-right:0px;  border:1px dotted #9ec74c; height:110px;" id="oferta-amb0" >



                    <div style="display:inline-flex; width:100%; align-items:center;" >
                     
                        
                        
                        <div style="width:45%; padding:3px;   background-image:url('../Images/ambiental-arrow.png'); background-position:right; background-repeat:no-repeat;">
                    <h3><span style="color:#9ec74c;">TSU</span> en Química<br />
                    <a id="hlQTA" href="../Aspirante/Default.aspx?gI2Sr=25">Área Tecnología Ambiental</a>
                    </h3>
                    </div>
                     <div style="width:45%; padding:3px;  margin-left:10px; ">
                      <a id="HyperLink34" href="../Aspirante/Default.aspx?gI2Sr=8"><h3>Continuidad a <br /> <span style="color:#9ec74c;"> Ingeniería</span> Ambiental</h3></a>
                    </div>       
                    
                    </div>
                   
                 <div style="display:inline-flex; width:100%; align-items:center;" >  
                     <div style="width:45%; padding:3px;   background-image:url('../Images/ambiental-arrow.png'); background-position:right; background-repeat:no-repeat;">    
                 <h3><span style="color:#9ec74c;">TSU</span> en Energías Renovables<br />
                    <a id="HyperLink32" href="../Aspirante/Default.aspx?gI2Sr=27">Área Energía Solar</a><br />
                     <a id="HyperLink33" href="../Aspirante/Default.aspx?gI2Sr=26">Área Calidad y Ahorro de Energía</a>
                </h3>
                         </div>
                     <div  style="width:45%; padding:3px; margin-left:10px;">
                         <a id="HyperLink35" href="../Aspirante/Default.aspx?gI2Sr=9"><h3>Continuidad a <br /> <span style="color:#9ec74c;"> Ingeniería</span> en Energías Renovables</h3></a>
                     </div>
                     </div>           
                    </div>    
                <div style="width:100%;  padding:3px; padding-right:0px; border:1px dotted #e93b7a; height:70px;">

                    <div style="width:100%; padding:3px; padding-top:10px;  background-image:url('../Images/nueva_carrera.jpg'); background-position-x:63%; background-position-y:63%; background-repeat:no-repeat;">
                    <h3>
                    <a id="HyperLink5400" href="../Aspirante/Default.aspx?gI2Sr=197"><span style="color:#e93b7a;">TSU</span> en Lengua Inglesa.</a>
                    </h3>
                    </div>
                    
                </div>    
                   </div>    


                  <div style="width:50%; padding:3px; margin-left:2px; border:1px dotted #17a5bc;  height:190px;" id="oferta-dtai">
           






                                          <div style="display:inline-flex; width:100%; align-items:initial;" >
                     <div style="width:45%; padding:3px;   background-image:url('../Images/dtai-arrow.png'); background-position:right; background-repeat:no-repeat;">
                    <h3><span style="color:#2d64ae;">TSU</span> en Mecatrónica<br />
                    <a id="HyperLink554" href="../Aspirante/Default.aspx?gI2Sr=22">Área Automatización</a>
                    </h3>
                    </div>
                    <div style="width:45%; padding:3px;  margin-left:10px; ">
                      <a id="HyperLink5s5" href="../Aspirante/Default.aspx?gI2Sr=14"><h3>Continuidad a <br /> <span style="color:#2d64ae;"> Ingeniería</span> en Tecnologías de Automatización</h3></a>
                    </div>

                    </div>
                   
                 <div style="display:inline-flex; width:100%; align-items:center;" >  
                     <div style="width:38%; padding:3px;    ">    
                 <h3><span style="color:#2d64ae;">TSU</span> en Tecnologías de la Información<br />
                    <a id="HyperLink58" href="../Aspirante/Default.aspx?gI2Sr=222">Área Desarrollo de Software Multiplataforma</a><br />  <br />
                     <a id="HyperLink59" href="../Aspirante/Default.aspx?gI2Sr=221">Área Infraestructura de Redes <br/> Digitales</a>
                </h3>
                         </div>
                     <div  style="width:52%; padding-top:20px; padding:3px;  margin-left:10px; ">
                           <br />  <br />
                       <div style="background-image:url('../Images/dtai-arrow.png');padding-left:39px; background-position:left; background-repeat:no-repeat;">  <a id="HyperLink60" href="../Aspirante/Default.aspx?gI2Sr=242"><h3>Continuidad a <br /> <span style="color:#2d64ae;"> Ingeniería</span> en Desarrollo y Gestión de Software</h3></a>
                       </div>
                       <div style="background-image:url('../Images/dtai-arrow.png'); padding-left:39px; background-position:left; background-repeat:no-repeat;">  <a id="HyperLink36" href="../Aspirante/Default.aspx?gI2Sr=243"><h3>Continuidad a <br /> <span style="color:#2d64ae;"> Ingeniería</span> en Redes Inteligentes y Ciberseguridad</h3></a>
                       </div>
                     </div>

                     </div>      

               
                    </div>              
                </div>		

                  <div style="display:inline-flex; width:99%; align-items:center; border:1px dotted #000; padding:3px; margin:3px; " >  
                     <div style="width:100%; padding:3px;  background-color:#fff; ">    
                 <h3>POSGRADOS<br />
                     <a href="https://www.uteq.edu.mx/Aspirante/Default.aspx?gI2Sr=240" target="_blank"><span style="color:rgb(215, 206, 66);">Maestría </span> en Ingeniería para la Manufactura Inteligente </a> </h3>
                        
                      <h3><a href="https://www.uteq.edu.mx/Aspirante/Default.aspx?gI2Sr=250" target="_blank"><span style="color:rgb(215, 206, 66);">Maestría </span> en Economía Circular </a><br /></h3>
               
                         </div>
               
                     </div>      

              
               
                     </div> 
             </div>

   		


              <div id="sub-becas2" class="menu-sub" style="background-color:transparent;">
                   <div style="width:1014px; margin:0 auto; height:2px; background-color:green; "></div><br />  
			<div class="sub-inner">                 
				<ul>               
					<li><a id="HyperLink23" href="../Aspirante/Default.aspx?gI2Sr=118">Becas Institucionales</a></li>
                    <li><a id="HyperLink24" href="../Aspirante/Default.aspx?gI2Sr=119">Becas Externas</a></li>
			
				</ul>
			</div>
		</div>


          </div>

		

        <div id="sub-alumnos" class="menu-sub">
			<div class="sub-inner">
				<ul  >
                   <li class="escolares">  <label for="escolares" >Servicios Escolares</label>
                       <label for="close2" class="close-menu" id="escolares-close"></label>
                    </li>

                <li><a id="hlDeportivas" href="../Alumno/Default.aspx?gI2Sr=149">Actividades Deportivas</a></li>               
				<li><a id="hlCulturales" href="../Alumno/Default.aspx?gI2Sr=253">Actividades Culturales</a></li> 
                <li class="becas">
                   
                      <label for="becas" >Becas</label>
                       <label for="close2" class="close-menu" id="becas-close"></label>

                </li> 
                <li><a id="hlMovilidad" href="../Alumno/Default.aspx?gI2Sr=121">Movilidad</a></li> 
                <li><a id="hlEstadias" href="../Alumno/Default.aspx?gI2Sr=124">Estadías</a></li> 
                <li><a id="hlVisitas" href="../Alumno/Default.aspx?gI2Sr=125">Visitas a Empresas</a></li> 
            
                <li><a id="hlRedJusticiaPaz" href="../Alumno/Default.aspx?gI2Sr=128">Red de Justicia y Paz</a></li>                    
                <li><a id="hlReglamentos" href="../Alumno/Default.aspx?gI2Sr=103">Reglamentos</a>
                </li>

                     <li><a id="hlCalendario" href="../Alumno/Default.aspx?gI2Sr=251">Calendario</a></li>               
				<li><a id="hlServicioSocial" href="../Alumno/Default.aspx?gI2Sr=127">Servicio Social</a></li> 

                <li><a id="hlIdiomas" href="../Sitios/Idiomas.aspx">Idiomas</a></li> 
                  <li><a id="HyperLink5" href="../Alumno/Default.aspx?gI2Sr=232">Biblioteca</a></li>         			
				</ul>
			</div>
            <div id="sub-escolares" class="menu-sub" style="background-color:transparent;">
            <div style="width:1014px; margin:0 auto; height:2px; background-color:green; ">
            </div>
                <br />  
			<div class="sub-inner">                 
				<ul>               
					<li><a id="hlReisncriociones" href="../Alumno/Default.aspx?gI2Sr=101">Reinscripción</a></li>
                    <li><a id="hlReincorporacion" href="../Alumno/Default.aspx?gI2Sr=102">Reincorporación</a></li>
			        <li><a id="hlTitTsu" href="../Alumno/Default.aspx?gI2Sr=192">Titulación TSU</a></li>
                    <li><a id="hlTitIng" href="../Alumno/Default.aspx?gI2Sr=193">Titulación INGENIERÍAS</a></li>
				    <li><a id="hlGuiasEstIng" href="../Alumno/Default.aspx?gI2Sr=55">Otros Servicios</a></li>
                    <li><a id="HyperLink5432" href="../Alumno/Default.aspx?gI2Sr=208">Cuotas por Servicios Académicos</a></li>
                     <li><a id="hlDirectorioServ" href="../Alumno/DirectorioSE.aspx">Directorio de Servicios</a></li>
                </ul>
			</div>
		</div>

             <div id="sub-reglamentos" class="menu-sub" style="background-color:transparent;">
                   <div style="width:1014px; margin:0 auto; height:2px; background-color:green; "></div><br />  
			<div class="sub-inner">                 
				<ul>               
					<li><a id="hlAcademico">Académico</a></li>
                    <li><a id="hlLaboratorios" href="../Content/Files/Laboratorios.pdf">Laboratorios</a></li>
			        <li><a id="hlBiblioteca">Biblioteca</a></li>                   
                </ul>
			</div>
		</div>


        <div id="sub-becas" class="menu-sub" style="background-color:transparent;">
                   <div style="width:1014px; margin:0 auto; height:2px; background-color:green; "></div><br />  
			<div class="sub-inner">                 
				<ul>               
					<li><a id="HyperLink25" href="../Alumno/Default.aspx?gI2Sr=118">Becas Instituacionales</a></li>
                    <li><a id="HyperLink26" href="../Alumno/Default.aspx?gI2Sr=119">Becas Externas</a></li>
			
				</ul>
			</div>
		</div>
		</div>

        <div id="sub-egresado" class="menu-sub">
			<div class="sub-inner">
				<ul>               
					<li><a id="hlBolsa" href="http://www.uteq.edu.mx/Sitios/BolsaDeTrabajo.aspx">Bolsa de Trabajo</a></li>
                    <li><a id="hlEducacionCont" href="http://www.uteq.edu.mx/Egresado/Default.aspx?g4Hr=162">Educación Continua</a></li>
			        <li><a id="hlIncubadora" href="../Egresado/Default.aspx?g4Hr=151">Incubadora de Empresas</a></li>
                    <li><a id="hlSeguimientoEgresados" href="../Egresado/Default.aspx?g4Hr=153">Seguimiento a egresados</a></li>	
                    <li><a id="hlIdiomas2" href="../Sitios/Idiomas.aspx">Idiomas</a></li>	
                     <!-- <li><a id="hlDescuentos" href="../Egresado/Default.aspx?g4Hr=210">Descuento para Egresados</a></li>	-->
				</ul>
			</div>
		</div>

        <div id="sub-empresario" class="menu-sub">
			<div class="sub-inner">
				<ul >               
					  <li class="sector">  
                       <label for="sector" >Servicios al Sector Productivo</label>
                       <label for="close2" class="close-menu" id="sector-close"></label>
                    </li>
                      <li><a id="HyperLink54sd" href="../Egresado/Default.aspx?g4Hr=151">Incubadora de Empresas</a></li>
                    <li><a id="hlAlumnosEstadias" href="http://www.uteq.edu.mx/Empresario/Default.aspx?g4Hr=58">Solicitud Alumnos para Estadías</a></li>
                    <li class="alianzas">  
                       <label for="alianzas" >Alianzas Estratégicas</label>
                       <label for="close2" class="close-menu" id="alianzas-close"></label>
                    </li>      
                    <li><a id="HyperLink4" href="http://www.uteq.edu.mx/Egresado/Default.aspx?g4Hr=162">Educación Continua</a></li>  
                    <li><a id="hlBolsaDeTrabajo" href="http://www.uteq.edu.mx/Sitios/BolsaDeTrabajo.aspx">Bolsa de Trabajo</a></li>
			         
                    <li></li>
                   
                   
                                  				
				</ul>
			</div>

          <div id="sub-sector" class="menu-sub" style="background-color:transparent;">
                   <div style="max-width:1024px; margin:0 auto; height:2px; background-color:green; "></div><br />  
			<div class="sub-inner">                 
				<ul>               
					<li><a id="hlCursos" href="../Empresario/Default.aspx?g4Hr=137">Centro de evaluación CONOCER</a></li>
                    <li><a id="hlCapacitacion" href="../Empresario/Default.aspx?g4Hr=135">Capacitación y Consultoría</a></li>
                   
			        <li></li>
                    <li><a id="hlEduContinua3" href="http://www.uteq.edu.mx/Empresario/Default.aspx?g4Hr=162">Educación Continua</a></li>
                
                </ul>
			</div>
			</div>
                       
       <div id="sub-alianzas" class="menu-sub" style="background-color:transparent;">
        <div style="max-width:1024px; margin:0 auto; height:2px; background-color:green; "></div><br />  
			<div class="sub-inner">                 
				<ul>               
					<li><a id="hlEricsson" href="../Empresario/Default.aspx?g4Hr=105">Ericsson</a></li>
                    <li><a id="hlPeugeot" href="../Empresario/Default.aspx?g4Hr=104">Peugeot</a></li>
			        <li><a id="hlIntel" href="../Empresario/Default.aspx?g4Hr=107">Intel</a></li>
                    <li><a id="hlPolimeros" href="../Empresario/Default.aspx?g4Hr=106">Polímeros</a></li>
                    <li><a id="hlNcTech" href="../Empresario/Default.aspx?g4Hr=108">NCTech</a></li>
                    <li><a id="hlCleanTech" href="../Empresario/Default.aspx?g4Hr=109">CleanTech</a></li>
                    <li><a id="HyperLink18" href="../Empresario/Default.aspx?g4Hr=110">Proyectos Productivos</a></li>
                    <li><a id="HyperLink19" href="../Empresario/Default.aspx?g4Hr=111">FUMEC</a></li>
               </ul>
		   </div>
		</div>


     </div>

        <div id="sub-servicios" class="menu-sub">
			<div class="sub-inner3">
				<ul>    
                      <li style="width:280px;" class="didet">
                   
                         <label for="didet" >Investigación, Innovación y Desarrollo Tecnológico</label>
                       <label for="close2" class="close-menu" id="didet-close"></label>
                    </li>
                     
		    <li><a id="hlIdiomas3" href="../Sitios/Idiomas.aspx">Idiomas</a></li>
                    <li><a id="hlIncubadora2" href="../Servicios/Default.aspx?gI2Sr=151">Incubadora de Empresas</a></li>
			        <li><a id="hlEduContinua2" href="http://www.uteq.edu.mx/Servicios/Default.aspx?gI2Sr=162">Educación Continua</a></li>
                    <li><a id="hlCursosCapacitacion" href="/Servicios/Default.aspx?gI2Sr=135">Capacitación Técnica</a></li>	
                   
                   <li class="docentes">  
                       <label for="docentes" >Docentes</label>
                       <label for="close2" class="close-menu" id="docentes-close"></label>
                    </li>
                    
                    <li><a id="HyperLink17" href="../Servicios/Default.aspx?gI2Sr=173">Laboratorios</a></li>	
                      <li><a id="HyperLink5x4" href="../Servicios/Default.aspx?gI2Sr=187">Aceleradora de Empresas</a></li>
				</ul>
			</div>

        <div id="sub-docentes" class="menu-sub" style="background-color:transparent;">
                   <div style="width:1014px; margin:0 auto; height:2px; background-color:green; "></div>
                    <br/>  
			<div class="sub-inner3">                 
				<ul>               
					<li><a id="HyperLink12" href="/Servicios/Default.aspx?gI2Sr=139">Cuerpos Académicos</a></li>
                    <li><a id="HyperLink13" href="/Servicios/Default.aspx?gI2Sr=140">Proyectos</a></li>
			        <li><a id="HyperLink14" href="/Servicios/Default.aspx?gI2Sr=141">Sistema Nacional de Investigadores</a></li>                   
				    <li><a id="HyperLink16" href="/Servicios/Default.aspx?gI2Sr=142">Redes Colaborativas</a></li>
                    <li><a id="HyperLink31" href="../Servicios/Default.aspx?gI2Sr=144">Formación</a></li>
                     
                </ul>
			</div>
		</div>

        <div id="sub-didet" class="menu-sub" style="background-color:transparent;">
                   <div style="width:1014px; margin:0 auto; height:2px; background-color:green; "></div>
                    <br/>  
			<div class="sub-inner">                
				<ul>               
					
                    <li><a id="HyperLink21" href="../Servicios/Default.aspx?gI2Sr=112">Proyectos</a></li>
			        <li></li>     
                    <li></li>
                </ul>
			</div>
		</div>

		</div>

        <div id="sub-padres" class="menu-sub">
			<div class="sub-inner">
				<ul>               
		             <li class="escolares2">  <label for="escolares2" >Servicios Escolares</label>
                       <label for="close2" class="close-menu" id="escolares2-close"></label>
                    </li>

                   <li><a id="hlDeportes2" href="../PadresDeFamilia/Default.aspx?gI2Sr=149">Actividades Deportivas</a></li>               
		   <li><a id="hlCulturales2" href="../PadresDeFamilia/Default.aspx?gI2Sr=253">Actividades Culturales</a></li>                   
                   <li class="becas3">
                        <label for="becas3" >Becas</label>
                       <label for="close2" class="close-menu" id="becas3-close"></label>
                   </li> 
                   <li><a id="HyperLink3" href="../PadresDeFamilia/Default.aspx?gI2Sr=122">Movilidad</a></li> 
                   <li><a id="HyperLink11" href="../PadresDeFamilia/Default.aspx?gI2Sr=129">Estadías</a></li> 	
                    <li><a id="HyperLink28" href="../PadresDeFamilia/Default.aspx?gI2Sr=130">Valores</a></li> 					
				</ul>
			</div>

                
                  <div id="sub-escolares2" class="menu-sub" style="background-color:transparent;">
                   <div style="width:1014px; margin:0 auto; height:2px; background-color:green; "></div><br />  
			<div class="sub-inner">                 
				<ul>               
					<li><a id="HyperLink1" href="../PadresDeFamilia/Default.aspx?gI2Sr=101">Reinscripción</a></li>
                    <li><a id="HyperLink7" href="../PadresDeFamilia/Default.aspx?gI2Sr=102">Reincorporación</a></li>
			        <li><a id="HyperLink8" href="../PadresDeFamilia/Default.aspx?gI2Sr=57">Titulación TSU</a></li>
                    <li><a id="HyperLink9" href="../PadresDeFamilia/Default.aspx?gI2Sr=3">Titulación INGENIERÍAS</a></li>
				    <li><a id="HyperLink10" href="../PadresDeFamilia/Default.aspx?gI2Sr=55">Otros Servicios</a></li>
                </ul>
			</div>
		</div>


                <div id="sub-becas3" class="menu-sub" style="background-color:transparent;">
                   <div style="width:1014px; margin:0 auto; height:2px; background-color:green; "></div><br />  
			<div class="sub-inner">                 
				<ul>               
					<li><a id="HyperLink29" href="../PadresDeFamilia/Default.aspx?gI2Sr=118">Becas Instituacionales</a></li>
                    <li><a id="HyperLink30" href="../PadresDeFamilia/Default.aspx?gI2Sr=119">Becas Externas</a></li>
			
				</ul>
			</div>
		</div>


      </div>

        <div id="sub-cic4" class="menu-sub">
			<div class="sub-inner">
				<ul>               
		           <li><a id="HyperLink27" href="../CIC4/Default.aspx?gC2Sr=113">Objetivo General</a></li> 					
				</ul>
			</div>
          </div>
          </div>

            <div id="sub-accesosx" class="menu-sub">
			<div class="sub-inner">
				<ul>
                 
                 <!--  <li>
                    <label for="accesos">OFERTA EDUCATIVA</label>
                    <label for="close" class="close-menu" id="accesos2x-close"></label>
                  </li>-->
                 
                   <li>
                      <a id="hlkCalendario2" href="../Alumno/Default.aspx?gI2Sr=251">CALENDARIO ESCOLAR</a>
                  </li>                  
                                     
                  <li>
                      <a href="http://alumnos.uteq.edu.mx/" target="_blank">PORTAL DE ALUMNOS</a>
                  </li> 
                 
                   <li>
                      <a href="../Sitios/Idiomas.aspx" >CURSOS DE IDIOMAS</a>
                  </li> 
                 
                  <li>
                     <label for="transparencia">TRANSPARENCIA</label>
                      <label for="close2" class="close-menu" id="transparencia-close"></label>
                  </li>
                                    
              </ul>
			</div>
                 <div id="sub-transparencia" class="menu-sub" style="background-color:transparent;">
                   <div style="width:1014px; margin:0 auto; height:2px; background-color:green; "></div><br />  
			<div class="sub-inner">                 
				<ul>               
					 <li><a id="hlkTransFed" href="Default.aspx?gXr=179">Transparencia Federal</a></li>
                  
                    <li><a id="hlkContrasoc" href="Default.aspx?gXr=180">Contraloría Social</a> </li>  
			
				</ul>
			</div>
		</div>

          </div>

         


        
      </div>
      </div>
    <div class="menu-spacer" >

    </div>
      

    <form method="post" action="./Default.aspx?gXr=244" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="QEhINqkS7fdCZfFeQAg9bA0x1Gudi8teCXxSmpXNhW10g33nsofbJ00h28BQSYAsil/eKQfx6vFHkuLfcV1xcZtHJrV04wEWmdFgAiRfKbAPXUFZCr/2+NPFcmDVo7OJaCtxk2KUgUD+DXuMw5sUIn6b11pFxYFALPs2AWsCNSTizuEzkUu4JJ62TalXwkuL4iys1g2/6PB+PcOv2H0OInMZC2q33RenqpKLeRUJHgjFwjlfKDxYYcohmL/bQI/V7ciGUs1XDXB753Nvl7LOTYeENaYVhV0p/7qaEQi0+eQ0i6tCnIKnYW4hhFSwor4GsrJXKrkCZ4RtmiaGJPZjLuvIllscZNY3MEcpQNNRB5TzvqQrAyXK6KxmmC1xJ7vYOGg6GITith+nnk8RVNO2Pu9DK6ellpWY0sudETVK/JawU59IAxD29+j06HIQQsSlPWJtqKH2Bzep0WP+hbppkGzQeuyLHXH/zq+r2IVETi8RcuqvQK0Z7gWE1She4jl9x8YXBuoNSAToAXLvaaeFGmXun7TOlsSJPtce77Cf6H2HuxeyG5JpfoaCAio089UqroCfUo8Vj2C+mlbcFJ/Ie6xMjycUHtYcrjMum+gAqUaY2OEAVHhFpy0O2gHb7TQ3MyqC1ElygD8xLV0RliET2ru7KqBFN+SLH+00Qe7QXYFE08mjGGhDcV9AhoRJTof78/5JnsrIG2zQsi02xnZBWqTfW7bjGfFeEgz8YO6bLGHdgu3aW7w2WP3XTurLzh1dHATQB50S+E+W5zy7PyrQela3suvG0rObEjB9qoGeros0sTTBKQmZexJ5lg8iDFskvOUCZcxx0VJHxYrSzbpU9HmFnzSnw/piKtXtNq1jWbjnEcl0VlAQ5xKDxEDSpmxLq68bE46h2xhf85Hjz5HRp7tjhWWF4mhkBt5iBfPB20/nbxsIDDhivg4XPa/i5NAAMLCg/J+ply2gZz1JCenzbw==" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZFlmnP5MPfeh84pCTjM6rVPXsUfwaz9wVl7Y4zdLQPlDjbsSTag34_OYyv2WKKKWpQ2&amp;t=636511232826842555" type="text/javascript"></script>


<script src="/ScriptResource.axd?d=OXeogLERm3m7Yift4fY7x_dseQZDieidN5hL9H_DpSRhlXkCvGCmgw6rdvrmc37XsPu6JjDBbyLGS2xT1dFRAewuJRx2wcyxfbDy7-VPl93r63go7EZKzjVfKfKn63uRHot3m77MbiCD2h8YfemocK3JJlakpQp2BqY_bzQG5NY1&amp;t=ffffffffad4b7194" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('Error al cargar el marco de trabajo de cliente ASP.NET Ajax.');
//]]>
</script>

<script src="/ScriptResource.axd?d=8niB3GkKmp7h1ttGRLQ3-NzfzHlAcW3hE8P8XWHSezrA2V4nOz689gY71yPGRvBXn8TzqNiguLrHV92G8vl7nEjZLqpbcko-XyMTdNhb1J3EVM3tTdV7GrCdehHNnSBrhz4lKOT3nYiaqo-PMRPmMA8sKeFnRTx8Y5e0WUW5GWgER4wOWG3DIzxuf5Be63SJ0&amp;t=ffffffffad4b7194" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="57FC22D1" />
</div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'form1', [], [], [], 90, 'ctl00');
//]]>
</script>

    <div style="margin:0; padding:0; width:100%;   ">
        
    
  <div id="slider" >
   <div class="slider-container" > 
      
   </div>
  </div>

    <div  class="content-principal-paginas" >
        
        <div class="content-titulo-paginas">
            <span id="ContentPlaceHolder1_lblTitulo" style="font-size:25px;font-weight:bold;">Proveedores</span>
        </div>

     <div class="post-container" >
        <div style="text-align:left; margin-right:2px; position:relative; ">        
        </div>
 
    <div style="text-align:justify; position:relative; background-color:white; " class="cuerpo-articulo" >
        <div>
<p>&nbsp;</p>
<span style="color: #99cc00;"><strong><a style="font-size: 16px; color: #99cc00;" href="http://servicios.uteq.edu.mx/WebUTEQRep/ProvedoresConvocatorias/Requisitos/CONVOCATORIA_PADRON_DE_PROVEEDORES_2021.pdf">CONVOCATORIA PADR&Oacute;N DE PROVEEDORES 2021.pdf</a></strong></span>
<div style="width: 710px; height: 77px; border: solid 0px #000; z-index: 500; position: absolute; background-color: #fff;">&nbsp;</div>
<div><iframe style="border: none;" src="http://servicios.uteq.edu.mx/Content/Consulta/PadronProvedores.aspx" width="710" height="950"></iframe></div>
</div>
    </div>
    </div>
     <div  class="content-right"  class="content-right" >
     <div class="cabecera-listas">
         <h3 >Conoce la UTEQ</h3>
     </div>
     <div style="margin-top:7px; min-height:600px;">

          <div class="content-menu" id="accordion" >

         <ul  >
			      <li><a id="ContentPlaceHolder1_hfConoceLaUteq" href="Default.aspx?gXr=38">Historia</a></li>
                    <li><a id="ContentPlaceHolder1_HyperLink6" href="LienaDelTiempo.aspx">Línea del Tiempo</a></li>               
                  <li><a id="ContentPlaceHolder1_hlMision" href="Default.aspx?gXr=35">Misión, Visión, Valores y Objetivos</a></li>                  
                  <li><a id="ContentPlaceHolder1_hlDirectorio" href="Default.aspx?gXr=39">Directorio</a></li>
               
                  <li class="calidad" >
                          <label  class="accordion-toggle">Calidad UTEQ</label>
                     
                      <div class="accordion-content">
                        <ul  >               
					<li style="border-bottom:none;"><a id="ContentPlaceHolder1_hlCertificaciones" href="Default.aspx?gXr=41">Sistema de Gestión de Calidad</a></li>
                    <li style="border-bottom:none;"> <a id="ContentPlaceHolder1_hlSGC" href="Default.aspx?gXr=99">Certificación y Acreditación de Programas Educativos</a></li>        
			
				    </ul>  
                      </div>

                  </li>
                  <li>
                      <a id="ContentPlaceHolder1_hlkContraloria" href="Default.aspx?gXr=220">Contraloría Social</a>     
                    </li>                  
                  <li><a id="ContentPlaceHolder1_hlMapa" href="Default.aspx?gXr=42">Mapa</a></li>
                  <li><a href="../ConoceLaUTEQ/Default.aspx?gXr=43" > ¿Cómo llegar a la UTEQ?</a></li>            
                 <li><a href="../ConoceLaUTEQ/Default.aspx?gXr=100" >Modelo Educativo</a></li>

                    <li class="identidad" >
                          <label for="identidad" class="accordion-toggle" >Identidad Institucional</label>
                        <div class="accordion-content">
                    <ul >               
		            <li style="width:auto;"><a id="ContentPlaceHolder1_hlManualIdentidad" href="Default.aspx?gXr=94">Manual de Identidad</a></li>
                    <li><a id="ContentPlaceHolder1_hlGaleria" href="../Noticias/Galeria.aspx">Galeria</a></li>
			
				</ul>
                        </div>
                   
               </ul> 
     </div> 
         </div>    
     
        </div>
    </div>


         </div>
       
    </form>
     <div>






         <div class="content-logos" >          
         <div class="content-logos-inner" >
            
              <div class="logos-left" >
               
              </div>
              <div class="logos-center"  >
               
                  <a href="http://www.queretaro.gob.mx/" target="_blank"><img alt="logos" src="../Images/logos2.jpg" style="width:520px;" /></a>
              </div>
              <div class="logos-right" >


                  <ul style="list-style:none; display:inline-flex; align-items:center;">
                      <li style="padding-right:2px;"><label style="font-family:Arial, Helvetica, sans-serif; font-size:small;">Siguenos en:</label> </li>
                    <li style="padding-right:5px;"> <a href="https://www.facebook.com/UTEQro/" target="_blank"><img src="../Images/facebook.png" style="width:25px;" /></a></li>
                          <li style="padding-right:5px;"> <a href="http://www.youtube.com/user/UTEQro"  target="_blank"> <img src="../Images/youtube.png" style="width:25px;" /></a> </li>
                      <li style="padding-right:5px;"> <a href="https://twitter.com/prensauteq"  target="_blank"> <img src="../Images/twitter.png" style="width:25px;" /></a> </li>
                       <li style="padding-right:5px;"> <a href="https://issuu.com/uteqro"  target="_blank"> <img src="../Images/issu25.png" style="width:25px;" /></a> </li>
                       <li style="padding-right:5px;"> <a href="https://www.instagram.com/uteq.prensa"  target="_blank"> <img src="../Images/instauteq.jpg" style="width:26px;" /></a> </li>
                      </ul>
              </div>
          </div>
             </div>


     <div class="Spliter" >
    </div>


        <div style="background-color:rgb(82,83,81);"> 
            <div style="max-width:1024px; margin:0 auto;" class="content-footer">
            <div style=" padding:15px;" class="content-footer-inner">
            <div style="width:200px; " class="footer-logo" >
                <ul style="display:block;  list-style:none;">
                    <li style="margin-bottom:5px;"><img src="../Images/Logo UTEQ blanco.png" width="150" /> </li>
                                        

                    <li >
                    
                          <img src="../Images/SGS_ISO_9001_round_TCL_HR.jpg" width="120" style="margin-top:5px; margin-left:15px;" />  
                    </li>
                </ul>
            </div>
           <!-- <div style="width:200px;  " class="footer-clima" >
                 <a href="http://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=IQUERETA39"><img src="http://banners.wunderground.com/cgi-bin/banner/ban/wxBanner?bannertype=wxstnsticker_metric&weatherstationcount=IQROQUER3" height="160" width="160" border="0" alt="Weather Underground PWS IQUERETA39" /></a>
            </div>-->
            <div style="width:240px;" class="footer-contacto">
                <ul class="listas-contacto" >
                 
                     <li style=" vertical-align:middle; height:50px;">
                         <span style="color:white;">Contacto:</span>
                         <br /> 
                         <div style="padding-top:3px;"><a style="cursor:none;"><img src="../Images/tel.png" width="15" /> (442) 2 09 61 00</a> 
                        
                     </li>
              
                    <li><span style="color:white;">Ubicación:</span><br /> <div style="padding-top:7px; padding-left:30px;"> <a href="https://www.google.com.mx/maps/place/Universidad+Tecnol%C3%B3gica+de+Quer%C3%A9taro/@20.6532636,-100.4043203,15z/data=!4m5!3m4!1s0x0:0xd927286fe3c75218!8m2!3d20.6532636!4d-100.4043203" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../Images/ubicacion.png" style="height:30px;width:30px;" />  </a></div> </li>
                </ul>
            </div>
            <div style="width:25%;" class="footer-gob">

                 <ul class="listas-contacto">
                  <li style="margin:0px;"><a href="http://www.uteq.edu.mx/ConoceLaUTEQ/Default.aspx?gXr=244" target="_blank">Proveedores</a></li>    
                  <li><a href="https://www.queretaro.gob.mx" target="_blank">Portal del Poder ejecutivo del Estado de Querétaro</a></li>
                  <li><a href="http://cgutyp.sep.gob.mx/" target="_blank">Coordinación General de Universidades Tecnológicas y Politécnicas</a></li> 
                  <li style="list-style:none"><a href="../ConoceLaUTEQ/Default.aspx?gXr=220" ><img src="../Images/Logotipo%20de%20CS%202020.jpg" width="145" /></a></li>   
                 </ul>  
                  
            </div>
            <div style="width:25%;" class="footer-gobmx">
                <ul class="listas-contacto">
                  <li style="margin:0px;"><a href="http://idiomas.uteq.edu.mx/" target="_blank">Portal de Alumnos de Idiomas (PAI)</a></li>
                  <li style="margin:0px;"><a href="http://ebc.uteq.edu.mx/" target="_blank">Sistema de Educación Basada en Competencias (EBC)</a></li>
                  <li style="margin:0px;"><a href="https://www.uteq.edu.mx/ConoceLaUTEQ/Default.aspx?gXr=206" target="_blank">Sistema Formato  Único en el Portal Aplicativo de la Secretaría de Hacienda (PASH), FAM</a></li>
                   <li style="margin:0px;"><a href="https://www.uteq.edu.mx/ConoceLaUTEQ/Default.aspx?gXr=226" target="_blank">Sistema de Recursos Federales Transferidos (SRFT)</a></li>
                  <li style="margin:0px; list-style:none;"><a href="https://www.gob.mx/" target="_blank"><img src="https://www.gob.mx/assets/gobmxlogo.svg" /></a></li>
                  </ul>
            </div>
            </div>


        </div>
            </div>
    </div>
   
</body>
</html>

