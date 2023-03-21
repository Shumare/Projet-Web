<h1> page d'acceuil des country </h1>

    <pre>
    <?php foreach($country as $country): ?>
        <h2><a href="/country/read/<?=$country->id?>"><?=$country->country_name?></a></h2>
    <?php endforeach; ?>
    </pre>