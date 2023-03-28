<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="/company/delete/<?= $company->id ?>">supprimer <?= $company->comp_name ?></a>


    <form class="row g-3" action="/company/update" method="POST">
        <div class="col-12">
            <label for="id" class="form-label">Id: </label>
            <input type="text" class="form-control" name="id" value="<?= $company->id ?>" readonly>
        </div>
        <div class="col-md-6">
            <label for="comp_name" class="form-label">Name: </label>
            <input type="text" class="form-control" name="comp_name" value="<?= $company->comp_name ?>">
        </div>
        <div class="col-md-6">
            <label for="comp_description" class="form-label">Description: </label>
            <input type="text" class="form-control" name="comp_description" value="<?= $company->comp_description ?>">
        </div>
        <div class="col-12">
            <label for="comp_activity" class="form-label">Activity: </label>
            <input type="text" class="form-control" name="comp_activity" value="<?= $company->comp_activity ?>">
        </div>
        <div class="col-12">
            <label for="comp_phone_number" class="form-label">Phone number: </label>
            <input type="text" class="form-control" name="comp_phone_number" value="<?= $company->comp_phone_number ?>">
        </div>
        <div class="col-12">
            <label for="comp_number_employees" class="form-label">Employees: </label>
            <input type="number" class="form-control" name="comp_number_employees" value="<?= $company->comp_number_employees ?>">
        </div>
        <div class="col-12">
            <label for="comp_tutor_rating" class="form-label">Tutor rating: </label>
            <input type="number" class="form-control" name="comp_tutor_rating" value="<?= $company->comp_tutor_rating ?>">
        </div>
        <div class="col-12">
            <label for="comp_current_intern" class="form-label">Current intern: </label>
            <input type="number" class="form-control" name="comp_current_intern" value="<?= $company->comp_current_intern ?>">
        </div>
        <div class="col-12">
            <label for="comp_active" class="form-label">Active: </label>
            <input type="number" class="form-control" name="comp_active" value="<?= $company->comp_active ?>">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>

</body>

</html>