
<form class="row g-3" action="/internship/update" method="POST">
<div class="col-12">
                <label for="id" class="form-label">Id: </label>
                <input type="text" class="form-control" name="id" value="<?= $intership_date->id ?>" readonly>
        </div>
        <div class="col-md-6">
                <label for="firstname" class="form-label">Dates: </label>
                <input type="text" class="form-control" name="Dates" value="<?= $intership_date->dates ?>">
        </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
</form>