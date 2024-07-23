# REQUESTS DEL SERVIDOR

Tambien conocido como endpoints posibles con info que puede llegar a necesitar el juego.

Estos endpoints siguen llamado a la misma dirección (`www.elrockdetuvida.com/game/rest.php`) pero la respuesta es de distinto tipo. Esto define 100% el contenido que devuelven. El agente que usa el juego es GameHTTP (por alguna razón)

El formato siempre es el siguiente:

```  
{
    type: [tipo-de-respuesta]
    content: [dato-acorde-al-tipo-de-request]
}  
```

## login
Le manda una respuesta al servidor para que analice los datos del usuario y contraseña y compruebe que sean válidos.

#### Contenido:
```  
{
    "result": "[tipo-de-mensaje]",
    content: {
    	"userid":"[numero-id-usuario]",
    	"sessionid":"[numero-id-sesion]",
    }
}  
```

## logout


## getads


## getticker


## getauthorizedsongs


## getallsongs

