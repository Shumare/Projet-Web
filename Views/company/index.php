


<h1> page d'acceuil des entreprises </h1>

    <pre>
    <?php foreach($company as $company): ?>
        <h2><a href="/company/read/<?=$company->id?>"><?=$company->comp_name?></a></h2>
        
       
    <?php endforeach; ?>
    <a href="/company/dirige">creation</a> 
   

    </pre>