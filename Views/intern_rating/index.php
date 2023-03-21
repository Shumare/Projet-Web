<h1> page d'acceuil des intern_rating </h1>

    <pre>
    <?php foreach($intern_rating as $intern_rating): ?>
        <h2><a href="/intern_rating/read/<?=$intern_rating->id?>"><?=$intern_rating->id_company?></a></h2>
    <?php endforeach; ?>
    </pre>