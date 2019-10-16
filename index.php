<!DOCTYPE html>
<!--
PROGRAMA EN PHP PARA MANEJO DE ARREGLOS CON FOREACH
Y TAMBIÉN TRADUCE LA INTERPRETACION DEL COLOR DE OTRO ARREGLO
UTILIZA TABLA PARA PRESENTAR LA INFORMACIÓN
PROGRAMA: DESARROLLO WEB CON PHP
ELABORO: LUIS ARMANDO AMAYA QUIROGA
EVIDENCIA: TALLER AA2
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manejo de arreglos utilizando FOREACH</title>
    </head>

      
  <?php
  /* En esta parte del programa se muestra crea el arreglo con la  
   * información correspondiene de cada persona
  */
  $datosArray = array(
 array("nombre" => "Pedro", "apellidos" => "Perez Vidal", 
     "direccion" => "Cra 63 #45-32", "telefono" => "675832145",
      "fechacumpleanos" => "11/05/1983", "color" => "Amarillo"),
    
  array("nombre" => "Juan", "apellidos" => "Guillén Gastón", 
      "direccion" => "Cra 12 #23-43", "telefono" => "674562178",
      "fechacumpleanos" => "12/08/1980", "color" => "Verde"),

   array("nombre" => "Dolores", "apellidos" => "Candela Arias", 
       "direccion" => "Av. 6 #4-30", "telefono" => "689765432",
        "fechacumpleanos" => "02/038/1991", "color" => "Blanco"),
      
    array("nombre" => "Rubén", "apellidos" => "Guardia Jurado",
        "direccion" => "Calle  8 #5-12", "telefono" => "654213896",
        "fechacumpleanos" => "08/07/1992", "color" => "Violeta"),      
        
     array("nombre" => "Miguel", "apellidos" => "Toro Vazquez",
        "direccion" => "Calle  8 #5-12", "telefono" => "654213896",
        "fechacumpleanos" => "08/04/1989", "color" => "Rojo"),
      
          );
   /* En esta parte del programa se muestra crea el arreglo con la  
   * información correspondiene de cada color y su significado
  */
  
  
     $colorSignificadoArray = array(
        "Amarillo" => "Riqueza y alegria",
        "Blanco" => "Paz",
        "Verde" => "Naturaleza y armonía",
        "Azul" => "Tranquilidad",
        "Rojo" => "No se encuentra significado",
        "Violeta" => "No se encuentra significado",
         );
     ?>
    
  <!-- En esta parte del programa se muestra crea el encabezado, la estructura -->  
  <!-- principal de la tabla de cada una de las columnas -->
    
   
    <h1 align="center">LISTADO DE PERSONAS</h1>
    <h3 align="center">Manejo de arreglos utilizando FOREACH, busca significado de color</h3>
    <h3 align="center">Elaboró: Luis Armando Amaya Q.</h3>
    <table width="100%" border="1px" align="center">

    <tr align="center">
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Dirección</td>
        <td>Telefono</td>
        <td>Fecha Cumpleaños</td>
        <td>Color</td>
        <td>Significado</td>
    </tr>
    
        
     <!-- En esta parte del programa se se utiliza la instrucción foreach para -->  
        <!-- recorrer el arreglo de las personas -->
    
     <?php
         foreach ($datosArray as $personasArray) {
     ?> 
    
        
    <!-- En esta parte del programa se En esta parte del programa se muestra la información -->  
     <!--  en cada columna de la tabla -->
     
     <tr>
                <td><?php echo $personasArray["nombre"]?></td>
                <td><?php echo $personasArray["apellidos"]?></td>
                <td><?php echo $personasArray["direccion"]?></td>
                <td><?php echo $personasArray["telefono"]?></td>
                <td><?php echo $personasArray["fechacumpleanos"]?></td>
                <td><?php echo $personasArray["color"]?></td>
        
                             
      <!-- En esta parte del programa se realiza la interpretación -->  
     <!--  de cada color, según el segundo arreglo -->       
                <?php 
                $color=$personasArray["color"]
                ?>
                
                <td><?php echo $colorSignificadoArray[$color]?></td>
                
             </tr> 
             
             <?php   
                }
              ?>
                        
      </table>
    
</html>
