<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'Sobre Nosotros',
);
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl.'/css/estilo.css');
?>
<h1>Trabajo de Promoción - Proyecto de Software</h1>
<p> </p>
<h4>Grupo 46: </h4>
<p class="tabulacion">		Bof, Alexis German  - 8023/0 </p>
<p class="tabulacion">		Michelli,Juan Francisco  - 8203/2 </p>
	
<h4> FRAMEWORK ELEGIDO </h4>


    <p class="tabulacion">	Yii Web Programming Framework v.1.1.14 </p>
    
    <p class="tabulacion">Motivo de elección: Previo a la realización de este trabajo, no poseiamos experiencia
	en la utilización de un framework, no siendo ajeno al conocimiento de algunos.
    Por lo tanto, entre la larga lista de opciones de framework presentadas por la cátedra,
	inicialmente no sabíamos cual elegir. Entonces, por esta misma razón, luego de ver el
	framework (yii) utilizado como ejemplo en la explicación del Trabajo, nos decidimos a
	elegir este mismo, ya que nos pareció una opción sencilla a simple vista, dentro del marco
	de posibilidades, para interiorizarnos en aprender su funcionamiento y aplicarlo en este
	trabajo. Ademàs, nos pareció un primer paso el haber sido introducidos al Yii, ya que si
	elegíamos otro que no conocíamos en lo absoluto, nos hubiese llevado más tiempo el hecho
	de conocer su forma de trabajo.</p>

	
<h4>MODULOS APROVECHADOS DEL TRABAJO DE LA CURSADA</h4>

	<p class="tabulacion">Aprovechando que el framework Yii provee los mecanismos para operaciones CRUD, significó
	aislarnos del trabajo de la cursada, realizando nuevamente los modulos solicitados. Sin
	embargo, para la realizacion del modulo de estadísticas, hicimos uso de los modulos
	correspondientes a las mismas (vista, consultas sql, la extensión highcharts) del trabajo
	de la cursada, adaptándolos al framework.

	

<h4>MANEJO DE OPERACIONES CRUD</h4>

	<p class="tabulacion">Yii nos provee de un mecanismo para la generación automática de código para formar el
	esqueleto de una aplicación, es decir, modulos que cuentan con formularios que realizan
	operaciones como crear, eliminar, actualizar y acceder a información que se encuentra en
	una base de datos. Para la realización de estas operaciones automáticas nos fue necesario
	activar el modulo generador de código gii, en la configuracion principal de nuestra
	aplicación para luego acceder al mismo ingresando en la barra de direcciones del navegador
	la siguiente ruta: http://hostname/direcciondelframework/index.php?r=gii.</p>
    
    <p class="tabulacion">Cabe destacar que no significa que no tuvieramos que adaptar las operaciones realizadas
	automaticamente a las necesidades de nuestra aplicación. Por ejemplo, al eliminar un registro
	de la base de datos, la operacion de eliminacion realiza una baja fisica del mismo, y la
	operacion fue adaptada a que realizase una baja logica, es decir, conservando el registro en
	la base de datos.</p>
	

<h4>MANEJO DE SEGURIDAD</h4>

	<p class="tabulacion">Yii tiene incorporado mecanismos de autenticación y autorización muy completos que permiten
	la adecuación para necesidades especiales.
    También es compatible con autorización a través del control de acceso basado en roles.</p>       
    
    <p class="tabulacion">Por otro lado, Yii está equipado con medidas de seguridad para ayudar a prevenir a las
	aplicaciones web hechas en yii de ataques como inyección SQL, cross-site scripting (XSS),
	cross-site request forgery (CSRF), y de  manipulación de cookies.</p>


