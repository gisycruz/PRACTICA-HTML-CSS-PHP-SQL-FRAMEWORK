<?php require_once(VIEWS_PATH."validate-session.php") ?>
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
      <h1>Cellphones</h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a class="drop" href="#">Actions</a>
          <ul>
            <li><a href="<?php echo FRONT_ROOT."Home/ShowViewsAddCellphone"?>">ADD</a></li>
            <li><a href="<?php echo FRONT_ROOT."Cellphone/ShowViewsListCellphone"?>">LIST/REMOVE</a></li>
            <li><a href="<?php echo FRONT_ROOT."Home/SingLogin"?>">Sing Login</a></li>
      </ul>
    </nav>
  </header>
</div>