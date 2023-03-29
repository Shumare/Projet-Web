<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>

        <h1> Recheche des companies </h1>

        <!--<a href="/compan$companyfilter/dirige">creation</a> -->

        <?php if (!isset($_SESSION["comp_name"])) {
                $_SESSION["comp_name"] = "";
        }
        if (!isset($_SESSION["comp_activity"])) {
                $_SESSION["comp_activity"] = "";
        }
        if (!isset($_SESSION["city_name"])) {
                $_SESSION["city_name"] = "";
        }

        ?>

        <form class="row g-3" action="/companyfilter/index2" method="POST">
                <div class="col-12">
                        <label for="id" class="form-label">name: </label>
                        <input type="text" class="form-control" name="comp_name" value="<?= $_SESSION["comp_name"] ?>">
                </div>
                <div class="col-md-6">
                        <label for="name" class="form-label">activity: </label>
                        <input type="text" class="form-control" name="comp_activity"
                                value="<?= $_SESSION["comp_activity"] ?>">
                </div>
                <div class="col-md-6">
                        <label for="lstname" class="form-label">name: </label>
                        <input type="text" class="form-control" name="city_name" value="<?= $_SESSION["city_name"] ?>">
                </div>
                <div class="col-12">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
        </form>



        <pre>
    <?php foreach ($companyfilter as $companyfilter): ?>
        
   
            <?= $companyfilter->comp_name ?>
            <?= $companyfilter->comp_activity ?>
            <?= $companyfilter->city_name ?>
    
    <?php endforeach; ?>
    
    <a href="/companyfilter/next">Suivant</a>

    <a href="/companyfilter/previous">Précedent</a>

 
    </pre>
</body>

</html>