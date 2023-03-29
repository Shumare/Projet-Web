<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


</head>

<body>
  <h1>Welcome back </h1>
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">

          What's our purpose ?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
        <div class="accordion-body">

          Bienvenue sur notre site de recherche de stage <strong>M</strong>y <strong>I</strong>nternship <strong>B</strong>ook ! <br>
          Nous sommes une plateforme en ligne dédiée à la recherche et à la diffusion d'offres de stage pour les étudiants.

          Notre moteur de recherche avancé vous permet de trouver des offres de stage.
          Nous disposons également d'une base de données d'entreprises qui proposent des stages dans divers secteurs d'activité.

          Connecter profil sur notre site pour y inclure votre CV et votre lettre de motivation. Les tuteurs peuvent consulter votre profil.

          Nous sommes là pour vous accompagner tout au long de votre recherche de stage, en vous offrant des conseils et des ressources pour vous aider à décrocher le stage de vos rêves.

          Rejoignez notre communauté d'étudiants dès maintenant et trouvez le stage qui vous convient sur notre site !
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <?php foreach ($internship  as $internship) : ?>
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?= $internship->inter_activity ?></h5>
            <h5 class="card-title"><?= $internship->dates ?></h5>
            <p class="card-text">Nous sommes à la recherche d'un(e) stagiaire capble de nous accompagner durant <?= $internship->inter_duration ?> semaines avec un salaire moyen de <?= $internship->inter_salary ?> €.</p>
            <a href="/internship/read/<?= $internship->id ?>" class="btn btn-primary">Go offer</a>
          </div>

        </div>
      </div>
    <?php endforeach ?>
  
  </div>

  <div class="row">
    <?php foreach ($internship as $internship): ?>
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <?= $internship->inter_activity ?>
            </h5>
            <h5 class="card-title">
              <?= $internship->dates ?>
            </h5>
            <p class="card-text">Nous sommes à la recherche d'un(e) stagiaire capble de nous accompagner durant
              <?= $internship->inter_duration ?> semaines avec un salaire moyen de
              <?= $internship->inter_salary ?> €.
            </p>
            <a href="/internship/read/<?= $internship->id ?>" class="btn btn-primary">Go offer</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>

  </div>

</body>

</html>