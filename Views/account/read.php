<pre>
        <h2><?= $account->acc_email ?></h2>
        <div><?=$account->acc_password ?></div>
     
        <div class="update_form">update
        <form action="/account/update" method="POST">
            <input type="text" name="id" value="<?=$account->id?>" readonly>
            <input type="text" name="acc_email" value="<?=$account->acc_email?>">
            <input type="text" name="acc_password" value="<?=$account->acc_password?>">
            <input type="text" name="id_people" value="<?=$account->id_people?>">
            <input type="text" name="id_role" value="<?=$account->id_role?>">
            <input type="submit" name="" id="">
            
        </form>
        </div>

        <a href="/account/delete/<?=$account->id?>">supprimer <?= $account->acc_email?></a> 


</pre>

