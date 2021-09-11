# Definicion del modelo de caja

El modelo de caja es la manera en que se representan todos los elementos html en una página. Cada elemento genera una caja, el comportamiento de esa caja depende de su clasificación: si es de línea o de bloque.

## Partes del modelo

* Margin

* Border

* Padding

* Content

    ![Alt Text](https://lenguajecss.com/css/modelo-de-cajas/que-es/modelo-de-cajas.svg)

## Codificacion de un modelo de caja

    div {
        width: 300px;
        padding-left:  50px;
        padding-right: 50px;
        margin-left:   30px;
        margin-right:  30px;
        border: 10px solid black;
    }
