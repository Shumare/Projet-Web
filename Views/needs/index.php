<h1> page d'acceuil des needs </h1>

    <pre>
    <?php foreach($needs as $needs): ?>
        <h2><?=$needs->id_intership?></a></h2>
        <h2><?=$needs->id_skill?></a></h2>
    <?php endforeach; ?>
    </pre>