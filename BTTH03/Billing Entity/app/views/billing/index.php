<!DOCTYPE html>
<html>
<head>
	<title>Hóa đơn</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Hóa đơn</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Ngày</th>
					<th>Tổng</th>
					<th>Trạng thái thanh toán</th>
				</tr>
			</thead>
			<tbody>
            <?php
        foreach ($billings as $billing) {
            ?>
            <tr>
                <th><?=$billing[0]?></th>
                <th><?=$billing[1]?></th>
                <th><?=$billing[2]?></th>
                <th><?=$billing[3]?></th>
            </tr>
            <?php
        }
    ?>
			</tbody>
		</table>
	</div>
</body>
</html>