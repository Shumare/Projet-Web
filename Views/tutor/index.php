<h1> page d'acceuil des tutors </h1>

    <pre>
    <?php foreach($tutor as $tutor): ?>
        <h2><a href="/tutor/read/<?=$tutor->id?>"><?=$tutor->id?></a></h2>
    <?php endforeach; ?>
    <a href="/tutor/dirige">creation</a> 
    </pre>