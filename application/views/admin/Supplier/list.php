<!DOCTYPE html>
<html>
<head>
<style>
table{
	border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: 	#F0F8FF}

th {
  background-color: #7FFFD4;
  color: white;
}
</style>
</head>
<body>
<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
		<tr>
		<th>Supplier Id</th>
		<th>Supplier Nama</th>
		<th>Supplier Address</th>
                
		</tr>
	</thead>
	<tbody>
<?php foreach ($supplier as $supplier): ?>
	<tr>
        <td width="150">
	        <?php echo $supplier->supplier_id ?>
	</td>
	<td>
	        <?php echo $supplier->supplier_name ?>
	</td>
        <td>
		<?php echo $supplier->supplier_address ?>
        </td>
        
                                        
	</tr>
                <?php endforeach; ?>

	</tbody>
        </table>
</body>
</html>