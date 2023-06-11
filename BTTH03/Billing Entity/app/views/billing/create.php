<!DOCTYPE html>
<html>
<head>
	<title>Tạo hóa đơn</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Tạo hóa đơn</h2>
		<form id="billing_form" method="post">
			<div class="form-group">
				<label for="id">ID:</label>
				<input type="text" class="form-control" id="id" placeholder="Enter ID" name="id">
			</div>
			<div class="form-group">
				<label for="date">Ngày:</label>
				<input type="date" class="form-control" id="date" placeholder="Enter Date" name="date">
			</div>
			<div class="form-group">
				<label for="total_amount">Tổng tiền:</label>
				<input type="text" class="form-control" id="total" placeholder="Enter Total Amount"name="total">
			</div>
			<div class="form-group">
				<label for="payment_status">Tình trạng thanh toán:</label>
				<select class="form-control" id="payment" name="payment">
					<option value="paid">Đã trả</option>
					<option value="unpaid">Chưa trả</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Tạo</button>
		</form>
	</div>
</body>
</html>
