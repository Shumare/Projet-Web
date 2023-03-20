<h1> page d'acceuil des Adresses </h1>

    <pre>
    <?php foreach($address as $address): ?>
        <h2><a href="/address/read/<?=$address->id?>"><?=$address->add_name?></a></h2>
    <?php endforeach; ?>
    </pre>