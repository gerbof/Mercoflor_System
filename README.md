 Cooperativa MercoFlor
========================
Software de gestión para una cooperativa comercializadora de plantas y flores. El modo de trabajo que tiene se basa en un catálogo de especies de flores, con un
stock, y socios que llevan cierta cantidad de ejemplares de ciertas especies, y clientes que las compran. Se lleva un control sobre las operaciones 
que se realizan en la cooperativa, así como también listados y estadísticas.


FRAMEWORK UTILIZADO
-------------------

    Yii Web Programming Framework v.1.1.14
    
    Motivo de elección: Previo a la realización de este trabajo, no se poseia experiencia
	en la utilización de un framework, no siendo ajeno al conocimiento de algunos.
    Por lo tanto, entre la larga lista de opciones de frameworks, se decidió a
	elegir este mismo, ya que pareció una opción sencilla a simple vista, dentro del marco
	de posibilidades, para interiorizarse en aprender su funcionamiento y aplicarlo en este
	trabajo.

	
MANEJO DE OPERACIONES CRUD
--------------------------

	Yii nos provee de un mecanismo para la generación automática de código para formar el
	esqueleto de una aplicación, es decir, modulos que cuentan con formularios que realizan
	operaciones como crear, eliminar, actualizar y acceder a información que se encuentra en
	una BD.
    
    Cabe destacar que no significa que no tuviera que adaptar las operaciones realizadas
	automaticamente a las necesidades de nuestra aplicación. Por ejemplo, al eliminar un registro
	de la BD, la operacion de eliminacion realiza una baja fisica del mismo, y la
	operacion fue adaptada a que realizase una baja logica, es decir, conservando el registro en
	la base de datos.
	

MANEJO DE SEGURIDAD
-------------------

	Yii tiene incorporado mecanismos de autenticación y autorización muy completos que permiten
	la adecuación para necesidades especiales.
    También es compatible con autorización a través del control de acceso basado en roles.          
    
    Por otro lado, Yii está equipado con medidas de seguridad para ayudar a prevenir a las
	aplicaciones web hechas en yii de ataques como inyección SQL, cross-site scripting (XSS),
	cross-site request forgery (CSRF), y de  manipulación de cookies.


MANEJO DE MVC
-------------

	El árbol de directorios de Yii distingue de forma clara en donde ubicar los Modelos, las
	Vistas y los Controladores, facilitando mayoritariamente la interacción entre las capas.
    Además de implementar el modelo MVC, Yii tambien introduce un front-controller llamado
	Aplicación (controlador de aplicación), el cual representa el contexto de ejecución del
	procesamiento del pedido. La capa Aplicación resuelve el pedido del usuario y la dispara al
	controlador apropiado para tratamiento futuro.
	
	Yii Framework, ante una petición de un usuario, realiza el siguiente mecanismo:
    
		1) Un usuario realiza un pedido con la siguiente URL
		   http://www.example.com/index.php?r=post/show&id=1 y el servidor Web se encarga de la
		   solicitud mediante la ejecución del script de arranque en index.php.
		2) El script de entrada crea una instancia de applicacion y la ejecuta.
		3) La aplicación obtiene la información detallada del pedido del usuario del componente
   		   de aplicación request.
		4) El controlador determina al controlador y la acción pedido con ayuda del componente de
		   aplicación llamado urlManager. Para este ejemplo el controlador es post que refiere a
		   la clase PostController y la acción es show que su significado es determinado por el
		   controlador.
		5) La aplicación crea una instancia del controlador pedido para resolver el pedido del
		   usuario. El controlador determina que la acción show refiere al nombre de método
		   actionShow en la clase controlador. Entonces crea y ejecuta los filtros asociados con
		   esta acción (ejemplo: control de acceso). La acción es ejecutada si los filtros
		   lo permiten.
		6) La acción lee el modelo Post cuyo ID es 1 de la base de datos.
		7) La acción realiza la vista llamada show con el modelo Post
		8) La vista lee y muestra los atributos del modelo Post.
		9) La vista ejecuta algunos widgets.
		10) El resultado realizado es embebido en un esquema (layout).
		11) La acción completa la vista realizada y se la muestra al usuario.

	
	El arbol de directorios consiste en:
	
		aplicacion/
		   index.php                 archivo de entrada de la aplicación Web
		   assets/                   contiene archivos de recursos públicos
		   css/                      contiene archivos CSS
		   images/                   contiene archivos de imágenes
		   themes/                   contiene temas de la aplicación
		   protected/                contiene los archivos protegidos de la aplicación
			  yiic                   script de linea de comandos yiic
			  yiic.bat               script de linea de comandos yiic para Windows
			  commands/              contiene comandos 'yiic' personalizados
				 shell/              contiene comandos 'yiic shell' personalizados
			  components/            contiene componentes reusables
				 MainMenu.php        clase de widget 'MainMenu'
				 Identity.php        clase 'Identity' utilizada para autenticación
				 views/              contiene los archivos de vistas para los widgets
					mainMenu.php     el archivo vista para el widget 'MainMenu'
			  config/                contiene archivos de configuración
				 console.php         configuración aplicación consola
				 main.php            configuración de la aplicación Web
			  controllers/           contiene los archivos de clase de controladores
				 SiteController.php  la clase controlador predeterminada
			  extensions/            contiene extensiones de terceros
			  messages/              contiene mensajes traducidos
			  models/                contiene archivos clase de modeloscontaining model class files
				 LoginForm.php       el formulario modelo para la acción 'login'
				 ContactForm.php     el formulario modelo para la acción 'contact'
			  runtime/               contiene archivos temporarios generados
			  views/                 contiene archivos de vista de controladores y de diseño
				 layouts/            contiene archivos de diseño
					main.php         el diseño default para todas las vistas
				 site/               contiene archivos vista para el controlador 'site'
					contact.php      contiene la vista para la acción 'contact'
					index.php        contiene la vista para la acción 'index'
					login.php        contiene la vista para la acción 'login'
				 system/             contiene archivos de vista del sistema
	
	
	
		
REFERENCIAS
-----------
	
		- Turorial oficial: http://www.yiiframework.com/doc/guide/1.1/es/quickstart.what-is-yii
		- Video-Turorial: http://www.youtube.com/playlist?list=PLpOqH6AE0tNh6HSljUElu5wk-Bokcrcix
		- Foro de Yii Frame: http://www.yiiframework.com/forum/index.php/forum/25-spanish/
		- Yii 1.1 Application Development Cookbook, Makarov, Alexander (2011)
		- Agile Web Application Development with Yii1.1 and PHP5. Packt Publishing, Winesett, Jeffrey (2010)
	
