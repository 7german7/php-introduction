# Curso de Introducción a PHP

## Contenido:

1. [Presentación del curso](#Presentación-del-curso)
2. [¿Qué es PHP?](#¿Qué-es-PHP?)
3. [Setup y Herramientas](#Setup-y-Herramientas)
4. [Revisando el template que usaremos](#Revisando-el-template-que-usaremos)
5. [Sintaxis de PHP](#Sintaxis-de-PHP)
6. [Variables tipos de datos y cadenas](#Variables-tipos-de-datos-y-cadenas)
7. [Tipos de Datos en PHP](#Tipos-de-Datos-en-PHP)

## Presentación del curso

Bienvenido al **Curso de Introducción a PHP** en este curso el profesor **Héctor Benitez**, @HectorBenitez en Twitter, te ira enseñando los fundamentos de PHP mientras desarrollas un proyecto que servirá de sitio web personal.

En este curso veremos:

- Programación orientada a Objetos.
- Conexión a bases de datos.
- Usaremos los estándares de PHP.
- Implementaremos librerías de terceros.
- Estructuraremos nuestro proyecto de una forma muy profesional que te servirá para futuros proyectos.
- Utilizaremos la versión 7.2 de PHP.

## ¿Qué es PHP?

PHP es un lenguaje de programación de propósito general de alto nivel que fue diseñado especialmente para el desarrollo de aplicaciones web.

- Es interpretado, multiplataforma, open source, el cual ha sido muy popular en los últimos años.
- Es un lenguaje interpretado, necesitas un interprete de php en la pc para ejecutarlo.
- Es un lenguaje multiplataforma (Win, linux, MacOS).
- Tienes muchas integraciones (Bases de datos, protocolos).

¿Qué NO es PHP?

- No es un lenguaje compilado, por lo cual siempre tendrás que llevar juntos tu código y tu interprete.
- No esta diseñado para realizar aplicaciones de escritorio.

Para trabajar con PHP instalaremos un entorno de desarrollo llamado XAMPP, no es un entorno pensado para producción, el cual incluye:

- Servidor HTTP.
- PHP.
- Base de Datos.
- Cliente para acceder a la BD.

## Setup y Herramientas

- XAMPP (Cualquier OS, Apache, MariaDB, PHP y Perl).
- MariaDB es una derivación de MySQL.

LAMP es el acrónimo usado para describir un sistema de infraestructura de internet que usa las siguientes herramientas:

- Linux, el sistema operativo; En algunos casos también se refiere a LDAP.
- Apache, el servidor web;
- MySQL/MariaDB, el gestor de bases de datos;
- PHP, el lenguaje de programación.

La combinación de estas tecnologías es usada principalmente para definir la infraestructura de un servidor web, utilizando un paradigma de programación para el desarrollo del sistema .

A pesar de que el origen de estos programas de código abierto no fue específicamente diseñado para trabajar entre sí, la combinación se popularizó debido a su bajo coste de adquisición y ubicuidad de sus componentes (ya que vienen pre-instalados en la mayoría de las distribuciones linux). Cuando son combinados, representan un conjunto de soluciones que proporcionan servidores de aplicaciones.

El término fue ampliamente promocionado por el editor de la editorial O'Reilly, Dale Dougherty, a sugerencia de David Axmark y Monty Widenius, desarrolladores de MySQL; la influencia de dicha editorial en el mundo del software libre hizo que el acrónimo se popularizara rápidamente en todo el mundo.

## Revisando el template que usaremos

¿Dónde guardar el template de esta clase?

- Descarga los archivos en tu computadora (encuentra el repositorio en pestaña de archivos).
- Ingresa a htdocs dentro de XAMPP. Debe aparecer: C:/xampp/htdocs/
- Crea y nombra una nueva carpeta. (ejemplo: cursophp)
- Copia los archivos del template (index.html y style.css).
- Escribe la ruta en tu navegador localhost/cursophp (usa el nombre que estableciste para tu carpeta).

*Nota*: recuerda activar Apache y MySQL en el panel de control de XAMPP.

## Sintaxis de PHP

Hagamos el ejemplo más sencillo para trabajar con PHP. Siempre que usemos PHP usaremos lo siguiente: <?php ?> todo lo que pongamos dentro de esto será lo que el servidor va a interpretar como código php, lo que esté fuera lo ignorará.

Para acceder a él lo haremos localhost:8080/hello.php porque el servidor abre por defecto el archivo index y nuestro nuevo archivo se llama hello.php.

Si queremos escribir código php en nuestra vista HTML tendremos que cambiarle la extensión al archivo por .php porque nuestro servidor esta configurado a solo interpretar archivos PHP. Solo las partes dentro de <?php ?> van a ser interpretadas y su código fuente no será visible desde el navegador.

Todas las sentencias de código se separarán con un ; (punto y coma).

## Variables tipos de datos y cadenas

Una variable puede ser una pequeña cajita en la que puedes almacenar un valor y este lo pueden usar para realizar alguna operación.

Para declararla usaremos el símbolo de $ y en seguida el nombre, este puede ser un _ o una letra.

PHP no es estáticamente tipado, es decir que no tenemos que decirle qué tipo de dato es esa variable. Además, es débilmente tipado porque podemos fácilmente cambiar el tipo de dato, es decir PHP ejecuta una conversión de datos interna.

Al momento de trabajar con PHP una cosa muy importante es hacer debugging a nuestras variables, para ello utilizamos la función var_dump(); pasándole por parámetro la variable a revisar.

En PHP tenemos dos tipos de cadenas, las que son con comillas simples y las de comillas dobles. La diferencia entre estas dos cadenas es que la de comillas simples recibe de forma literal lo que le escribas mientras que la de comillas dobles intenta interpretar cualquier variable dentro de ella.

## Tipos de Datos en PHP

PHP cuenta con muchos tipos de datos, sin embargo, en este momento nos vamos a enfocar en los más importantes y utilizados que son boolean, integer, float, string, array y NULL.

Tipos escalares:

- Boolean.
- Integer.
- Float / Double.
    ```
    <?php
    $a = 12.24; 
    $b = 1.5e3; 
    $c = 7E-10;
    ?>
    ```
- Strings.
  - Representa una cadena de caracteres.
  - Existen 4 formas de representar una cadena. Las 2 principales son usando comillas simples o comillas dobles.
  - Usando comillas simples donde el texto será exactamente como se escribe.
  - Usando comillas dobles permite usar caracteres de escape y además expanden los nombres de las variables, es decir sustituye el valor de las variables dentro de las cadenas.
  
  Hay 2 formas adicionales llamadas Heredoc y Nowdoc que sirven para crear cadenas de múltiples líneas.
  Si quieres conocer más de este tipo de dato da click (aquí)[#https://www.php.net/manual/es/language.types.string.php#language.types.string.details].

Tipos compuestos:

- Array: Representa una colección de valores, aunque por defecto PHP usara índices numéricos, la realidad es que la estructura se representa como un mapa que colecciona pares llave-valor. La sintaxis para definir un arreglo será a partir de corchetes cuadrados, aunque en versiones anteriores de PHP era necesario usar la función array(). Las llaves pueden ser enteros o cadenas y los valores pueden ser de cualquier tipo de PHP, incluso de tipo array. http://php.net/manual/es/language.types.array.php
    ```
    <?php
    $array = array(
        "curso1" => "php",
        "curso2" => "js",
    );

    // a partir de PHP 5.4
    $array = [
        "curso1" => "php",
        "curso2" => "js",
    ];

    // índices numéricos
    $array = [
        "php",
        "js",
    ];
    ?>
    ```
- Object: Representa una instancia de una clase. Este tema lo veremos más a fondo en la clase de Programación Orientada a Objetos.
- Callable: Es un tipo de dato especial que representa a algo que puede ser “llamado”, por ejemplo una función o un método.
    ```
    <?php
    // Variable que guarda un callable
    $firstOfArray = function(array $array) {
        if (count($array) == 0) { return null; }
        return $array[0];
    };

    // Este es nuestro arreglo
    $values = [3, 2, 1];

    // Usamos nuestro callable y se imprime el valor 3
    echo $firstOfArray($values);
    ?>
    ```
- Iterable: A partir de PHP 7.1 iterable es un pseudo tipo de datos que puede ser recorrido.
    ```
    <?php

    function foo(iterable $iterable) {
        foreach ($iterable as $valor) {
            // ...
        } 
    }

    ?>
    ```

Tipos especiales:

- Resource: Es un tipo de dato especial que representa un recurso externo, por ejemplo un archivo externo a tu aplicación.
    ```
    <?php
    $res = fopen("c:\\dir\\file.txt", "r");
    ?>
    ```
- NULL: Es un valor especial que se usa para representar una variable sin valor. http://php.net/manual/es/language.types.null.php

    ```
    <?php
    $a = null; 
    ?>
    ```


# Consideraciones

- Entornos de producción (XAMPP, LAMP, AWS).
- Interprete de PHP.


