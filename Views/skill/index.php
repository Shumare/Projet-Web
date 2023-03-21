<h1> page d'acceuil des skills </h1>

    <pre>
    <?php foreach($skill as $skill): ?>
        <h2><a href="/skill/read/<?=$skill->id?>"><?=$skill->skill_name?></a></h2>
    <?php endforeach; ?>
    </pre>