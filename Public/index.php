  <?php

/*use Website\Autoloader;
use Website\Models\centerModel;
use Website\Models\PeopleModel;

  require_once 'Autoloader.php';

  Autoloader::register();
 
  $model = new centerModel;*/

  //$people =$model->findAll();
  
 // $peoples =$model->findBy(['people_lastname'=> 'Leforestier']);
 //$peoples =$model->find(2);
 /*$people =$model
    ->setPeople_firstname('Laurence')
    ->setPeople_lastname('Quehen')
    ->setPeople_gender('Homme')
    ->setId_center(2);*/

    //$model->create($people);
    //$model->update(2, $people );
    //$model->delete(5);
  //var_dump($people);

  /*$center = $model->findAll();
  var_dump($center);*/

  use Website\Autoloader;
  use Website\Main\Main;
  define('ROOT', dirname(__DIR__));
  var_dump(ROOT);

  require_once ROOT.'/Autoloader.php';
  Autoloader::register();

  $website = new Main();
  $website->start();