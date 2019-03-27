<div class="container">
   <div class="row">
     <div class="col-12">
  
	   <H1> START </H1>
    <p> <?php var_dump($_POST) ?></p>
     <p> <?php echo (date('Y-m-d H:m:s')) ?></p>
    <H1> FINISH </H1>
  </div>
  </div>
</div>

<?php


$MERCH_TOKEN_ID =($_POST['MERCH_TOKEN_ID']);
$TERMINAL=($_POST['TERMINAL']);
$TRTYPE=($_POST['TRTYPE']);
$ORDER=($_POST['ORDER']);
$AMOUNT=($_POST['AMOUNT']);
$CURRENCY=($_POST['CURRENCY']);
$ACTION=($_POST['ACTION']);
$RC=($_POST['RC']);
$APPROVAL=($_POST['APPROVAL']);
$RRN=($_POST['RRN']);
$INT_REF=($_POST['INT_REF']);
$TIMESTAMP=($_POST['TIMESTAMP']);
$NONCE=($_POST['NONCE']);
$P_SIGN=($_POST['P_SIGN']);

if (isset($_POST['TERMINAL'])){
  if ($TERMINAL==20020081){
  
file_put_contents('log.txt', $TERMINAL . $ORDER . $TIMESTAMP . PHP_EOL, FILE_APPEND | LOCK_EX);   
try {
    $dbh = new PDO('mysql:host=localhost;dbname=api;charset=utf8;', api, ipa987654321);
    $statement = $dbh->prepare("INSERT INTO pay(TERMINAL, TRTYPE, ORDER1, AMOUNT, CURRENCY, ACTION1, RC, APPROVAL, RRN, INT_REF, TIMESTAMP1, MERCH_TOKEN_ID, NONCE, P_SIGN) VALUES('$TERMINAL', '$TRTYPE', '$ORDER', '$AMOUNT', '$CURRENCY', '$ACTION', '$RC', '$APPROVAL', '$RRN', '$INT_REF', '$TIMESTAMP', '$MERCH_TOKEN_ID', '$NONCE', '$P_SIGN')");
    
    $statement->execute();
    $dbh = null;
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
}

}


?>

