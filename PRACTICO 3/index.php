<?php 
#ejercicio 1
$myNumber = 123; 
$numberString = "123";
#ejercicio 1.a
echo  " 1.a suma de string y number <br>";
echo   $myNumber + $numberString ;
#ejercicio 1.b
echo "1.b  suma al inverso <br> ";
echo  $numberString + $myNumber ;
#ejercicio 1.c
echo " 1.c numberString .myNumber <br>";
echo $numberString. $myNumber ."<br>";

echo " ejercicio 2 <br> ";
if(1 == "1"){
    echo " 2.a It´s right <br>"; 
}else{
    echo " 2.a false <br> ";
}

if(1==="1"){
    echo "2.b  It´s right<br>"; 
}else{
    echo " 2.b false <br> ";
}

if(!null){
    echo "2.c It´s right <br>"; 
}else{
    echo " 2.c false <br> ";
}

if(!false){
    echo "2.d It´s right <br>"; 
}else{
    echo " 2.d false <br> ";
}

if(""){
    echo "2.e It´s right <br>"; 
}else{
    echo " 2.e false <br> ";
}

if(" "){
    echo "2.f  It´s right <br>"; 
}else{
    echo " 2.f false <br> ";
}

if("tested"){
    echo "2.g It´s right <br>"; 
}else{
    echo " 2.g false <br> ";
}

if(1-1){
    echo "2.h It´s right <br>"; 
}else{
    echo " 2.h false <br> ";
}

echo "ejercicio 3 <br>";

function multiplicar($x,$y){
    echo $x * $y ;
}
function dividir($x , $y ){
    if ($x > $y){
        echo  $x/$y ;
    }else{
        echo "el numerador debe ser mayor al dividor <br>";
    }
}

echo  " multiplcar 2x3 " . multiplicar(2,3)  ."<br>" ;
echo  " multilicar 5x20 "  . multiplicar(5,20) ."<br>" ;
echo  " multiplcar 3x3  " . multiplicar(3,3)  ."<br>" ;
echo  " dividir 5/20  "  . dividir(5,20) ."<br>" ;
echo  " dividir 35/5  " . dividir(35,3)  ."<br>" ;
echo  " dividir 20/5  "  . dividir(20,5) ."<br>" ;


echo " ejercicio 4 <br> ";
$array = [  
    1   => "first value",
    "1"  => "second value",    
    1.2  => "tirth value",    
    true => "fourth value",    
    1+0.2 => "fifth value",    
    false !== null => "sixth value", 
];

echo "cantidad de elementos " . count($array) ."<br>" ;
echo " el resto de los elementos no son balidos ya que los array clave valor la clave debe ser numeros enteros o string <br>";
foreach($array as  $key => $value){
    echo "key" . $key . " =>" . $value ."<br>";
}
echo "ejercicio 5 <br>";
$people = [ 
    ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
    ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
    ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
    ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
    ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
    ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
    ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'],
];
foreach( $people as $person){ 
   echo " name : " .$person['name'] ." age : " . $person['age'] . " sex : " . $person['sex'] ."<br>";
   }

$count =0;
 foreach( $people as $person){ 
     if ($person['age'] >= 18){
       $count++ ;
     }
    }
    echo "exercise 5.a mayores de edad :" . $count .".<br>" ;

    $mujerMenEdad =0;
    foreach($people as $person){
        if($person['sex'] == 'm' && $person['age']< 18){
            $mujerMenEdad++;
        }
    }

    echo " Ejercicio 5.b mujeres menores de edad cantidad : " . $mujerMenEdad . "<br>";

?>
<!DOCTYPE HTML>
<html>  
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>
<body>
<h3>Ejercicio 5.c</h3>
<h2>Basic HTML Table</h2>

