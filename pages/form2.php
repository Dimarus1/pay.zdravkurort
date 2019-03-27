
<?php
include DOCROOT."system/getdata.php";
?>
 <div class="container">
   <div class="row">
     <div class="col-12">
	   <div class="card mt-5">
          <div class="card-body">
		  <img src="logozd.png" class="img-fluid img-thumbnail" alt="zdravkurort">
            <H5 class="card-title">Можно оплачивать!</H5>		  
                <form action="https://3d-test-2.mpcompany.ru:3443/cgi-bin/cgi_link" method="POST">
				<div class="form-group">
				<input id="order" type="hidden" name="TERMINAL" class="form-control-lg" value="<?php echo $vars{'TERMINAL'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="text" name="ORDER" class="form-control-lg p-3 mb-2 bg-success text-white" value="<?php echo $vars{'ORDER'}; ?>"readonly>
				</div>
				<div class="form-group">
				<input id="order" type="text" name="AMOUNT" class="form-control-lg p-3 mb-2 bg-success text-white" value="<?php echo $vars{'AMOUNT'}; ?>"readonly>
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="CURRENCY" class="form-control-lg" value="<?php echo $vars{'CURRENCY'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="DESC" class="form-control-lg" value="<?php echo $vars{'DESC'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="MERCH_NAME" class="form-control-lg" value="<?php echo $vars{'MERCH_NAME'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="MERCH_URL" class="form-control-lg" value="<?php echo $vars{'MERCH_URL'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="MERCHANT" class="form-control-lg" value="<?php echo $vars{'MERCHANT'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="TRTYPE" class="form-control-lg" value="<?php echo $vars{'TRTYPE'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="COUNTRY" class="form-control-lg" value="<?php echo $vars{'COUNTRY'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="MERCH_GMT" class="form-control-lg" value="<?php echo $vars{'MERCH_GMT'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="TIMESTAMP" class="form-control-lg" value="<?php echo $vars{'TIMESTAMP'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="NONCE" class="form-control-lg" value="<?php echo $vars{'NONCE'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="BACKREF" class="form-control-lg" value="<?php echo $vars{'BACKREF'}; ?>">
				</div>
				<div class="form-group">
				<input id="order" type="hidden" name="P_SIGN" class="form-control-lg" value="<?php echo $vars{'P_SIGN'}; ?>">
				</div>
				<div class="form-group">				
				<button class="btn btn-success" type="submit">ОПЛАТИТЬ</button>
				</div>
				</form>
				<img src="logom.png" class="img-fluid img-thumbnail" alt="zdravkurort">
				
			</div>
		</div>
		
	</div>
  </div>
</div>

