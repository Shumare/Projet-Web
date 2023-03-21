<h1> page d'acceuil des student </h1>

    <pre>
    <?php foreach($student as $student): ?>
        <h2><a href="/student/read/<?=$student->id?>"><?=$student->id?></a></h2>
    <?php endforeach; ?>
    </pre>