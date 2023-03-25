

<form action="/internshipfilter/index" method="POST">
    <input type="text" name="location">
    <p>Location</p>
    <input type="text" name="Publiation date">
    <p>Publication date</p>
    <input type="text" name="Domain">
    <p>Domain</p>
    <input type="text" name="Start date">
    <p>start date</p>
    <input type="text" name="duration">
    <p>duration</p>
    <button type="submit">Submit</button>
</form>
<h1> page d'acceuil des filtre internship </h1>

<a href="/company/dirige">creation</a> 

    <pre>
    <?php foreach($internshipfilter as $internshipfilter): ?>
        
    <a href="/internship/read/<?=$internshipfilter->id?>"><?=$internshipfilter->inter_activity?></a></h2>
        
    <?php endforeach; ?>
    
    <a href="/internshipfilter/next">Suivant</a>

    <a href="/internshipfilter/previous">Précedent</a>

 
    </pre>
