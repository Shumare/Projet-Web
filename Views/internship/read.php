<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <a href="/internship/delete/<?= $internship->id ?>" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">supprimer <?= $internship->inter_activity ?></a>
</head>

<body>
       
<form class="row g-3" action="/internship/update" method="POST">
<div class="col-12">
                <label for="id" class="form-label">Id: </label>
                <input type="text" class="form-control" name="id" value="<?= $internship->id ?>" readonly>
        </div>
        <div class="col-md-6">
                <label for="firstname" class="form-label">Activity: </label>
                <input type="text" class="form-control" name="inter_activity" value="<?= $internship->inter_activity ?>">
        </div>
        <div class="col-md-6">
                <label for="lstname" class="form-label">Salary: </label>
                <input type="number" class="form-control" name="inter_salary" value="<?= $internship->inter_salary ?>">
        </div>
        <div class="col-12">
                <label for="gender" class="form-label">Description: </label>
                <input type="text" class="form-control" name="intern_description" value="<?= $internship->intern_description ?>">
        </div>
        <div class="col-12">
                <label for="center" class="form-label">Number of current intern: </label>
                <input type="number" class="form-control" name="inter_number_place" value="<?= $internship->inter_number_place ?>">
        </div>
        <div class="col-12">
                <label for="center" class="form-label">company: </label>
                <input type="number" class="form-control" name="id_company" value="<?= $internship->id_company ?>">
        </div>
        <div class="col-12">
                <label for="center" class="form-label">date: </label>
                <input type="number" class="form-control" name="id_date" value="<?= $internship->id_date ?>">
        </div>

        <div class="col-12">
                <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
</form>

</body>

</html>