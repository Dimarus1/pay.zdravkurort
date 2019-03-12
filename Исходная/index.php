<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html> 
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Оплата VISA MasterCard MIR</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

 </head>
 <body>

 <div class="container">
   <div class="row">
     <div class="col-12">
	   <div class="card mt-5">
          <div class="card-body">
		  <img src="logozd.png" class="img-fluid img-thumbnail" alt="zdravkurort">
            <H5 class="card-title">Введите данные бронирования</H5>		  
                <form action="pay.php" method="POST">
				<div class="form-group">
				<label for="order"></label>
				<input id="order" type="text" name="orderNumber" class="form-control-lg" placeholder="Номер заказа AA000001" required>
				<small id="emailHelp" class="form-text text-muted"><b class="text-danger">Внимание! Оплачивайте заказ только после подтверждения!</b></small>
				</div>
				<div class="form-group">
				<label for="amnt"></label>
				<input id="amnt" type="number" name="amount" class="form-control-lg" placeholder="цена 10000" min="1" required>
				</div>
				<div class="form-group">
				<label for="email"></label>
				<input id="email" type="email" name="email" class="form-control-sm" placeholder="адрес E-mail">
				<small id="emailHelp" class="form-text text-muted">E-mail для получения чека об оплате</small>
				</div>
				<div class="form-group">
				<label for="phone"></label>
				<input id="phone" type="number" name="phone" class="form-control-sm" placeholder="Номер телефона">
				<small id="emailHelp" class="form-text text-muted">Укажите номер телефона в формате 79990000001</small>
				</div>
				<div class="form-group">				
				<button class="btn btn-success" type="submit">К оплате</button>
				</div>
				</form>
				<img src="logom.png" class="img-fluid img-thumbnail" alt="zdravkurort">
			</div>
		</div>
		
	</div>
  </div>
</div>
 
 
 



 </body>
</html>
