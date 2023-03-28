<?php
require_once('media/smarty-3.1.47/libs/Smarty.class.php');

$smarty = new Smarty();
 
// Définir les variables pour le template
$page = $_SESSION['current_page'] ?? '';
$user_role = $_SESSION['user_role'] ?? '';
$title = $_SESSION['page_title'] ?? '';

$smarty->setTemplateDir('/templates');
$smarty->setCompileDir('/templates_c');
$smarty->setCacheDir('/cache');
$smarty->setConfigDir('/configs');

// Assigner les variables au template
$smarty->assign('page', $page);
$smarty->assign('title', $title);
$smarty->assign('user_role', $user_role);

// Afficher la navbar
$smarty->display("../Views/header.tpl");
?>
    <div class="container">
        <?= $contenu ?>
    </div>
<?php
// Afficher le footer
$smarty->display('../Views/footer.tpl');
?>

