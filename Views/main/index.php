<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Welcome back </h1>
</head>
<body>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        What's our purpose ?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam saepe repellendus dolores beatae odit tenetur debitis architecto deleniti eveniet libero labore, possimus consequuntur aspernatur incidunt recusandae eum, nobis nihil illum.
      </div>
    </div>
  </div>  
</div>
<h2></h2>


</body>
</html>
<div class="row">
    <?php foreach($internship  as $internship):?>
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
          <h5 class="card-title"><?= $internship->inter_activity?></h5>
          <h5 class="card-title"><?= $internship->dates?></h5>
          <p class="card-text">Nous sommes à la recherche d'un(e) stagiaire capble de nous accompagner durant(temps) avec un salaire moyen de <?= $internship->inter_salary ?>.</p>
        <a href="/internship/read/<?= $internship->id ?>" class="btn btn-primary">Go offer</a>
      </div>
    </div>
  </div>
  <?php endforeach ?>
 
</div>