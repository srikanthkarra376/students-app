
<?php include 'header.php';?> 
<div class="container mt-1 bg-white shadow-sm p-3 mb-5 bg-secondary rounded">
<div id="editUser" >
<h2 class="mb-2 text-success">Add a new student</h2>
<form method="post" action="send.php" >
  <div class="form-group ">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name"id="name"  required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="email"   required>
  </div>
  <div class="form-group">
     <button type="submit" class="btn btn-success">Add student</button>
  </div>
 
</form>
</div>

</div>
<?php include 'footer.php' ?>
