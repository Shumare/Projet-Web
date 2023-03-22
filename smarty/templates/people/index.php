<h1> page d'acceuil des people </h1>

    <pre>
    <?php foreach($people as $people): ?>
        <h2><a href="/people/read/<?=$people->id?>"><?=$people->people_firstname?></a></h2>
    <?php endforeach; ?>
    </pre>