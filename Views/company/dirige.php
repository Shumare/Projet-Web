<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="row g-3" action="/company/create" method="POST">
        <label for="comp_name">Name: </label>
        <input type="text" class="form-control" name="comp_name" required>
        <label for="comp_activity">Activity: </label>
        <input type="text" class="form-control" name="comp_activity" required>
        <label for="comp_description">Description: </label>
        <input type="text" class="form-control" name="comp_description" required>
        <label for="comp_phone_number">Phone number: </label>
        <input type="text" class="form-control" name="comp_phone_number" required>
        <label for="comp_number_employees">Number employees: </label>
        <input type="number" class="form-control" name="comp_number_employees" required>
        <label for="comp_tutor_rating">Tutor rating: </label>
        <input type="number" class="form-control" name="comp_tutor_rating" required>
        <label for="comp_current_intern">Current intern: </label>
        <input type="number" class="form-control" name="comp_current_intern" required>
        <label for="comp_active">Active: </label>
        <input type="number" class="form-control" name="comp_active" required>
        <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>
</body>

</html>