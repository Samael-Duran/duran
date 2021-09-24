
# Formularios

 >Los formularios son los elementos en los que se integran los botones y las áreas de texto que se utilizan para que los usuarios introduzcan sus datos o que puedan elegir entre varias opciones.

### Etiquetas para creacion de formularios

 >El principio y final de un formulario se define con las etiquetas <form> y </form>. HTML5 dispone de un gran número de elementos de formulario como puedes ver en la siguiente tabla.

Etiqueta | Descripcion
-------- | ------------
<form> | Define un formulario.
<fieldset> | Permite organizar en grupos los campos de un formulario.
<legend> | Representa el título de un <fieldset>.
<label>	| Representa el título de un elemento de control de un formulario.
<input>	| Se usa para crear controles interactivos que reciben datos del usuario. Ver atributos
<button> | Representa un botón.
<option> | Representa una opción en un elemento <select> o <datalist>.
<select> | Representa un elemento de control que permite la selección entre un conjunto de opciones <option>.
<optgroup> | Representa un conjunto de opciones, agrupadas lógicamente.
<datalist> | Representa un elemento de control que permite la selección entre un conjunto de opciones <option>.
<textarea> | Representa un elemento de control de edición de texto multilínea.
<output> | Representa el resultado de un cálculo.

### Tipos de Input

 >Algunos de los inputs o controles más utilizados son los siguientes:

 * button
 * checkbox
 * color
 * date
 * email
 * file
 * image
 * month
 * number
 * password
 * radio
 * range
 * search
 * submit
 * tel
 * text
 * time
 * url
 * week.

 ### Atributos ed validacion

 Atributos para validar campos

 La validación de los datos introducidos por los usuarios en los campos de los formularios es esencial para ofrecer al usuario información sobre los datos que se están solicitando. 

Atributo | Ejemplo
-------- | --------
placeholder | placeholder=”Indica tu nombre”
required | required=”true” o required
pattern | pattern=”[a-z]{1,5}”
min	| min=”1”
max	| max=”100”
step | step=”2” (saltos en un rango de números: 0, 2, 4…)
disabled | disabled=”true” o disabled
autofocus | autofocus=”true” o autofocus
autocomplete | autocomplete=”true” o autocomplete

### Atributo Pattern y expresiones regulares

El atributo pattern nos permite definir nuestras propias reglas para validar el valor de entrada de los campos usando expresiones regulares o regexp (contracción de las palabras inglesas regular expression).

 Clases de caracteres | Descripcion
 ---------------------- | ----------
. |  Cualquier carácter excepto salto de línea
[abc] | ualquiera de los caracteres entre corchetes
[^abc] | Que NO sea cualquiera de los caracteres entre corchetes
[a-g] | Cualquier carácter entre a y g (en minúscula)
(a|b) | a o b

 Anclas | Desscripcion
 ------ | ------------
^abc | Comienzo de una línea
abc$ | Final de una línea

Caracteres específicos | Descripcion
---------------------- | ------------
\w\ d \s | Palabra, dígito, espacio en blanco
\W \D \S | Que NO sea palabra, dígito o espacio en blanco
\t \n \r | Tabulador, salto de línea, retorno de carro

Cuantificadores | Descripcion
--------------- | -----------
a* a+ a? | 0 o más veces, 1 o más veces, 0 o 1 vez
a{5} a{2,} | Solo 5, 2 o más
a{1,3} | Entre 1 y 3