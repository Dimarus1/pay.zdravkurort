 <div class="container">
   <div class="row">
     <div class="col-12">
	   <div class="card mt-5">
          <div class="card-body">
		  <img src="logozd.png" class="img-fluid img-thumbnail" alt="zdravkurort">
            <H5 class="card-title">Введите данные бронирования</H5>		  
                <form action="<?php echo (URL('?page=form2'))?>" method="POST">
				<div class="form-group">
				<label for="order"></label>
				<input id="order" type="text" name="ORDER" class="form-control-lg" placeholder="Номер заказа AA000001" required>
				<small id="emailHelp" class="form-text text-muted"><b class="text-danger">Внимание! Оплачивайте заказ только после подтверждения!</b></small>
				</div>
				<div class="form-group">
				<label for="amnt"></label>
				<input id="amnt" type="number" name="AMOUNT" class="form-control-lg" placeholder="цена 10000" min="1" required>
				</div>
				<div class="form-group">				
				<button class="btn btn-warning" type="submit">ПРОВЕРИТЬ</button>
				</div>
				</form>
				<img src="logom.png" class="img-fluid img-thumbnail" alt="zdravkurort">
			</div>
		</div>
		
	</div>
  </div>
</div>
 
 
 

