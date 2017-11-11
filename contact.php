<?php 
$page = 'contact';
 ?>
<?php require 'partials/header.php'; ?>
<div class="container mt-5">
  <form action="">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" name="Email" id="Email" class="form-control">
    </div>
    <div class="form-group">
      <label for="Commets">Commets</label>
      <textarea name="Commets" id="Commets" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <button class="btn btn-info">Contact us</button>
    </div>
    
  </form>
</div>
<?php require 'partials/footer.php'; ?>
