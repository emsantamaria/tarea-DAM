<?php

function mayorEdad(int $edad): string{
    if ($edad < 18) {
        return "Eres menor de edad";
    }
    return "Eres mayor de edad";
 }

 echo mayorEdad(edad: 18);
?>