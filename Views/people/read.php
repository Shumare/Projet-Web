
<?php
use Website\Models\CenterModel;
use Website\models\AccountModel;
$center = new CenterModel;
$centers = $center->getAllCenters();
$account = new AccountModel;
?>
<h1 class="text-center">Modification du profil de <?= $people->people_firstname ?></h1>
<form class="row g-3" action="people/update/" method="POST">
<div class="col-md-6">
    <label for="people_firstname">Firstname: </label>
    <input type="text" class="form-control" name="people_firstname" value="<?= $people->people_firstname ?>" required>
    </div>
    <div class="col-md-6">
    <label for="people_lastname">Lastname: </label>
    <input type="text" class="form-control" name="people_lastname" value="<?= $people->people_lastname ?>" required>
    </div>
    <div class="col-md-6">
    <label for="people_gender">Gender: </label>
        <select class="form-select" name="people_gender" aria-label="selection role" required>
            <option <?php if($people->people_gender == "Male"){echo "selected";}; ?> value="Male">Male</option>
            <option <?php if($people->people_gender == "Female"){echo "selected";}; ?> value="Female">Female</option>
        </select>
    </div>
    <div class="col-md-6">
    <label for="id_center">Center: </label>
    <select class="form-select" name="id_center" aria-label="selection role" required>
        <option selected disabled>selection du centre CESI</option>
            <?php 
            foreach($centers as $center){
                if($people->id_center == $center->id){$cnt = true;
                        echo("<option selected value=\"$center->id\">$center->center_name</option>");
                }else{
                        echo("<option value=\"$center->id\">$center->center_name</option>");
                }
            };
        ?>
    </select>
    </div>
    <div class="col-md-6">
    <label for="acc_email">email: </label>
    <input type="text" class="form-control" name="acc_email" value="<?= $account->getAcc_email_From_Id($people->id) ?>" required>
    </div>
    <div class="col-md-6">
    <label for="people_firstname">role: </label>
    <?php
    if($_SESSION['user_role'] == 'admin')
    {?>
        <select class="form-select" name="id_role" aria-label="selection role" required>
            <option <?php if($account->getId_role() == "student"){echo "selected";}; ?> value="3">Student</option>
            <option <?php if($account->getId_role() == "tutor"){echo "selected";}; ?> value="2">Tutor</option>
            <option <?php if($account->getId_role() == "admin"){echo "selected";}; ?> value="1">Admin</option>
        </select>
    <?php
    } else
    {?>
        <select class="form-select" name="id_role" aria-label="select user role" disabled>
        <option <?php if($account->getId_role() == "student"){echo "selected";}; ?> value="3">Student</option>
        <option <?php if($account->getId_role() == "tutor"){echo "selected";}; ?> value="2">Tutor</option>
        <option <?php if($account->getId_role() == "admin"){echo "selected";}; ?> value="1">Admin</option>
        </select>
    <?php
    }
    ?>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
</form>
<a href="/account/delete/<?= $people->id ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce compte ?')" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover btn btn-outline-danger btn-sm">supprimer <?= $people->people_firstname ?></a>


