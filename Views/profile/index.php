<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Welcome back <?= $profile->people_firstname." ".$profile->people_lastname?> </h1>

<div class="row g-3">
  <div class="col">
    <input type="email" class="form-control" placeholder="First name" aria-label="email" value="<?= $_SESSION['acc_email']?>">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Center" value ="<?= $profile->center_name?>">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Promo" value=" <?= $profile->promo_name?>">
  </div>
</div>
</body>
</html>
