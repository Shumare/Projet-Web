

<h1> page d'acceuil des Accounts </h1>

    <pre>
        
    <?php foreach($account as $account): ?>
        <h2><a href="/account/read/<?=$account->id?>"><?=$account->acc_email?></a></h2>
       <a href="/account/dirige">creation</a> 
        <?php endforeach; ?>
    </pre>
   