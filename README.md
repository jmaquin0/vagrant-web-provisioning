Taller: Vagrant de Provisionamiento

Descripción del taller
El taller consiste en levantar dos máquinas virtuales con Vagrant:
web → Servidor Apache + PHP
db → Servidor PostgreSQL
Ambas se comunican mediante una red privada (192.168.56.x), y se aprovisionan automáticamente con scripts Bash.

Proceso:
Clonar el repositorio
Levantar las máquinas
Verificar conexiones con
Apache (desde host): http://192.168.56.13
PHP y base de datos: http://192.168.56.13/info.php
Scripts de provisionamiento
 provision-web.sh
  Instala Apache y PHP.
  Copia los archivos del sitio a /var/www/html.
  Configura permisos y reinicia Apache.

 provision-db.sh
  Instala PostgreSQL.
  Crea la base de datos tallerdb y la tabla alumnos.
  Inserta algunos registros de ejemplo.

Configurar Index
Configurar info.php:
 Se conecta a PostgreSQL en la máquina db (192.168.56.11).
 Consulta la tabla alumnos.
 Muestra los nombres en una lista.

**Retos y dificultades superadas**
Durante el desarrollo se enfrentaron varios desafíos técnicos:
Configuración de red privada: al inicio, la máquina web no respondía en la IP 192.168.56.10, se cambio a 192.168.56.13
Apache mostrando “Index of /”: se corrigió ajustando el DocumentRoot a /var/www/html.
Conexión denegada entre PHP y PostgreSQL: se resolvió editando postgresql.conf y pg_hba.conf para aceptar conexiones externas.
Módulo PHP faltante: se instaló php-pgsql para habilitar la conexión entre PHP y la base de datos.
