<?php
    $parameters = array();

    if ($_SERVER['REQUEST_METHOD'] == "POST")
        $parameters = $_POST;
    else
        $parameters = $_GET;

       
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>List info</title>
        <link rel="stylesheet" href="baseStyle.css">
    </head>
    <body>
    <div>
      <table>
      <tr>
            <th colspan="2" class="header-row-color">YOUR BASIC INFO</th>
     </tr>
      <tr>
          <th >Name</th>
          <td><?php echo $parameters['name']?></td>
      </tr>
      <tr>
          <th>Email</th>
          <td><?php echo $parameters['email']?></td>
    </tr>      
    <tr>
          <th >Password</th>
          <td><?php echo $parameters['password']?></td>
     </tr>     
     <tr>
     <tr>
          <th >Bithday</th>
          <td><?php echo $parameters['bithday']?></td>
     </tr>     
     <tr>
          <th >sex</th>
          <td><?php  if(isset($parameters['sex'])){ echo $parameters['sex'] ;}else{ echo "Unspecified";} ?></td>
      </tr>
      <tr>
        <th colspan="2" class="header-row-color">YOUR PROFILE</th>
      </tr>
      <tr>
          <th >About You</th>
          <td><?php if(isset($parameters['aboutyou']) && $parameters['aboutyou'] != ""){ echo $parameters['aboutyou'] ;}else{ echo "Unspecified";}?></td>
      </tr>
      <tr>
          <th>Role</th>
          <td><?php echo $parameters['role']?></td>
    </tr>      
    <tr>
          <th>Interests</th>
          <?php
          $busca=true;
    
          foreach($parameters as $key =>$value){ 
            if($key != "role" && $busca ==true){
              array_shift($parameters);
            }else{
                $busca = false;
            }
          } 
          array_shift($parameters);
          ?>
          <td><?php
             echo  implode("<br> ",$parameters);
           ?></td>
     </tr> 
      </table>
      <br>
      <a href="index.php">Regresar al Formulario</a>
      </div>
    </body>
</html>