


<h1> page d'acceuil des entreprises </h1>

<a href="/company/dirige">creation</a> 

    <pre>
    <?php foreach($company as $company): ?>
        <h2><a href="/company/read/<?=$company->id?>"><?=$company->comp_name?></a></h2>
        
     
    <?php endforeach; ?>
    
        <div class="pagination">
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
        </div>

    </pre>