
## Propragacion de eventos

El principio de propagación es simple.

Cuando un evento ocurre en un elemento, este primero ejecuta los manejadores que tiene asignados, luego los manejadores de su padre, y así hasta otros ancestros.

Esto significa que si tenemos una *<p>* en el interior de un anidado *<div>*, en el interior de un anidado *<form>*, los manipuladores se les ejecutan en orden: *<p> -> <div> -> <form>*. Este burbujeo se ejecutará hasta que llegue a la parte superior de los elementos, a través del html, el document objecty hasta el window. Casi todos los eventos aparecerán, con pocas excepciones como focus.

    <form onClick="alert('You clicked the form!')">
        <div onClick="alert('You clicked the div!')">
        <p>If you click me, the other handlers will still run!</p>
        </div>
    </form>