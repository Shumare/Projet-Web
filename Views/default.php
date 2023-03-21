<?php
require_once('../media/smarty-3.1.47/libs/Smarty.class.php');

$smarty = new Smarty();

// Définir les variables pour le template
$page = 'home';
$user_role = 'admin';
$title = "titre";

// Assigner les variables au template
$smarty->assign('page', $page);
$smarty->assign('title', $title);
$smarty->assign('user_role', $user_role);
// Afficher la navbar
$smarty->display('../Views/header.tpl');
?>
    <div class="container">
        <?= $contenu ?>
    </div>
<?php
    $smarty->display('../Views/footer.tpl');
?>