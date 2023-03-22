<pre>
        <h2><?= $account->acc_email ?></h2>
        <div><?=$account->acc_password ?></div>
     
        
        <form action="/account/delete" method="POST">
            <input type="text" name="id">
            <input type="submit" value="">
        </form>
</pre>

