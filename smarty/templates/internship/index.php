<h1> page d'acceuil des Internship </h1>

    <pre>
    <?php foreach($internship as $internship): ?>
        <h2><a href="/internship/read/<?=$internship->id?>"><?=$internship->inter_activity?></a></h2>
    <?php endforeach; ?>
    </pre>