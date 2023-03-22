<?php
require_once ROOT.'/media/smarty-3.1.47/libs/Smarty.class.php';

$smarty = new Smarty();

// Définir les variables pour le template
$page = 'home';
$user_role = 'admin';
$title = "titre";

$smarty->setTemplateDir('/media/smarty-3.1.47/templates');
$smarty->setCompileDir('/media/smarty-3.1.47/templates_c');
$smarty->setCacheDir('/media/smarty-3.1.47/cache');
$smarty->setConfigDir('/media/smarty-3.1.47/configs');

// Assigner les variables au template
$smarty->assign('page', $page);
$smarty->assign('title', $title);
$smarty->assign('user_role', $user_role);
// Afficher la navbar
$smarty->display('Views/header.tpl');
?>
    <div class="container">
        <?= $contenu ?>
    </div>
<?php
    $smarty->display('Views/footer.tpl');
?>