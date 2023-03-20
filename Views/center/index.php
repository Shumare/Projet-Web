<h1> page d'acceuil des centres </h1>

    <pre>
    <?php foreach($center as $center): ?>
        <h2><a href="/center/read/<?=$center->id?>"><?=$center->center_name?></a></h2>
    <?php endforeach; ?>
    </pre>