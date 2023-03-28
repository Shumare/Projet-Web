<form class="row g-3" action="/internship/create" method="POST">
    <label for="inter_activity">Activity: </label>
    <input type="text" class="form-control" name="inter_activity" required>
    <label for="inter_salary">Salary: </label>
    <input type="number" class="form-control" name="inter_salary">
    <label for="intern_description">Description: </label>
    <input type="text"  class="form-control"name="intern_description" required>
    <label for="inter_number_place">number of current intern: </label>
    <input type="number"  class="form-control"name="inter_number_place" required>
    <label for="id_company">company: </label>
    <input type="number"  class="form-control"name="id_company"required>
    <label for="id_date">date: </label>
    <input type="number"  class="form-control"name="id_date" required>
    <button type="submit" class="btn btn-primary">Envoyer</button>

</form>