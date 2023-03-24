<pre>

        <h2><?= $Company_details->comp_name ?></h2><p>name</p>
        <div><?=$Company_details->comp_activity ?></div><p>activ</p>
        <div><?=$Company_details->comp_description ?></div><p>desc</p>
        <div><?=$Company_details->comp_phone_number ?></div><p>phone</p>
        <div><?=$Company_details->comp_number_employees ?></div><p>employee</p>
        <div><?=$Company_details->comp_tutor_rating ?></div><p>rating</p>
        <div><?=$Company_details->comp_current_intern ?></div><p>current inter</p>
        <div><?=$Company_details->comp_active ?></div><p>active</p>
        <h2><?= $intern_rating->id_company ?></h2><p>comp</p>
        <div><?= $intern_rating ->int_environment?></div><p>envi</p>
        <div><?= $intern_rating ->int_office_qualities?></div><p>offi</p>
        <div><?= $intern_rating ->int_wage?></div><p>wage</p>
        <div><?= $intern_rating ->int_acquired_experience?></div><p>acquired</p>
        <div><?= $intern_rating ->int_supervision_qualities?></div><p>supervision</p>
        <?= $global = ($intern_rating ->int_environment+$intern_rating ->int_office_qualities+$intern_rating ->int_wage+$intern_rating ->int_acquired_experience+$intern_rating ->int_supervision_qualities)/5 ?>
        <p><?= ($global*100)/20 ?>%</p>

        

 </pre>