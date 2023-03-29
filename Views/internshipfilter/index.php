<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=
        
        , initial-scale=1.0">
        <title>Document</title>
</head>

<body>

        <h1> Recheche des internships </h1>

        <!--<a href="/internshipfilter/dirige">creation</a> -->

        <?php if (!isset($_SESSION["location"])) {
                $_SESSION["location"] = "";
        }
        if (!isset($_SESSION["PublicationDate"])) {
                $_SESSION["PublicationDate"] = "";
        }
        if (!isset($_SESSION["Domain"])) {
                $_SESSION["Domain"] = "";
        }
        if (!isset($_SESSION["StartDate"])) {
                $_SESSION["StartDate"] = "";
        }
        if (!isset($_SESSION["Duration"])) {
                $_SESSION["Duration"] = "";
        }
        ?>

        <form class="row g-3" action="/internshipfilter/index2" method="POST">
                <div class="col-12">
                        <label for="id" class="form-label">Location: </label>
                        <input type="text" class="form-control" name="location" value="<?= $_SESSION["location"] ?>">
                </div>
                <div class="col-md-6">
                        <label for="firstname" class="form-label">Publication Date: </label>
                        <input type="text" class="form-control" name="PublicationDate"
                                value="<?= $_SESSION["PublicationDate"] ?>">
                </div>
                <div class="col-md-6">
                        <label for="lstname" class="form-label">Domain: </label>
                        <input type="text" class="form-control" name="Domain" value="<?= $_SESSION["Domain"] ?>">
                </div>
                <div class="col-12">
                        <label for="gender" class="form-label">Start Date: </label>
                        <input type="text" class="form-control" name="StartDate" value="<?= $_SESSION["StartDate"] ?>">
                </div>
                <div class="col-12">
                        <label for="center" class="form-label">Duration: </label>
                        <input type="text" class="form-control" name="Duration" value="<?= $_SESSION["Duration"] ?>">
                </div>
                <div class="col-12">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
        </form>



        <pre>
    <?php foreach ($internshipfilter as $internshipfilter): ?>
        
                    <a href="/internship/read/<?= $internshipfilter->id ?>"><?= $internshipfilter->comp_name ?></a></h2>
                    <?= $internshipfilter->city_name ?>
                    <?= $internshipfilter->intern_description ?>
                    <?= $internshipfilter->add_number . " " . $internshipfilter->add_typeway . " " . $internshipfilter->add_name ?>
                    <?= "Publication " . $internshipfilter->inter_publication_date ?>
                    <?= $internshipfilter->city_name ?>  
                    <?= $internshipfilter->comp_activity ?>
                    <?= $internshipfilter->comp_phone_number ?>  
                    <?= "Durée " . $internshipfilter->inter_duration . " semaines" ?>  
                    <a href="/internshipfilter/createWish/<?= $internshipfilter->id ?>">Add to wishlist</a>
    <?php endforeach; ?>
    
    <a href="/internshipfilter/next">Suivant</a>

    <a href="/internshipfilter/previous">Précedent</a>

 
    </pre>
</body>

</html>