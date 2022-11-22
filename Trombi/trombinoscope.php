<?php 
// On appel le header
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/controllers/student-creation-controller.php';
$users = get_all_link();


?>

<div class="container">
<?php foreach ($users as $user) : ?>
<div class="row">
  <div class="card" style="width: 18rem; ">
    <img class="card-img-top" src="/Trombi/assets/img/son celeb.jpg">
    <div class="card-body">
      <h5 class="card-title"><?= $user['nom'] ?></h5>
      <h5 class="card-title"><?= $user['prenom'] ?></h5>
    </div>
</div>
<?php endforeach; ?>
</div>
</div>

<?php 
// On appel le header
require_once __DIR__ . './inc/footer.php'
?>
