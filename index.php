<!DOCTYPE html>
<html>
 <head></head>
 <body>
  <form action="/form_data.php" method="POST">
   <select name="Cigarette_brand[]" multiple size="3">
    <option>Marlbaro</option>
    <option>LM</option>
    <option>Camel</option>
   </select>
   <br>
   <input type="radio" name="Sex" Value="F">Female<br>
   <input type="radio" name="sex" Value="M">Male<br>
   <input type="text" name="First_name"><br>
   <input type="range" name="price" min="0" max="100" step="1" value="50"><br>
   <textarea name="Message"></textarea><br>
   <button name="button">Send me</button>
  </form>
 </body>
</html>