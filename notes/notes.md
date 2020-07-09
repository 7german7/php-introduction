# Curso de Introducción a PHP

## Contenido:

1. [Presentación del curso](#Presentación-del-curso)
2. [¿Qué es PHP?](#¿Qué-es-PHP?)
3. [Setup y Herramientas](#Setup-y-Herramientas)
4. [Revisando el template que usaremos](#Revisando-el-template-que-usaremos)
5. [Sintaxis de PHP](#Sintaxis-de-PHP)
6. [Variables tipos de datos y cadenas](#Variables-tipos-de-datos-y-cadenas)
7. [Tipos de Datos en PHP](#Tipos-de-Datos-en-PHP)
8. [Arreglos](#Arreglos)
9. [Condicionales y Ciclos](#Condicionales-y-Ciclos)
10. [Ejercicios Arreglos](#Ejercicios-Arreglos)
11. [While vs. Do While](#While-vs-Do-While)
12. [Operadores, Condicionales, Continue y Break](#Operadores,-Condicionales,-Continue-y-Break)
13. [Operadores](#Operadores)
14. [Ejercicios de Operadores](#Ejercicios-de-Operadores)
15. [Funciones](#Funciones)
16. [Agregando archivos externos](#Agregando-archivos-externos)
17. [Programación Orientada a Objetos](#Programación-Orientada-a-Objetos)
18. [Constructor y Métodos](#Constructor-y-Métodos)
19. [Herencia](#Herencia)
20. [Herencia y Polimorfismo](#Herencia-y-Polimorfismo)
21. [Interfaces](#Interfaces)
22. [Namespaces](#Namespaces)
23. [PSR y PHPFIG](#PSR-y-PHPFIG)
24. [Composer](#Composer)

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

## Arreglos

Como vimos en la clase anterior almacenamos datos en una variable, ahora trataremos de almacenar más datos en una misma variable.

Estas variables que almacenan más de un dato se conocen como arreglos y su sintaxis se va a indicar con [ ] (corchetes).

PHP utiliza índices para localizar a los elementos dentro de la variable.

La estructura de arreglos en PHP es conocida como mapa, lo que quiere decir que tiene una composición de llave valor. Además, un arreglo puede contener más arreglos y cada uno de ellos seguirá la misma estructura.

Algo que debes saber es que en PHP podrás almacenar diferentes tipos de datos en un mismo arreglo.

## Condicionales y Ciclos

Las condiciones nos permiten tomar decisiones en el código, si se cumple la condición entonces se ejecutarán ciertas instrucciones sino se cumple se ejecutarán otras. Estas se denotan por la instrucción if else.

Los ciclos funcionan de la mano con las condiciones, en este caso si se cumple la instrucción se estará ejecutando repetidas veces una instrucción dada.

Hemos agregado los jobs de forma manual accediendo al arreglo a través de sus índices, hacer esto podría traer errores y no podríamos controlarlo si tuviéramos muchos jobs. Ahora veamos una mejor forma de hacerlo con ciclos.

- El primero que tenemos es do while que va a involucrar la inicialización de variables y condiciones.
- El segundo que veremos es for que es una forma más simplificada de usar todos los elementos que componen los ciclos.

## Ejercicios Arreglos

## While vs Do While

### Ciclos

Como mencionamos en nuestra clase anterior, los ciclos o bucles son de total importancia cuando desarrollamos software pues nos permiten repetir un bloque de acciones y en consecuencia re-utilizar mejor nuestro código, en este momento ya hablamos de cómo funciona el ciclo for y el ciclo do-while.

Ahora vamos a revisar un par de ciclos adicionales en PHP los cuales también es importante conocer. Toma en cuenta que la mayoría de las cosas se pueden hacer de diferentes maneras por lo tanto es importante que elijas bien cual es el ciclo que mejor se adapta a tu problema.

### while vs. do… while

En la clase anterior hablamos del ciclo do while, aquí lo compararemos con otro ciclo llamado while, recapitulemos el funcionamiento de do… while:

Cuando creamos un ciclo do… while, le decimos a PHP que ejecute cierto bloque de código siempre y cuando la condición que tengas dentro se siga evaluando como verdadera.

Esta es la sintaxis de un ciclo do… while

```
do {
   codigo…
} while (condicion)
```

El ciclo while funciona de la misma manera, pero la diferencia principal es que la evaluación se llevará a cabo al iniciar el ciclo:
```
while (condicion) {
   codigo...
}
```

La principal diferencia es que el ciclo do while garantiza que el código interno se ejecutará al menos 1 vez, mientras que en el ciclo while si la condición es falsa desde un inicio, es posible que el ciclo nunca se ejecute

http://php.net/manual/es/control-structures.while.php
http://php.net/manual/es/control-structures.do.while.php

### Foreach

El ciclo foreach nos brinda una solución simple para iterar sobre los valores de un arreglo, la sintaxis es la siguiente:

```
foreach ($array as $valor) {
    sentencias que pueden usar $valor
}
```

En esta sintaxis nos encontramos con 4 partes:

- La palabra reservada foreach simplemente indica el inicio de nuestro bloque
- Dentro de paréntesis se escribe el nombre del arreglo que vamos a estar iterando, este arreglo debe estar definido previamente, en este ejemplo es $arreglo
- La palabra “as” seguido de un nombre de variable que usaremos para acceder al elemento del arreglo que estamos accediendo, esta variable no debe existir previamente y solo la podrán usar dentro de este bloque. En el ejemplo es $valor.
- Entre llaves “{ }” todas las acciones que queremos repetir, en el momento en que se ejecute el ciclo la variable que definimos para iterar (en el ejemplo $valor) ya existe y podrá ser usada en esta sección, piensa que el valor de esta variable estará cambiando en cada iteración.


Suponiendo que en el ejemplo anterior $array = [‘uno’, ‘dos’, ‘tres’], el ciclo se repetirá 3 veces y en cada iteración la variable $valor contendrá el elemento del arreglo correspondiente, es decir, en la primera iteración $valor será igual a ‘uno’, en la segunda $valor será igual a ‘dos’ y en la tercera $valor será igual a ‘tres’.

Existe una sintaxis alternativa que nos permite no solo conocer el valor, también nos permitirá conocer la llave, de este modo tendremos acceso tanto a la llave como al valor del elemento del arreglo:

```
foreach ($array as $llave => $valor) {
    sentencias que pueden usar $llave y $valor
}
```

Aprovechemos para practicar y veamos más sobre condiciones, en PHP tenemos el operador de comparación (==) y diferente de (!=).

Tenemos la sentencia continue la cuál al ejecutarse hará que se itere a la siguiente línea del arreglo. Y la sentencia break que hará que el ciclo se termine.

http://php.net/manual/es/control-structures.foreach.php

## Operadores, Condicionales, Continue y Break

En PHP existen cuatro tipos principales de operadores:

- Aritméticos.
- Asignación.
- Condicionales.
- Incremento.
    - ++$a 	Pre-incremento: Incrementa $a en uno, y luego retorna $a.
    - $a++ 	Post-incremento: Retorna $a, y luego incrementa $a en uno.
    - --$a 	Pre-decremento: Decrementa $a en uno, luego retorna $a.
    - $a-- 	Post-decremento: Retorna $a, luego decrementa $a en uno.

## Operadores

Antes de continuar hablando de operadores es importante mencionar que existe un concepto conocido como **precedencia de operadores** el cual nos permitirá saber en qué orden se deben ejecutar los operadores que se encuentren en una sola sentencia.

Por ejemplo, en la sentencia:

```
1 + 2 * 3
```

Se ejecutará primero la operación 2 * 3
Luego se ejecutará la suma con 1

Esto es debido a que * tiene más valor en la precedencia que el +.

Una forma sencilla de controlar la precedencia es utilizando () paréntesis, de esta forma podemos forzar el orden que nosotros queramos, por ejemplo (1 + 2) * 3 será una versión diferente y se ejecutará primero la suma y luego la multiplicación.

Te dejo el enlace por si quieres consultar más información al respecto. [Precedencia](#http://php.net/manual/es/language.operators.precedence.php)

Ahora continuemos hablando sobre los tipos de operadores, algunos ya los vimos, pero de igual forma vamos a reforzarlos enfocándonos en los más importantes.

Fuente: [php.net/operadores](#https://www.php.net/manual/en/language.operators.php)

## Ejercicios-de-Operadores

## Funciones

Las funciones en PHP se denotan por la palabra reservada function seguida por el nombre de la función, las funciones nos servirán para llamar y reutilizar código en nuestros proyectos.

Cuando trabajemos con funciones es muy importante cuidar el scope (alcance) de las variables pues, algunas podrían entrar en su scope y otras no.

Las funciones en PHP pueden o no regresar un dato particular. Si deseamos hacerlo podemos indicarlo con la palabra reservada return.

RETO: Utiliza condicionales para validar los años que tengan valor cero.

## Agregando archivos externos

Organizaremos mejor nuestro código para ello lo separaremos en otro archivo llamado jobs.php.

Usaremos la palabra reservada include para hacer que el archivo index incluya el archivo jobs.php, si lo encuentra lo incluye, pero si no nos mostrará un warning. Existe otro llamado require que si no lo encuentra nos muestra un error en todo el archivo.

Los métodos include y require ejecutan el código del archivo cada vez que lo incluyen, esto puede traer errores en la ejecución de tu código si tienes archivos con funciones pues te dirá que no puedes declarar dos veces una función con el mismo nombre. Para resolver esto existen include_once y require_once que obligan a incluir una sola vez el archivo.

## Programación Orientada a Objetos

La programación orientada a objetos nos ayudará a estructurar mejor nuestros programas. PHP a partir de su versión 5 tiene implementaciones orientadas a objetos, lo que lo hace tener código más reutilizable y mantenible.

Una clase es una plantilla o definición de algo. Y una instancia es la representación concreta de la clase.

Encapsulamiento será el nivel de visibilidad que queramos darle a alguna variable, para ello podemos utilizar los modificadores de acceso private, public y protected.

Con la palabra reservada this estaremos haciendo referencia a la variable que pertenece a la clase.

## Constructor y Métodos

El método constructor nos permitirá inicializar valores por default, así como también pasar datos como parámetro al momento de inicializar un objeto.

Todas las funciones que tienen __ antes del nombre de la función se conocen como métodos mágicos, investiga más y crea un tutorial en la sección de Tutoriales del curso.

## Herencia

La herencia permite que ciertas clases tengan características de una clase padre. Esta clase se llamará hijo.

Como una buena práctica en PHP lo mejor es tener dividido el código en diferentes archivos. Justo esto es lo que haremos con la definición de la clase Jobs que ahora deberá tener el mismo nombre del archivo, este será BaseElement.php.

Ahora en otro archivo crearemos la clase Job que será hija de BaseElement.php. La herencia la expresaremos con la palabra reservada extends.

Es muy conveniente utilizar require_once cuando queremos utilizar herencia e incluir clases que están en otros archivos.

Dentro de nuestra clase hijo podemos sobrescribir algún método del padre, esto es un concepto que conocemos como polimorfismo. Lo que polimorfismo quiere decir es que tendremos un método que va a funcionar de acuerdo con su contexto donde es llamado.

Si tenemos propiedades con la palabra private en nuestra clase padre, desde nuestra clase hija no podremos acceder a esta propiedad, pero si queremos que siga siendo privada y que las clases hijas tengan acceso podemos usar la palabra clave protected.

## Herencia y Polimorfismo

## Interfaces

Las interfaces se pueden ver como un contrato o un acuerdo en el que se pueden estandarizar ciertas cosas.

La palabra reservada que utilizaremos para declarar una interfaz será interface. Y la que nos indicará que estamos usando una interfaz en una clase será implements.

Usando Type Hinting estableceremos el tipo de dato que esperamos ya sea una clase o un tipo de dato específico.

La herencia en PHP será de forma sencilla es decir solo que podrá hacer herencia de una sola clase, por lo contrario, con las interfaces que sí podemos implementar varias al mismo tiempo.

## Namespaces

Esta es una forma de mantener únicos los nombres de los archivos en el mismo directorio.

Esto nos permite tener mejor organizado el proyecto.

Para declarar un espacio de nombres privado se utiliza la palabra reservada namespace.

- Evita la colisión de nombres (de clases).

## PSR y PHPFIG

Varios programadores se unieron para crear un grupo llamado PHP-FIG con el objetivo de avanzar en la interoperabilidad de librerías en PHP. Este grupo creo el PSR que son recomendaciones y estándares para tu código de PHP.

**PHPFIG**: es un grupo de desarrolladores que tienen como objetivo lograr avanzar en la interoperabilidad de las librerías y las herramientas que tenemos en PHP. **PSR** (PHP Standars Recommendations): han sido diferentes estándares que hemos ido generando a lo largo del tiempo para poder lograr esta interoperabilidad en nuestros proyectos.

## Composer

Vamos a añadir a nuestro proyecto un manejador de dependencias de PHP llamado Composer, no solo nos ayudara a traer librerías de tercero al proyecto además va a implementar el estándar PSR4 que nos va a permitir tener el cargado de archivos automático.

composer.phar será un documento que nos servirá para manejar las dependencias en PHP, esta va muy de la mano con otro archivo llamado composer.json.

## Consideraciones

- Entornos de producción (XAMPP, LAMP, AWS).
- Interprete de PHP.