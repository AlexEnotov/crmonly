<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="config/style.css">
  </head>
  <body>
    <?php include 'layout/navbar.php'; ?>
    <?php include 'config/db.php';
    $sql = $pdo->prepare("SELECT * FROM TicketTask tt ");
	$sql->execute();
	$resu = $sql->fetchAll(PDO::FETCH_OBJ);
    ?>

    <div class="container">
    	<div class="card mt-3">
    		<div class="card-header">
    			<div class="row">
    				<div class="col-5">Subject</div>
    				<div class="col-1">Priority</div>
    				<div class="col-1">Status</div>
    				<div class="col-2">Date</div>
    				<div class="col-2">Executor</div>
    			</div>
    		</div>
    		<?php foreach($resu as $res) {?>
    		<div class="card-body border-bottom">
    			<div class="row">
    				<div class="col-5"><span class="badge bg-danger"><?php if (strlen($res->id)==1) {echo '#000'.$res->id;} elseif (strlen($res->id)==2) {echo '#00'.$res->id;} elseif (strlen($res->id)==3) {echo '#0'.$res->id;} else {echo '#'.$res->id;}?></span> <?=$res->Name?></div>
    				<div class="col-1"><div style="color: <?php if($res->Priority == 'critical') {echo 'red';} elseif ($res->Priority == 'high') {echo 'blue';} ?>; text-transform: uppercase;"><?=$res->Priority?></div></div>
    				<div class="col-1"><div style="text-transform:uppercase; color:green;"><?=$res->Status?></div></div>
    				<div class="col-2"><?= date('Y-m-d') ?></div>
    				<div class="col-2">One Two Three</div>
    			</div>
    		</div>
    		<?php } ?>
    		<div class="card-body border-bottom">
    			<div class="row">
    				<div class="col-5"><span class="badge bg-danger">#0001</span> Пример заявки</div>
    				<div class="col-1"><div style="color: red; text-transform: uppercase;">Critical</div></div>
    				<div class="col-1"><div style="text-transform:uppercase;">open</div></div>
    				<div class="col-2"><?= date('Y-m-d') ?></div>
    				<div class="col-2">One Two Three</div>
    			</div>
    		</div>
    	</div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>