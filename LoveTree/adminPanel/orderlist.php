<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dynamic Datatable</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-4">
        <button onclick="history.back()">Go Back</button>
    </div>
	<div class="container" style="margin-top:50px;">
	  <table class="table table-striped">
		<thead>
			<tr>
				<th>Order No</th>
				<th>Username</th>
                <th>PlantName</th>
                <th>Price</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>State</th>
                <th>Pincode</th>
                <th>Address</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
        <?php
        require '../database/dbconn.php';
        $sql="SELECT * FROM `orderdetails`";
        $res=mysqli_query($conn,$sql);
        while($result=mysqli_fetch_array($res)){
            ?>  
			<tr>
				<td><?php echo $result['ordno'];?></td>
				<td><?php echo $result['orderby'];?></td>
				<td><?php echo $result['plantname'];?></td>
                <td><?php echo $result['plantprice'];?></td>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['mobile'];?></td>
                <td><?php echo $result['state'];?></td>
                <td><?php echo $result['zip'];?></td>
                <td><?php echo $result['address'];?></td>
                <td><?php echo $result['time_dt'];?></td>
			</tr>
            <?php }?> 
		</tbody>
	  </table>
   </div>
   <div class="my-4"></div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
		$('.table').DataTable();
  });
  </script>
</body>
</html>