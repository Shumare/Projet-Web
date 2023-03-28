<h1> Recheche des people </h1>

<!--<a href="/peoplefilter/dirige">creation</a> --> 

<?php if(!isset($_SESSION["fistname"])){
    $_SESSION["fistname"]="";
}
if(!isset($_SESSION["lastname"])){
    $_SESSION["lastname"]="";
}
if(!isset($_SESSION["role"])){
    $_SESSION["role"]="";
}

?>

<form class="row g-3" action="/peoplefilter/index2" method="POST">
<div class="col-12">
                <label for="id" class="form-label">firstname: </label>
                <input type="text" class="form-control" name="firstname" value="<?= $_SESSION["firstname"]?>">
        </div>
        <div class="col-md-6">
                <label for="firstname" class="form-label">lastname: </label>
                <input type="text" class="form-control" name="lastname" value="<?= $_SESSION["lastname"]?>">
        </div>
        <div class="col-md-6">
                <label for="lstname" class="form-label">role: </label>
                <input type="text" class="form-control" name="role" value="<?= $_SESSION["role"]?>">
        </div>
        <div class="col-12">
                <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
</form>



    <pre>
    <?php foreach($peoplefilter as $peoplefilter): ?>
        
   
    <?=$peoplefilter->people_firstname?>
    <?=$peoplefilter->people_lastname?>
    <?=$peoplefilter->role?>
    
    <?php endforeach; ?>
    
    <a href="/peoplefilter/next">Suivant</a>

    <a href="/peoplefilter/previous">Précedent</a>

 
    </pre>