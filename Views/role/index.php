<h1> page d'acceuil des role </h1>

    <pre>
    <?php foreach($role as $role): ?>
        <h2><a href="/role/read/<?=$role->id?>"><?=$role->role?></a></h2>
    <?php endforeach; ?>
    </pre>