<h4>MANEJO DE MVC</h4>

	<p class="tabulacion">El árbol de directorios de Yii distingue de forma clara en donde ubicar los Modelos, las
	Vistas y los Controladores, facilitando mayoritariamente la interacción entre las capas.
    Además de implementar el modelo MVC, Yii tambien introduce un front-controller llamado
	Aplicación (controlador de aplicación), el cual representa el contexto de ejecución del
	procesamiento del pedido. La capa Aplicación resuelve el pedido del usuario y la dispara al
	controlador apropiado para tratamiento futuro.
	
	<p class="tabulacion">Yii Framework, ante una petición de un usuario, realiza el siguiente mecanismo:</p>
    
		<p class="tabulacion2">
		1) Un usuario realiza un pedido con la siguiente URL
		   http://www.example.com/index.php?r=post/show&id=1 y el servidor Web se encarga de la
		   solicitud mediante la ejecución del script de arranque en index.php.
		</p>
		<p class="tabulacion2">
		2) El script de entrada crea una instancia de applicacion y la ejecuta.
		</p>
		<p class="tabulacion2">
		3) La aplicación obtiene la información detallada del pedido del usuario del componente
   		   de aplicación request.
		</p>
		<p class="tabulacion2">
		4) El controlador determina al controlador y la acción pedido con ayuda del componente de
		   aplicación llamado urlManager. Para este ejemplo el controlador es post que refiere a
		   la clase PostController y la acción es show que su significado es determinado por el
		   controlador.
		</p>
		<p class="tabulacion2">
		5) La aplicación crea una instancia del controlador pedido para resolver el pedido del
		   usuario. El controlador determina que la acción show refiere al nombre de método
		   actionShow en la clase controlador. Entonces crea y ejecuta los filtros asociados con
		   esta acción (ejemplo: control de acceso). La acción es ejecutada si los filtros
		   lo permiten.
		</p>
		<p class="tabulacion2">
		6) La acción lee el modelo Post cuyo ID es 1 de la base de datos.
		</p>
		<p class="tabulacion2">
		7) La acción realiza la vista llamada show con el modelo Post
		</p>
		<p class="tabulacion2">
		8) La vista lee y muestra los atributos del modelo Post.
		</p>
		<p class="tabulacion2">
		9) La vista ejecuta algunos widgets.
		</p>
		<p class="tabulacion2">
		10) El resultado realizado es embebido en un esquema (layout).
		</p>
		<p class="tabulacion2">
		11) La acción completa la vista realizada y se la muestra al usuario.
        </p>
	
	<p class="tabulacion">El arbol de directorios consiste en:
	
	
<pre>
	aplicacion/
	   index.php                 		archivo de entrada de la aplicación Web
	   assets/                 	  	contiene archivos de recursos públicos
	   css/                    	  	contiene archivos CSS
	   images/                 		contiene archivos de imágenes
	   themes/                 		contiene temas de la aplicación
	   protected/              		contiene los archivos protegidos de la aplicación
		  yiic                          script de linea de comandos yiic
		  yiic.bat                      script de linea de comandos yiic para Windows
		  commands/                 	contiene comandos 'yiic' personalizados
			shell/                  contiene comandos 'yiic shell' personalizados
		  components/              	contiene componentes reusables
			MainMenu.php            clase de widget 'MainMenu'
			Identity.php            clase 'Identity' utilizada para autenticación
			views/                  contiene los archivos de vistas para los widgets
				mainMenu.php    el archivo vista para el widget 'MainMenu'
		  config/                   	contiene archivos de configuración
			console.php             configuración aplicación consola
			main.php                configuración de la aplicación Web
		  controllers/             	contiene los archivos de clase de controladores
			SiteController.php      la clase controlador predeterminada
		  extensions/               	contiene extensiones de terceros
		  messages/                 	contiene mensajes traducidos
		  models/                  	contiene archivos clase de modeloscontaining model class files
			LoginForm.php           el formulario modelo para la acción 'login'
			ContactForm.php         el formulario modelo para la acción 'contact'
		  runtime/                  	contiene archivos temporarios generados
		  views/                   	contiene archivos de vista de controladores y de diseño
			layouts/                contiene archivos de diseño
				main.php        el diseño default para todas las vistas
			site/                   contiene archivos vista para el controlador 'site'
				contact.php     contiene la vista para la acción 'contact'
				index.php       contiene la vista para la acción 'index'
				login.php       contiene la vista para la acción 'login'
			system/                 contiene archivos de vista del sistema
	</pre>
	<h4>CONSIDERACIONES GENERALES</h4>
	
        <p class="tabulacion"> Las consideraciones necesarias al momento de evaluar, en relacion a accesos,etc,
		se encuentra en el repositorio, en el archivo README.md</p>
        
	<h4>REFERENCIAS</h4>
		<p class="tabulacion">
		- Turorial oficial: <a href="http://www.yiiframework.com/doc/guide/1.1/es/quickstart.what-is-yii">http://www.yiiframework.com/doc/guide/1.1/es/quickstart.what-is-yii</a> 
		</p>
		<p class="tabulacion">
		- Video-Turorial: <a href="http://www.youtube.com/playlist?list=PLpOqH6AE0tNh6HSljUElu5wk-Bokcrcix" >http://www.youtube.com/playlist?list=PLpOqH6AE0tNh6HSljUElu5wk-Bokcrcix </a>
		</p>
		<p class="tabulacion">
		- Foro de Yii Frame: <a href="http://www.yiiframework.com/forum/index.php/forum/25-spanish/">
		   http://www.yiiframework.com/forum/index.php/forum/25-spanish/ </a>
		</p>
		<p class="tabulacion">
		- Yii 1.1 Application Development Cookbook, Makarov, Alexander (2011)
		</p>
		<p class="tabulacion">
		- Agile Web Application Development with Yii1.1 and PHP5. Packt Publishing, Winesett, Jeffrey (2010)
		</p>

