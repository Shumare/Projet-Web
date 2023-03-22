<h1> page d'acceuil des stocked </h1>

    <pre>
    <?php foreach($stocked as $stocked): ?>
        <h2><a href="/stocked/read/<?=$stocked->id?>"><?=$stocked->id_intership?></a></h2>
    <?php endforeach; ?>
    </pre>