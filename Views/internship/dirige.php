<div class="text-center">
<h1>Create a new internship offer</h1>
</div>
<form class="row g-3" action="/internship/create" method="POST">
    <div class="col-md-12">
    <label for="inter_activity">Activity: </label>
    <input type="text" class="form-control" name="inter_activity" required>
    </div>
    <div class="col-md-12">
    <label for="intern_description">Description: </label>
    <input type="text" class="form-control" name="intern_description" required>
    </div>
    <div class="col-md-6">
    <label for="inter_salary">Salary: </label>
    <input type="number" class="form-control" name="inter_salary" required>
    </div>
    <div class="col-md-6">
    <label for="inter_number_place">Number of current intern: </label>
    <input type="number" class="form-control" name="inter_number_place" required>
    </div>
    <div class="col-md-6">
    <label for="id_company">Companie: </label>
    <select class="form-select" name="id_company" aria-label="selection company" required>
        <option selected disabled>selection du centre CESI</option>
            <?php 

            foreach($companies as $company){
                echo("<option value=".$company->id.">".$company->comp_name."</option>");
            }
        ?>
    </select>
    </div>
    <div class="col-md-6">
        <label for="id_date">Start date: </label>
        <input type="date" class="form-control" name="id_date" required>
    </div>
    <div class="col-md-12">
    <label for="intern_duration">Internship duration: </label>
    <input type="number" class="form-control" name="intern_duration" required>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
