<?php
session_start();
$token = bin2hex(openssl_random_pseudo_bytes(32));
$_SESSION['token'] = $token;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>
    <div class="col-4">
      <form action="opdracht1_verwerk.php" method="post">
          <div class="form-group">
            <input type="hidden" class="form-control" name="tokenVeld" id="tokenVeld" aria-describedby="helpId" value="<?php echo $token?>">
          </div>
          <div class="form-group">
            <label for="naamVeld">Naam:</label>
            <input type="text" class="form-control" name="naamVeld" id="naamVeld" aria-describedby="helpId" placeholder="Pieter Post">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Naam@provider.com">
          </div>
          <div class="form-group">
            <label for="postcode">Postcode:</label>
            <input type="text" class="form-control" name="postcode" id="postcode" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-group">
            <label for="numbercolor">number</label>
            <input type="number" class="form-control" name="number" id="number" aria-describedby="helpId" placeholder="">
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="checkbox" id="checkbox" value="checkedValue" checked>
              Pieter
            </label>
          </div>
          <div class="form-group">
            <label for="color">Color</label>
            <input type="color" class="form-control" name="color" id="color" aria-describedby="helpId" placeholder="">
          </div>
          <button type="submit" name="verstuurknop" class="btn btn-primary">Submit</button>
      </form>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>