# REQUESTS DEL SERVIDOR

Tambien conocido como endpoints posibles con info que puede llegar a necesitar el juego.

Estos endpoints siguen llamado a la misma dirección (`www.elrockdetuvida.com/game/rest.php`) pero la respuesta es de distinto tipo. Esto define 100% el contenido que devuelven. El agente que usa el juego es GameHTTP (por alguna razón)

El formato siempre envía el juego es el siguiente:

```  
"packet:{
    type: [tipo-de-respuesta],
    sessionid: [id-sesion],
    content: [dato-que-pasa-al-servidor]
}
```

Y la respuesta que el servidor tiene que devolver tiene la siguiente estructura

```  
{
    "result": [estado-de-respuesta],
    "sessionid": [id-sesion],
    "content": [dato-de-respuesta]
}
```

En donde result puede ser `success`, `unknown`, `other` o `invalid_session`

## login
Le manda una respuesta al juego para que analice los datos del usuario y contraseña y compruebe que sean válidos.

#### Contenido:
```  
{
    "result": "[tipo-de-mensaje]",
    "content": {
    	"userid":"[numero-id-usuario]",
    	"sessionid":"[numero-id-sesion]",
    }
}  
```
En este caso en particular, el result tambien puede ser `needupgrade`, `invaliduser`, `invalidpassword` o `failed`

## logout
Le manda una respuesta al juego para que anule la ID de sesión.

#### Contenido:
```  
{
    "result": "[tipo-de-mensaje]",
    "content": {
    	"userid":"[numero-id-usuario]",
    	"sessionid":"[numero-id-sesion]",
    }
}  
```

## getads
Le manda una respuesta al juego con info para que el mismo juego pueda mostrar publicidades dentro del juego? (en el caso que salga alguna cancion nueva, supongo)

#### Contenido:
```  
{
    "result": "[tipo-de-mensaje]",
    "content": {
    	"adverts":[
    		"hash":"[hash-publicidad]",
			"server":"[url-server-publicidad]",
			"path":"[url-imagen-server?]",
			"place":"[enlace-info-publicidad?]",
    	]
    }
}  
```

## getticker
Le manda una respuesta al juego con... el ticker??????????

#### Contenido:
```  
{
    "result": "[tipo-de-mensaje]",
    "content": {
    	"ticker":"[ticker-sesion?]",
    }
}  
```

## getauthorizedsongs
Le manda una respuesta al juego para que tenga datos sobre el listado de canciones que tiene autorizada el usuario para jugar

#### Contenido:
```  
{
    "result": "[tipo-de-mensaje]",
    "content": {
   		"songs":[
    		"hash":"[hash-cancion?]",
    		"songid":"[id-cancion-disponible]",
    	]
    }
}  
```

## getallsongs
Le manda una respuesta al juego para que tenga datos sobre el listado de canciones que el juego tiene disponible para jugar.

#### Contenido:
```  
{
    "result": "[tipo-de-mensaje]",
    "content": {
    	"songs":[
    		"songid":"[id-cancion?]",
    		"banda":"[nombre-banda-o-hash-banda?]",
    		"cancion":"[titulo-cancion?]",
    		"disco":"[nombre-banda-o-hash-banda?]",
    		"anio":"[año-de-cancion]",
    		"tapa_server":"[server-para-sacar-la-tapa?]",
    		"tapa_path":"[ubicacion-imagen-caratula?]",
    		"tapa_hash":"[hash-imagen-caratula?]",
    		"dif_gral":"[nivel-dificultad-cancion]",
    		"dif_guitarra":"[nivel-dificultad-guitarra]",
    		"dif_bajo":"[nivel-dificultad-bajo]",
    		"dif_voz":"[nivel-dificultad-voz]",
    		"dif_bateria":"[nivel-dificultad-bateria]",
    		"nueva":"[flag-si-es-nueva-cancion]",
    		"preview_server":"[server-para-sacar-preview-de-cancion?]",
    		"preview_path":"[ubicacion-preview-cancion?]",
    		"preview_hash":"[hash-preview-cancion?]"
    	]
    }
}  
```

## gethighscore
Le manda una respuesta al juego con el puntaje máximo guardado en el server

#### Contenido:
```  
{
    "result": "[tipo-de-mensaje]",
    "content": {
    	"songid":"[hash-cancion-pedida?]",
    	"instrumentid":"[id-instrumento-cancion]",
    	"level":"[dificultad-jugada]",
    	"gamemode":"[si-fue-en-banda-o-versus]",
    	"startpos":"[posicion-inicio?]",
    	"count":"[contador?]",
    	"userid":"[id-usuario-puntaje?]"
    }
}  
```

## gethighscorepos
Le manda una respuesta al juego con info sobre el top de los puntajes altos de cada cancion?

#### Contenido:
```  
{
    "result": "[tipo-de-mensaje]",
    "content": {
    	"songid":"[hash-cancion-pedida?]",
    	"instrumentid":"[id-instrumento-cancion]",
    	"level":"[dificultad-jugada]",
    	"score":"[puntaje-total-en-cancion]",
    	"gamemode":"[si-fue-en-banda-o-versus]"
    }
}  
```

## submithighscore
Le manda una respuesta al juego con la respuesta a la hora de guardar el puntaje máximo

#### Contenido:
```  
{
    "result": "[tipo-de-mensaje]",
    "content": {
    	"adverts":[
    		"hash":"[hash-publicidad]",
			"server":"[url-server-publicidad]",
			"path":"[url-imagen-server?]",
			"place":"[enlace-info-publicidad?]",
    	]
    }
}  
```
