
<?php include 'header.php';?>

<div  class="container bg-white mt-1  bg-white shadow-sm p-3 mb-5 bg-white rounded">

<div class="container  ">
<h2 class="mb-4 pt-3 text-info text-center">Student details:</h2>
  <table class="table table-striped bordered">
    <tr  class=" text-center thead-light bg-light">
      <th class=" text-left" scope="col">S.NO</th>
      <th class=" text-left" scope="col">Name</th>
      <th  class=" text-left" scope="col">Email</th>
      <th  class=" text-left" scope="col">Join date</th>
      <th  class=" text-center" scope="col">Edit</th>
      <th  class=" text-center" scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php  include_once 'db.php';
    
        //check the connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 
        // Write the Sql Query 
       $sql = "SELECT id,name,email,joined_on FROM contact";

        $result = $conn->query($sql);

        $count = 1;
        // Check the results count 

    if ($result->num_rows > 0) {

         while($row = $result->fetch_assoc()) {
         echo '<tr class=" text-center" >';
         echo '<td class="text-center text-secondary">'.$count.'</td>';
         echo '<td class="text-dark text-left">' .$row["name"]. '</td>';
         echo '<td class="text-left"><p>' .$row["email"]. '</p></td>';
         echo '<td class=" text-left"><p>' .$row["joined_on"]. '</p></td>';
         echo '<td class=" text-center"><a   class="text-info p-0 m-0" href="edit.php?id='. $row["id"]."&name=". $row["name"]."&email=". $row["email"].'"><i title="edit info" class="fas fa-pencil-alt"></i></a></td>';
         echo '<td class=" text-center"><a class="text-danger" href="Delete.php?id=' . $row["id"].'"><i  title="delete student" class="fas fa-trash-alt"></i></a></td>';
         echo '</tr>';
         $count++;
      }

    } else {
     echo "No Results Found";
   }
   //close the connection
$conn->close();

?>
</tbody>
</table>

</div>
</div>
<?php include 'footer.php';?>





