<h1> page d'acceuil des wishlist </h1>

<?php foreach($wishlist as $wishlist): ?>
    <div class="card" class ="text-center" style="width: 18rem;">
  <img src="" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$wishlist->id?></a></h5>
        
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/wishlist/read/<?=$wishlist->id?>" class="btn btn-primary">En détail</a>
    </div>
</div>
<?php endforeach; ?>
