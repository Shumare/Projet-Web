
<?php if(!isset($_SESSION["location"])){
    $_SESSION["location"]="";
}
if(!isset($_SESSION["PublicationDate"])){
    $_SESSION["PublicationDate"]="";
}
if(!isset($_SESSION["Domain"])){
    $_SESSION["Domain"]="";
}
if(!isset($_SESSION["StartDate"])){
    $_SESSION["StartDate"]="";
}
if(!isset($_SESSION["Duration"])){
    $_SESSION["Duration"]="";
}
?>
<form action="/internshipfilter/index2" method="POST">
    <input type="text" name="location" value="<?= $_SESSION["location"]?>">
    <p>Location</p>
    <input type="text" name="PublicationDate" value="<?= $_SESSION["PublicationDate"]?>">
    <p>Publication date</p>
    <input type="text" name="Domain" value="<?= $_SESSION["Domain"]?>">
    <p>Domain</p>
    <input type="text" name="StartDate" value="<?= $_SESSION["StartDate"]?>">
    <p>start date</p>
    <input type="text" name="Duration" value="<?= $_SESSION["Duration"]?>">
    <p>duration</p>
    <button type="submit">Submit</button>

    
</form>
<h1> page d'acceuil des filtre internship </h1>

<a href="/company/dirige">creation</a> 

    <pre>
    <?php foreach($internshipfilter as $internshipfilter): ?>
        
    <a href="/internship/read/<?=$internshipfilter->id?>"><?=$internshipfilter->comp_name?></a></h2>
    <?=$internshipfilter->city_name?>
    <?=$internshipfilter->intern_description?>
    <?=$internshipfilter->add_number.$internshipfilter->add_typeway.$internshipfilter->add_name?>
    <?=$internshipfilter->dates?>
    <?=$internshipfilter->city_name?>  
    <?=$internshipfilter->comp_activity?>
    <?=$internshipfilter->comp_phone_number?>  
    <?=$internshipfilter->inter_duration?>  
    <?php endforeach; ?>
    
    <a href="/internshipfilter/next">Suivant</a>

    <a href="/internshipfilter/previous">Précedent</a>

 
    </pre>

    