<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Page de profile </h1>

<div>
    <?= $profile->people_firstname." ".$profile->people_lastname?>
    <?= $_SESSION['acc_email']?>
    <?= $profile->center_name?>
    <?= $profile->promo_name?>
</div>
</body>
</html>