<h1> page d'acceuil des searchs </h1>

    <pre>
    <?php foreach($searchs as $searchs): ?>
        <h2><?=$searchs->id_people?></a></h2>
        <h2><?=$searchs->id_company?></a></h2>
    <?php endforeach; ?>
    </pre>