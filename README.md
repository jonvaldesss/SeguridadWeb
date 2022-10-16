# TOP LAP
Top Lap es nuestro sistema web sobre los mejores portátiles de alta gama, el cual haremos el despliegue mediante Docker; una plataforma que empaqueta software en contenedores que incluyen todo lo necesario para que el software se ejecute. Mediante **docker-compose** podemos ejecutar varias imagenes al mismo tiempo paralelamente. Esta aplicacion está compuesta por tres servicios: un servidor Web con una aplicación PHP, la base de datos Maria DB y la aplicación PHPMyAdmin para gestionar la base de datos anteriormente citada.

## Cómo desplegar el proyecto
Lo primero es sitúar la terminal dentro del repositorio **/docker-lamp**
>Una vez dentro, construir la imagen introduciendo el siguiente comando:
  
  **`$ docker build -t="web" .`**
 

>Para desplegar los servicios 

  **`$ docker-compose up`**  #si fuese necesario, instalarlo con `$ sudo apt install docker-compose`
  

>Para visitar la web en **http://localhost:81/**


>Para añadir los datos necesarios **http://localhost:8890/**

Como hemos definido en el archivo docker-compose.yml, (usuario "root", password "root"). Haz click en "database" y luego en "import", e importamos nuestra base de datos /SeguridadWeb/entrega_1.sql


>Para parar los servicios, en otra terminal introduce:

  **`$ docker-compose down`**
