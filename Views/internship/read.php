<pre>
   
        <h2><?= $internship->id ?></h2>
        <div><?=$internship->inter_activity ?></div>
        <div><?=$internship->inter_salary ?></div>
        <div><?=$internship->intern_description ?></div>
        <div><?=$internship->inter_number_place ?></div>
        <div><?=$internship->id_company ?></div>
        <div><?=$internship->id_date ?></div>


        <div class="update_form">update
        <form action="/internship/update" method="POST">
            <input type="text" name="id" value="<?=$internship->id?>" readonly>
            <input type="text" name="inter_activity" value="<?=$internship->inter_activity?>">
            <input type="text" name="inter_salary" value="<?=$internship ->inter_salary?>">
            <input type="text" name="intern_description"value= "<?=$internship->intern_description?>">
            <input type="text" name="intern_number_place" value="<?=$internship->intern_number_place?>">
            <input type="text" name="id_company"value="<?=$internship->id_company?>">
            <input type="text" name="id_date" value="<?=$internship->id_date?>">
            <input type="submit" name="" id="">
            
        </form>
        </div>

        <a href="/internship/delete/<?=$internship->id?>">supprimer <?= $internship->inter_activity?></a> 

</pre>
