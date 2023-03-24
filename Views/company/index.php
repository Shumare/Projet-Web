


<h1> page d'acceuil des entreprises </h1>

<a href="/company/dirige">creation</a> 

    <pre>
    <?php foreach($company as $company): ?>
        <li></li><a href="/company/read/<?=$company->id?>"><?=$company->comp_name?></a></h2>
        
     
    <?php endforeach; ?>
    
    <a href="/company/index1">Suivant</a>
    <p><?php $_COOKIE['currentPage']?></p>
    <a href="/company/index2">Précedent</a>

    <button id="reload">

    </button>
    </pre>

<script src="test.js"></script>