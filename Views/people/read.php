<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <a href="/people/delete/<?= $people->id ?>" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">supprimer <?= $people->people_firstname ?></a>
</head>

<body>
       
<form class="row g-3" action="/people/update" method="POST">
<div class="col-12">
                <label for="id" class="form-label">Id: </label>
                <input type="text" class="form-control" name="id" value="<?= $people->id ?>" readonly>
        </div>
        <div class="col-md-6">
                <label for="firstname" class="form-label">Firstname: </label>
                <input type="text" class="form-control" name="people_firstname" value="<?= $people->people_firstname ?>">
        </div>
        <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Lastname: </label>
                <input type="text" class="form-control" name="people_lastname" value="<?= $people->people_lastname ?>">
        </div>
        <div class="col-12">
                <label for="inputAddress" class="form-label">Gender: </label>
                <input type="text" class="form-control" name="people_gender" value="<?= $people->people_gender ?>">
        </div>
        <div class="col-12">
                <label for="inputAddress2" class="form-label">Center: </label>
                <input type="text" class="form-control" name="id_center" value="<?= $people->id_center ?>">
        </div>

        <div class="col-12">
                <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
</form>

</body>

</html>



