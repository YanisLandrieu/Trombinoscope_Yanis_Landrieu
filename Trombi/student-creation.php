<?php 
// On appel le header
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/function.php';

?>
<div class="container">
    <form method="$_GET" action="./controllers/student-creation-controller.php">
      <div class="form-group">
        <label class="text-white" for="InputFirstName">Nom Prénom</label>
        <input required type="text" class="form-control" id="InputFirstName" name="firstname" placeholder="Entrez votre nom et prénom">
      </div>
      <div class="form-group">
        <label class="text-white" for="InputLastName">Bachelor</label>
        <input required type="text" class="form-control" id="InputLastName" name="lastname" placeholder="Entrez votre bachelor">
      </div>
      <div class="form-group">
        <label class="text-white" for="InputLastName">image nom</label>
        <input required type="file" class="form-control" id="InputLastName" name="img_name">
      </div>
      <select name="class" >
        <option value="1">Bachelor 1</option>
        <option value="2">Bachelor 2</option>
        <option value="3">Bachelor 3</option>
      </select>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
<?php 
// On appel le header
require_once __DIR__ . './inc/footer.php'

?>