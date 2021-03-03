<?php 
$people = [ 
    ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
    ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
    ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
    ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
    ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
    ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
    ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'],
];
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
         <h3>Ejercicio 9 y 10</h3>
         <h2>Basic HTML Table</h2>
 <table>
      <tr>
        <td>Name</td>
         <td>Age</td>
         <td>sex</td>
      </tr>
     <tr>
     <?php if(isset($_POST)){
    $existe = false;
    foreach($people as $person){
        if($person['name'] == $_POST['name'] && $person['age'] == $_POST['age'] && $person['sex'] ==$_POST['sex']){
          $existe =true;
        }
      }
        if($existe == true){
          ?>
          <th><?php echo $_POST['name'] ;?></th>
          <th><?php echo $_POST['age'] ;?></th>
          <th><?php echo $_POST['sex'] ;?></th>
         <?php 
         }else{
          header("Location:index.php");
         }
        }?>
      </tr>
    </tabe>
 </body>
</body>
</html>   