<table>
  <tr>
    <th>Firstname</th>
    <th>Age</th> 
    <th>Sex</th>
  </tr>
  <tr>
  <?php foreach($people as $person){?>
    <td><?php echo $person['name'];?></td>
    <td><?php echo $person['age'];?></td>
    <td><?php echo $person['sex'];?></td>
  </tr>
  <?php
 } 
 ?>
  </table>
  <br>
  <h3>Ejercicio 5.D</h3>
<h2>Basic HTML Table</h2>
<table>
<caption>Array age people</caption>
<tr>
  <?php foreach($people as $person){?>
   
  <?php #unset(), esta función elimina una variable o un elemento de un array u objeto.*/?>
    <?php unset($person['name'],$person['sex']);?>
    <th><?php echo $person['age'];?></th>
  <?php
 } 
 ?>
 </tr>
  </table>
  </body>
  </html>
  <?php
/*La date()función PHP se utiliza para formatear una fecha y / o una hora.
La date()función PHP da formato a una marca de tiempo a una fecha y hora más legibles.
Una marca de tiempo es una secuencia de caracteres que indica la fecha y / o la hora en la que ocurrió
 un determinado evento.
El parámetro de formato requerido de la función date () especifica cómo formatear la fecha (u hora).
A continuación, se muestran algunos caracteres que se utilizan comúnmente para las fechas:
d - Representa el día del mes (01 a 31)
m - Representa un mes (01 a 12)
Y: representa un año (en cuatro dígitos)
l ('L' minúscula): representa el día de la semana
También se pueden insertar otros caracteres, como "/", "." O "-" entre los caracteres para agregar 
formato adicional. */
#EXERCISE 6.A
echo "ejercicio 6 <br>";

echo "ejercicio 6.a => the day of the week is :" . date('l') ."<br>";
echo "ejercicio 6.b <br>";
if (date('l')  == 'Friday' xor date('l') == 'Saturday' xor date('l') == 'Sunday'){
    echo " it is weekend <br> ";
}

function isWeekend()
{
    if(date("w", time()) == 0 || date("w", time()) == 6)
    {
        echo " Es fin de semana<br>";
    }else{
        echo " No es fin de semana :(<br>";
    }
}

echo "<br> ". isWeekend();

echo "ejercicio 7 <br>";
?>
<!DOCTYPE HTML>
<html>  
<body>

<form action="actionVentas.php" method="post">
<label>Producto</label>
<input type="radio" id="fmascota" name="producto"  value="mascota" >
<label for="fmascota">Mascota</label>
<input type="radio" id="fropa" name="producto" value="ropa">
<label for="fropa">Ropa</label>
<br>
<label>Catidad de productos </label>
<input type="number" min="1" max="50" name="cantpro" requied>
<br>
<input type="submit">
</form>

</body>
</html>

<?php 
echo "ejercicio 8 <br>";

function maximoNUMBER ($a,$b,$c,$d){
    echo "maxima de los numeros es : " . max($a,$b,$c,$d) ."<br>";
}
echo maximoNUMBER(3,5,8,1);

function maxiVar($var1,$var2,$var3,$var4){
    $max = $var1;
    if($max < $var2){
       $max = $var2;
    }else{
        $max = $var1;
    }
    if($max < $var3){
        $max = $var3;
     }
     if($max < $var4){
         $max = $var4;
     }
        return $max ;
}

echo "maxi of var is : ". maxiVar(10,9,7,20) . "<br>";

?>
<!DOCTYPE html>
<html>
<body>
<form action="formPeople" method="post">
<br>
<h2>form people</h2>
<label for="fname">Name</label>
<input type="text" id="fname" name="name" requied><br>
<br>
<label>Age</label>
<input type="number" name="age" min="1" max="100" requied><br>
<br>
<label>Sex</label>

<input type="radio" id="fm" name="sex" value="m">
<label for="fm">M</label>
<input type="radio" id="ff" name="sex" value="f">
<label for="ff">F</label><br>
<br>
<input type="submit">
<br>
</from>
</body>
</html>