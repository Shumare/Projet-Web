<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Offers</h1>

    
    <a class="icon-link icon-link-hover" href="/internshipfilter/index">
        recherche
        <svg class="bi" aria-hidden="true">
            <use xlink:href="#arrow-right"></use>
        </svg>
    </a>
    <a class="icon-link icon-link-hover" href="/internship/dirige">
        create internship
        <svg class="bi" aria-hidden="true">
            <use xlink:href="#arrow-right"></use>
        </svg>
    </a>

</head>

<body>
    <?php foreach ($internship as $internship) : ?>
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title"><a href="/internship/read/<?= $internship->id ?>"><?= $internship->inter_activity ?></a></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $internship->intern_description ?></h6>
                <p class="card-text">Nous sommes à la recherche d'un(e) stagiaire capble de nous accompagner durant(temps) avec un salaire moyen de <?= $internship->inter_salary ?>.</p>
            </div>
        </div>
    <?php endforeach; ?>

    <a href="/internship/previous">Précedent</a>
    <a href="/internship/next">Suivant</a>
</body>

</html>