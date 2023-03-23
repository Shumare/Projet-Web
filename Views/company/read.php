<pre>
   
        <h2><?= $company->comp_name ?></h2>
        <div><?=$company->comp_activity ?></div>
        <div><?=$company->comp_description ?></div>
        <div><?=$company->comp_phone_number ?></div>
        <div><?=$company->comp_number_employees ?></div>
        <div><?=$company->comp_tutor_rating ?></div>
        <div><?=$company->comp_current_intern ?></div>
        <div><?=$company->comp_active ?></div>

        <div class="update_form">update
        <form action="/company/update" method="POST">
            <input type="text" name="id" value="<?=$company->id?>" readonly>
            <input type="text" name="comp_name" value="<?=$company->comp_name?>">
            <input type="text" name="comp_description" value="<?=$company ->comp_description?>">
            <input type="text" name="comp_activity"value= "<?=$company->comp_activity?>">
            <input type="text" name="comp_phone_number" value="<?=$company->comp_phone_number?>">
            <input type="text" name="comp_number_employees"value="<?=$company->comp_number_employees?>">
            <input type="text" name="comp_tutor_rating" value="<?=$company->comp_tutor_rating?>">
            <input type="text" name="comp_current_intern" value="<?=$company->comp_current_intern?>">
            <input type="text" name="comp_active" value="<?=$company->comp_active?>">
            <input type="submit" name="" id="">
            
        </form>
        </div>

        <a href="/company/delete/<?=$company->id?>">supprimer <?= $company->comp_name?></a> 
</pre>