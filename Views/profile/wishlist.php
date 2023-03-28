<h1>Wishlist</h1>
<div>
<?php foreach($internshipfilter as $internshipfilter): ?>
        
        <a href="/internship/read/<?=$internshipfilter->id?>"><?=$internshipfilter->comp_name?></a></h2>
        <?=$internshipfilter->city_name?>
        <?=$internshipfilter->intern_description?>
        <?=$internshipfilter->add_number." ".$internshipfilter->add_typeway." ".$internshipfilter->add_name?>
        <?="Publication ".$internshipfilter->inter_publication_date?>
        <?=$internshipfilter->city_name?>  
        <?=$internshipfilter->comp_activity?>
        <?=$internshipfilter->comp_phone_number?>  
        <?="Durée ".$internshipfilter->inter_duration?>  
        <?php endforeach; ?>
        <a href="/profile/next">Suivant</a>

        <a href="/profile/previous">Précedent</a>
</div>
