<?php

	$search = $_GET['key'];

	$con = mysqli_connect('localhost', 'root', '', 'db');
	$sql = "select * from accepted_request where date like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);


	if($count > 0){

		$data = "<table>
				<tr>
					<td><h3>Name</h3></td>
					<td></td> <td></td> <td></td> <td></td>
					<td><h3>Needs</h3></td>
					<td></td> <td></td> <td></td> <td></td>
					<td><h3>Amount</h3></td>
					<td></td> <td></td> <td></td> <td></td>
					<td><h3>Blood Group</h3></td>
					<td></td> <td></td> <td></td> <td></td>
					<td><h3>Phone</h3></td>
					<td></td> <td></td> <td></td> <td></td>
					<td><h3>Date</h3></td>
					<td></td> <td></td> <td></td> <td></td>
					<td><h3>Time</h3></td>
					<td></td> <td></td> <td></td> <td></td>
					<td><h3>Hospital</h3></td>
				</tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
						<td>{$row['name']}</td>
						<td></td> <td></td> <td></td> <td></td>
						<td>{$row['needs']}</td>
						<td></td> <td></td> <td></td> <td></td>
						<td>{$row['amount']}</td>
						<td></td> <td></td> <td></td> <td></td>
						<td>{$row['bg']}</td>
						<td></td> <td></td> <td></td> <td></td>
						<td>{$row['phone']}</td>
						<td></td> <td></td> <td></td> <td></td>
						<td>{$row['date']}</td>
						<td></td> <td></td> <td></td> <td></td>
						<td>{$row['time']}</td>
						<td></td> <td></td> <td></td> <td></td>
						<td>{$row['hospital']}</td>
			</tr>";
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "No result found!";
	}
?>
