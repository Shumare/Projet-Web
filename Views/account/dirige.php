<?php
use Website\Models\CenterModel;

$center = new CenterModel;
$centers = $center->getAllCenters();
?>
<div class="text-center">
        <h1>Create a new user account</h1>
    </div>
    <form class="row g-3" action="/account/create" method="POST">
        <div class="col-md-6">
            <label for="people_firstname">Firstname: </label>
            <input type="text" class="form-control" name="people_firstname" required>
        </div>
        <div class="col-md-6">
            <label for="people_lastname">Lastname: </label>
            <input type="text" class="form-control" name="people_lastname" required>
        </div>
        <div class="col-md-6">
            <label for="people_gender">Gender: </label>
            <select class="form-select" name="people_gender" aria-label="selection role" required>
                <option selected disabled>Gender Selection</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="id_center">Center: </label>
            <select class="form-select" name="id_center" aria-label="selection role" required>
                <option selected disabled>selection du centre CESI</option>
                <?php
                foreach ($centers as $center) {
                    echo ("<option value=\"$center->id\">$center->center_name</option>");
                }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="acc_email">email: </label>
            <input type="email" class="form-control" name="acc_email" required>
        </div>
        <div class="col-md-6">
            <label for="people_firstname">role: </label>
            <?php
            if ($_SESSION['user_role'] == 'admin') { ?>
                <select class="form-select" name="id_role" aria-label="selection role" required>
                    <option selected value="3">Student</option>
                    <option value="2">Tutor</option>
                    <option value="1">Admin</option>
                </select>
                <?php
            } else { ?>
                <select class="form-select" name="id_role" aria-label="select user role" required>
                    <option selevted value="3">Student</option>
                </select>
                <?php
            }
            ?>
        </div>
        <div class="col-md-6">
            <label for="acc_password">password: </label>
            <input type="password" class="form-control" name="acc_password" required>
        </div>
        <div class="col-md-6">
            <label for="acc_password_confirm">password confirm: </label>
            <input type="password" class="form-control" name="acc_password_confirm" required>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>