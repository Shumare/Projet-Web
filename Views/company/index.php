<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Les entreprises </h1>

<a href="/company/dirige">create companies
    <svg class="bi" aria-hidden="true">
        <use xlink:href="#arrow-right"></use>
    </svg>
</a>
<div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($company as $company) : ?>
        <div class="col">
            <div class="card">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><a href="/company/read/<?= $company->id ?>"><?= $company->comp_name ?></a></h5>
                    <p class="card-text">Chez <?=$company->comp_name?>, 
                    nous oeuvrons dans le domaine de <?=$company->comp_activity?> afin de <?=$company->comp_description?> avec nos <?= $company->comp_number_employees?>
                    seront ravi de vous informer pour plus amples informations au <?= $company->comp_phone_number?>. <br> Actuellement nous avons <?=$company->comp_current_intern?> 
                    dans l'ensemble de nos filiales qui se comptent aux nombres de <?= $company->comp_active?>. <br> La note du tuteur est de <?=$company->comp_tutor_rating?>/5</p>
                </div>

            </div>
        </div>
    <?php endforeach; ?>
</div>
<a href="/company/previous">Précedent</a>
<a href="/company/next">Suivant</a>
</body>
</html>