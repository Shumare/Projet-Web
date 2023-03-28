<form class="row g-3" action="/company/create" method="POST">
    <label for="comp_name">Name: </label>
    <input type="text" class="form-control" name="comp_name" required>
    <label for="comp_activity">Activity: </label>
    <input type="text" class="form-control" name="comp_activity"required>
    <label for="comp_description">Description: </label>
    <input type="text"  class="form-control"name="comp_description" required>
    <label for="comp_phone_number">Phone number: </label>
    <input type="text"  class="form-control"name="comp_phone_number" required>
    <label for="comp_number_employees">Number employees: </label>
    <input type="number"  class="form-control"name="comp_number_employees" required>
    <label for="comp_tutor_rating">Tutor rating: </label>
    <input type="number"  class="form-control"name="comp_tutor_rating" required>
    <label for="comp_current_intern">Current intern: </label>
    <input type="number"  class="form-control"name="comp_current_intern" required>
    <label for="comp_active">Active: </label>
    <input type="number"  class="form-control"name="comp_active" required>
    <button type="submit" class="btn btn-primary">Envoyer</button>

</form>