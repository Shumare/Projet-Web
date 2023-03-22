<pre>
        <h2><?= $wishlist->id_student ?></h2>
        <div class="update_form">update
        <form action="/wishlist/update" method="POST">
            <input type="text" name="id" value="<?=$wishlist->id?>" readonly>
            <input type="text" name="id_student" value="<?=$wishlist->id_student?>">
            <input type="submit" name="" id="">
            
        </form>
        </div>

        <a href="/wishlist/delete/<?=$wishlist->id?>">supprimer <?= $wishlist->id_student?></a> 
        
</pre>