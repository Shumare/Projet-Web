<h1> page d'acceuil des Give </h1>

    <pre>
    <?php foreach($give as $give): ?>
        <h2><a href="/give/read/<?=$give->id?>"><?=$give->id_intern_rating?><?=$give->id_student?></a></h2>
    <?php endforeach; ?>
    </pre>