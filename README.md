Multi-sitio_CakePHP2.1_Themes
=============================

Multi-sitio CakePHP 2.1 con Themes y Overwriter de Controllers dentro de cada theme si existe ;-)

Con esta estructura se puede tomar como base para saber cómo configurar CakePHP 2.1 para que responda a distintos dominós; según el dominio va a mostrar el sitio web con su propio theme y si encuentra que hay un controller, toma como prioridad el controller que está dentro del theme que se cargó.

Permitiéndonos tener la flexibilidad de poder sobrescribir la lógica del mismo siendo de esta manera más escalable nuestro sistema.

Para que funciones y pueda ver como trabaja y jugar un poco con el codigo tiene que hacer las siguientes configuraciones

Apache http.confg
=================
#ck2.local
<VirtualHost *:80>
     ServerAdmin webmaster@ck2.local
     DocumentRoot "c:/www/ck2.local"              #path a los archivos
     ServerName ck2.local                         #dominio para hacer la prueba
     ServerAlias www.ck2.local
     ErrorLog "logs/ck2.local.log"
     CustomLog "logs/ck2.local-access.log" common
</VirtualHost>
#ck3.local
<VirtualHost *:80>
     ServerAdmin webmaster@ck3.local
     DocumentRoot "c:/www/ck2.local"              #path a los archivos
     ServerName ck3.local                         #dominio para hacer la prueba
     ServerAlias www.ck3.local
     ErrorLog "logs/ck3.local.log"
     CustomLog "logs/ck3.local-access.log" common
</VirtualHost>

Archivo HOST
============
#Host Desarrollo
127.0.0.1 ck2.local
127.0.0.1 ck3.local

Poner todos los archivos dentro de la carpeta "c:/www/ck2.local"

Tambien tendrias que importa la DB que esta adjunta.

