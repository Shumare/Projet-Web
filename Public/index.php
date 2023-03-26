  <?php

/*use Website\Autoloader;
use Website\Models\centerModel;
use Website\Models\PeopleModel;

  require_once 'Autoloader.php';

  Autoloader::register();
 
  $model = new centerModel;*/

  //$people =$model->findAll();
  
 // $peoples =$model->findBy(['people_lastname'=> 'Leforestier','people_lastname'=> 'Leforestier']);
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
  use Website\Controllers\MainController;
  define('ROOT', dirname(__DIR__));
  //var_dump(ROOT);

  require_once ROOT.'/Autoloader.php';
  Autoloader::register();

  session_start();
  //$userModel = new Website\Models\UserModel;
  //$userModel->checkConnection();

  $website = new MainController();
  $user = new Website\Models\UserModel;
  if ($user->checklogin() == true) {
    $website->start();
  }elseif ($user->checklogin() == false) {
    $website->startlogin();
  }
  