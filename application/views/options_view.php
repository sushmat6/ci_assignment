<!--DOCTYPE html-->
<html>
	<head>
		<meta>
		<title>untitled</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<!--style type="text/css" media="screen">
			label {display: block;}
		</style-->
		
		<style type="text/css">
			.bs-example{
				margin: 20px;
			}
		</style>		
	</head>
	
	<body>
		<h2>Create</h2>
		<?php echo form_open('site/create');?> 
		
		<p>
			<label for="username">UserName:</label>
			<input type="text" name="username" id="username" />
		</p>
		
		<p>
			<label for="password">Password:</label>
			<input type="text" name="password" id="password" />
		</p>
		
		<p>
			<input type="submit" value="Submit" />
		</p>
		<?php echo form_close(); ?>
		
		
		
		<hr />
		
		<h2>Read</h2>
		<?php if(isset($records)): foreach($records as $row) : 	 ?>
		
		<h2><?php echo anchor("site/delete/$row->id", $row->user_name); ?> </h2>
		<div><?php echo $row->password; ?></div>
		<?php endforeach; ?>
		
		<?php else: ?>
		<h2>No records were returned.</h2>
		<?php endif; ?>
		
		<hr />
		<h2>HTML table </h2>
		<div class="bs-example">		
		<table class="table table-bordered">  
		 
				<thead>	
					<tr>  
						<td>Id</td>
						<td>UserName</td>  
						<td>Password</td>  
					</tr> 
				</thead>				
				<tbody>
					<?php if(isset($records)): foreach($records as $row) : ?>				
						<tr>  
						<td><?php echo $row->id;?></td>   
						<td><?php echo $row->user_name;?></td>  
						<td><?php echo $row->password;?></td>  
						</tr>  
					<?php endforeach; ?>
				
					<?php else: ?>
					<h2>No records were returned.</h2>
					<?php endif; ?>
				</tbody>  
	   </table>  
	   
	   <hr />
		<h2>Update</h2>
		<?php echo form_open('site/update');?> 
		<p>Update the table, the random row with random username and password</p>
		<p>
			<input type="submit" value="Update" />
		</p>
		<?php echo form_close(); ?>
		   
		<hr />
		<h2>Delete</h2>
		<p>
		to sample delete the method, simply  click on one of the  headings listed above. A delete 
		query will automatically run.
		</p>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
	</body>  
</html>  
		
		
		
	</body>
</html>