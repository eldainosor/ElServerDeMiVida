# El server de mi vida

**PROYECTO EN CURSO** de simular datos desde el lado de servidor para poder usar el juego El Rock de tu vida. No se espera un gran avance.

## Introducción
El Rock de tu vida es un juego creado por Next Level Games lanzado en 2011, el cual es un juego que te permite "experimentar el rock nacional como si fueras uno de tus artistas favoritos".
Este juego busca que estés siempre online para acceder tanto a la plataforma como a la lista de canciones que vos podías tener en los discos tanto como comprar nuevos lanzamientos a través de un SMS.

Después de 2013-2014, este juego cumplió su ciclo de soporte y los servidores dejaron de funcionar. Lo cual dejó a varios usuarios encerrados en una pantalla de inicio de sesión de la cual es bastante imposible salir.

## Idea de este proyecto
Después de hacer mucha prueba y error en 2022, resulta que el juego llama a sus servidores originales (`www.elrockdetuvida.com`), en específico a un backend del juego (`www.elrockdetuvida.com/game/rest.php`).
Haciendo unas pruebas usando PHP básico, logré que el juego se conecte con un servidor local y que devuelva al menos un mensaje de error como respuesta de comunicación. No sé si hay algo más que se pueda hacer.

## Requisitos y pruebas
Este servidor se testeó usando las siguientes herramientas
- Windows 10
- XAMPP
- Disco del juego (edición negra y naranja)

Según la ventana, el juego es la versión 1.0.0.6, lanzada en 2011. No sé si va a funcionar de la misma manera con otras ediciones.

Se recomienda editar el archivo `hosts` en Windows y agregar las siguientes líneas:
```
  127.0.0.1 elrockdetuvida.com                      # Necesario para jumpear el server de ERDTV
  127.0.0.1 www.elrockdetuvida.com                  # Necesario para jumpear el server de ERDTV
```

Esto es necesario para que el juego sepa que este servidor local que ejecutamos en XAMPP es el que espera que esté activo.

El pispeador (accessible desde `www.elrockdetuvida.com/game/pispeo`) sirve para entender las peticiones que hace el juego. Solo registra peticiones POST. No sé si el juego hace peticiones GET. Solo sirve para entender los endpoints que necesita el server para después tratar de agregar datos que no hagan romper al juego.

Para hacer funcionar el pispeador, hay que crear una base de datos dentro de XAMPP. Para eso, hay que ejecutar en mysql:
```sql
CREATE DATABASE erdtv_log_requests;
USE erdtv_log_requests;
CREATE TABLE `peticiones` (
  `timestamp` bigint(20) NOT NULL,
  `outputdata` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

## Pendiente resolver:
- Buscar los posibles endpoints del juego y... documentarlos? (Temporalmente hecho en [REQUESTS.md](REQUESTS.md))
- Tener el juego en un estado casi jugable.