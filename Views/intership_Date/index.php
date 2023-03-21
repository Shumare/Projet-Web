<h1> page d'acceuil des intership_date </h1>

    <pre>
    <?php foreach($intership_date as $intership_date): ?>
        <h2><a href="/intership_date/read/<?=$intership_date->id?>"><?=$intership_date->dates?></a></h2>
    <?php endforeach; ?>
    </pre>