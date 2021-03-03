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
        <li><a href="<?php echo FRONT_ROOT."Cellphone/ShowViewsAddCellphone"?>">Add</a></li>
        <li><a href="<?php echo FRONT_ROOT."Cellphone/ShowViewsListCellphone"?>">List - Remove</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="content"> 
      <div class="scrollable">
      <form action="<?php echo FRONT_ROOT ."Cellphone/delete"?>" method="get">
      <h1 style="color: orchid;";> <?php if(isset($message)){ echo $message ;}?></h1>
        <table style="text-align:center;">
          <thead>
            <tr>
              <th style="width: 15%;">Code</th>
              <th style="width: 30%;">Brand</th>
              <th style="width: 30%;">Model</th>
              <th style="width: 15%;">Price</th>
              <th style="width: 10%;">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          if(isset($listCellphone)){
            foreach($listCellphone as $cell){?>
            <tr>
                <td><?php echo $cell->getCode()?></td>
                <td><?php echo $cell->getBrand()?> </td>
                <td><?php echo $cell->getModel()?></td>
                <td><?php echo $cell->getPrice()?></td>
                <td>
                  <button type="submit" class="btn" name ="id" value="<?php echo $cell->getId();?>"> Remove </button>
                </td>
              </tr>
            <?php
            }
          }
          ?>
          </tbody>
        </table></form> 
      </div>
    </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?php 
  include('footer.php');
?>