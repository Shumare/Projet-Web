<pre>
        <h2><?= $account->acc_email ?></h2>
        <div><?=$account->acc_password ?></div>
     
        <form action="/account/create" method="POST">
            <input type="text" name="acc_email">
            <input type="text" name="acc_password">
            <input type="text" name="id_people">
            <input type="text" name="id_role">
            <input type="submit" name="" id="">
            
        </form>
        
</pre>

