
<?php 
 include 'header.php';
 include 'db.php';

  $id =$_GET['id'];
  $name=$_GET['name'];
  $email=$_GET['email']; 

?> 
<div class="container mt-1 bg-white  shadow-md p-3 mb-5 bg-secondary rounded">
<div id="editUser">
<h2 class="mb-2 text-info">Edit student information:</h2>
<form method="POST" action="update.php?id=<?php echo $id;?>">
  <div class="form-group p-1">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name"id="name" value="<?php echo $name;?>" required >
  </div>
  <div class="form-group p-1">
    <label for="email">Email:</label>
    <input type="email" class="form-control text-secondary" name="email" id="email" value="<?php echo $email;?>" required>
  </div>
  <div class="form-group p-1">
  <button type="submit" class="btn btn-info">Update Student</button>
  </div>
</form>
</div>

</div>
<?php include 'footer.php' ?>
