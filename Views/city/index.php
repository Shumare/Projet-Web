<h1> page d'acceuil des city </h1>

    <pre>
    <?php foreach($city as $city): ?>
        <h2><a href="/city/read/<?=$city->id?>"><?=$city->city_name?></a></h2>
    <?php endforeach; ?>
    </pre>