<h1> page d'acceuil des Candidate </h1>

    <pre>
    <?php foreach($candidate as $candidate): ?>
        <h2><a href="/candidate/read/<?=$candidate->id_intership?>"><?=$candidate->cand_cv?></a></h2>
    <?php endforeach; ?>
    </pre>