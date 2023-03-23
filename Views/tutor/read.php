<pre>
        <h2><?= $tutor->id_people ?></h2>
        
        <div class="update_form">update
        <form action="/tutor/update" method="POST">
            <input type="text" name="id" value="<?=$tutor->id?>" readonly>
            <input type="text" name="id_people" value="<?=$tutor->id_people?>">
            <input type="submit" name="" id="">
            
        </form>
        </div>

        <a href="/tutor/delete/<?=$tutor->id?>">supprimer <?= $tutor->id_people?></a> 

</pre>