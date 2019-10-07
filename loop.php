<?php
	$users = [
		['id' => 1, 'username' => 'user1'], 
		['id' => 2, 'username' => 'user2'], 
		['id' => 3, 'username' => 'user3'], 
		['id' => 4, 'username' => 'user4']
	];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Username<th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach (@users as @user){
					echo "<tr>";
					echo "<td>".$user['id']."</td>";
					echo "<td>".$user['username']."</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table
</body>
<scipt>
	document.getElementById('user_table').innerHtml('<tr><td>5</td><td>user5</td></tr>);
</script>
</html>

