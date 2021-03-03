<?php 
 include('header.php');
 include('nav-bar.php');
?>
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" style="background-image:url('../images/demo/backgrounds/1.png');">
  <div class="overlay">
    <div id="breadcrumb" class="clear"> 
      <ul>
        <li><a href="<?php echo FRONT_ROOT."Home/SingLogin"?>">Home</a></li>
        <li><a href="<?php echo FRONT_ROOT."Home/ShowViewsAddCellphone"?>">Add</a></li>
        <li><a href="<?php echo FRONT_ROOT."Cellphone/ShowViewsListCellphone"?>">List - Remove</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
<main class="container clear"> 
    <div class="content"> 
      <div id="comments" >
        <h2>ADD NEW CELLPHONE</h2>
        <form action="<?php echo FRONT_ROOT ."Cellphone/add";?>" method="post"  style="background-color: #EAEDED;padding: 2rem !important;">
        <h1 style="color: orchid;";> <?php if(isset($message)){ echo $message ;}?></h1>
          <table> 
            <thead>
              <tr>
                <th>Code</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody align="center">
              <tr>
                <td style="max-width: 100px;">
                  <input type="number" name="code" min="1" max="999" size="30" required>
                </td>
                <td>
                  <input type="text" name="brand" size="20" required>
                </td>
                <td>
                  <input type="text" name="model" size="20" required>
                </td>     
                <td>
                  <input type="number" name="price" size="10" min ="0" required>
                </td>         
              </tr>
              </tbody>
          </table>
          <div>
            <input type="submit" class="btn" value="Agregar" style="background-color:#DC8E47;color:white;"/>
          </div>
        </form>
      </div>
    </div>
  </main>
</div>
<!-- ################################################################################################ -->

<?php 
  include('footer.php');
?>