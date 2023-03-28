<?= $_SESSION['username']?>

<h1> page d'acceuil des Accounts </h1>

    <pre>
        
    <?php foreach($account as $account): ?>
        <h2><a href="/account/read/<?=$account->id?>"><?=$account->acc_email?></a></h2>
        <?php endforeach; ?>

        <a href="/account/dirige">creation</a> 
    </pre>
   