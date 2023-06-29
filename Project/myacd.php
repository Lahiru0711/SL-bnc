<?php
include "db_client.php";
include "header.php";
$sql = "SELECT *FROM cool1";  //to get data in users table


$result = $conn->query($sql);  //retrieve  query;
?>

<link rel="stylesheet" type="text/css" href="css/myacd.css">
		     <table style= "width:1000px">
			      <thead>
				   <tr>
				   <th> id </th>
				   <th> name </th>
				   <th> address </th>
				   <th> email </th>
				   <th> phone </th>
				   <th> password </th>
				   <th> V_brand </th>
				   <th> V_model </th>
				   <th> V_regno </th>
				   <th> action </th>
				   </tr>
				   </thead>
				   
				   <tbody>
				      <?php
					    if($result-> num_rows>0) {
						while($row = $result->fetch_assoc()){  //fetch data
					  ?>
					      <tr>
						  <td><?php echo $row['id']; ?></td>
						  <td><?php echo $row['name']; ?></td>
						  <td><?php echo $row['address']; ?></td>    <!-- dasabase column name ($row['column name'])-->
						  <td><?php echo $row['email']; ?></td>              
						  <td><?php echo $row['phone']; ?></td>
						  <td><?php echo $row['password']; ?></td>
						  <td><?php echo $row['V_brand']; ?></td>
						  <td><?php echo $row['V_model']; ?></td>
						  <td><?php echo $row['V_regno']; ?></td>
						 
						  <td><a href="editd.php?id=<?php echo $row['id']; ?>">Edit</a> &nbsp; <a href="deleted.php?id=<?php echo $row['id'];?>">Delete</a></td>
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
