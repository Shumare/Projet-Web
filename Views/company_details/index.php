<h1> page d'acceuil des entreprises </h1>

    <pre>
    <?php foreach($Company_details as $Company_details): ?>
        <h2><a href="/Company_details/read/<?=$Company_details->id?>"><?=$Company_details->comp_name?></a></h2>
        <p><?=$Company_details->id?></p>
       
    <?php endforeach; ?>
    <a href="/Company_details/index">creation</a> 
   
    </pre>