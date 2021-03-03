<!DOCTYPE html><!-- define que el documento es de tipo HTML5-->
<html><!-- es el elemento raíz de una página HTML-->
    <head><!-- contiene meta información sobre el documento -->
        <meta charset="utf-8"> <!-- define metadata sobre un documento HTML -->
        <title>First Form</title><!-- especifica el título del documento (title bar) -->
        <link rel="stylesheet" href="baseStyle.css"><!-- especifica una relación entre el documento y un recurso externo -->
    </head>
    <body><!--posee el contenido visible de la página-->
  <form  action="action.php" method="POST"><!--El actionatributo define la acción a realizar cuando se envía el formulario.
El methodatributo especifica el método HTTP que se utilizará al enviar los datos del formulario-->
      <h1>Contact Form</h1>
<br>
<fieldset><!--elemento se utiliza para agrupar datos relacionados en un formulario. -->
<legend><span class="number" style="background-color: #48a564;">1 </span>Your basic info</legend><br><!-- El <legend>elemento define un título para el <fieldset> elemento.-->
<label for="fname">Name</label><br>  <!--El <label>elemento define una etiqueta para varios elementos de formulario.-->
   <input type="text" id="fname" name="name" required><br>
   <br>
<label for="femail">Email</label><br>
  <input type="email" id="femail" name="email" required><br>
  <br>
<label for="fpassword">Password</label><br>
  <input type="password" id="fpassword" name="password" required><br>
<br>
<label for="fbithday">Bithday</label><br>
  <input type="date" id="fbithday" name="bithday" required><br>
<br>
<label>Sex : </label><br>
  <input type="radio" id="fmale" name="sex" value="male">
<label for="fmale">Male </label>
  <input type="radio" id="ffemale" name="sex" value="female">
<label for="ffemale">Female</label><br>
<br>
</fieldset>
<br>
<fieldset>
   <legend><span class="number" style="background-color: #48a564;">2</span>Your profile</legend>
   <br>
   <label for="faboutyou" >About you</label><br>
   <textarea id="faboutyou" name="aboutyou"></textarea>
<br>
 <label for="frole">Role</label><br>
 <br>
    <select id="frole" name="role">
       <optgroup label="Web">
          <option value="frontend_developer">Frontend developer</option>
          <option value="backend_developer">Backend developer</option>
          <option value="python_developer">Python developer</option>
          <option value="web_designer">Wed designer</option>
          <option value="php_developer">PHP developer</option>
      </optgroup>
      <optgroup label="mobile">
         <option value="Android_developer">Androild Developer</option>
         <option value="iOS_developer">iOS Developer</option>
         <option value="mobile_designer">Mobile Designer</option>
      </optgroup>
    </select><br>
<br>
<label>Interests</label><br>
<br>
<input type="checkbox" id="fdatabase" name="database" value="DataBase">
<label for="fdatabase">Data Base</label>

<input type="checkbox" id="fdesign" name="design" value="design">
<label for="fdesign">Design</label>

<input type="checkbox" id="fbusiness" name="business" value="business">
<label for="fbusiness">Business</label>

<input type="checkbox" id="funitTest" name="unitTest" value="unitTest">
<label for="funitTest">Unit Test</label>

<input type="checkbox" id="fCloudDevelopment" name="CloudDevelopment" value="CloudDevelopment">
<label for="fCloudDevelopment">Cloud Development</label>

<input type="checkbox" id="fWebDevelopment" name="WebDevelopment" value="WebDevelopment">
<label for="fWebDevelopment">Web Development</label><br>
</fieldset>
<br>
<button type="submit">Send</button>
<button type="reset">Reset</button>
<br>
</form>
</body>
</html>