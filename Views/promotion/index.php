<h1> page d'acceuil des promotions </h1>

    <pre>
    <?php foreach($promotion as $promotion): ?>
        <h2><a href="/role/read/<?=$promotion->id?>"><?=$promotion->promo_name?></a></h2>
    <?php endforeach; ?>
    </pre>