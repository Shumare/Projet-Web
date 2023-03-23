<pre>
        <h2><?= $student->id_promotion ?></h2>
        <h2><?= $student->id_people ?></h2>

        <div class="update_form">update
        <form action="/student/update" method="POST">
            <input type="text" name="id" value="<?=$student->id?>" readonly>
            <input type="text" name="id_promotion" value="<?=$student->id_promotion?>">
            <input type="text" name="id_people" value="<?=$student->id_people?>">
            <input type="submit" name="" id="">
            
        </form>
        </div>

        <a href="/student/delete/<?=$student->id?>">supprimer <?= $student->id?></a> 
        
</pre>