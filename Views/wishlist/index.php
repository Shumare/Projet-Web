<h1> page d'acceuil des wishlist </h1>

    <pre>
    <?php foreach($wishlist as $wishlist): ?>
        <h2><a href="/wishlist/read/<?=$wishlist->id?>"><?=$wishlist->id?></a></h2>
    <?php endforeach; ?>
    </pre>