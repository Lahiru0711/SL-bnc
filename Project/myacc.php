<?php
include "db_client.php";
include "header.php";
$sql = "SELECT *FROM cool";  //to get data in users table


$result = $conn->query($sql);  //retrieve  query;
?>

<link rel="stylesheet" type="text/css" href="css/myacc.css">
		     <table style= "width:1000px">
			      <thead>
				   <tr>
				   <th> id </th>
				   <th> name </th>
				   <th> address </th>
				   <th> email </th>
				   <th> phone </th>
				   <th> password </th>
				   <th> ename </th>
				   <th> eno </th>
				   <th> action </th>
				   </tr>
				   </thead>
				   
				   <tbody>
				      <?php
					    if($result) {
						while($row = mysqli_fetch_assoc($result)){  //fetch data
					  ?>
					      <tr>
						  <td><?php echo $row['id']; ?></td>
						  <td><?php echo $row['name']; ?></td>
						  <td><?php echo $row['address']; ?></td>
						  <td><?php echo $row['email']; ?></td>
						  <td><?php echo $row['phone']; ?></td>
						  <td><?php echo $row['password']; ?></td>
						  <td><?php echo $row['ename']; ?></td>
						  <td><?php echo $row['eno']; ?></td>
						  <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> &nbsp; <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
						  </tr>
						  <?php 
						  }
						  }
						  ?>
						  
					</tbody>
                 </table>
				                       				 
<?php
include("footer.php");
?>
