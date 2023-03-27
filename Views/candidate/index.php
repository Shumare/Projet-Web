<h1> Suivi de candidate </h1>
<a href="/candidate/dirige">create candidature </a>
<pre>
    <?php foreach ($candidate as $candidate) : ?>
        <h2><a href="/candidate/read/<?= $candidate->id_intership ?>"><?= $candidate->people_firstname ?> <?= $candidate->people_lastname ?></a></h2>

<div class="container ">        
    <div class="mb-3">
<label for="formGroupExampleInput" class="form-label">internship activity: </label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""value="<?= $candidate->inter_activity ?>">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Candidate step: </label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" value =" Etape n°<?= $candidate->cand_step ?>">
</div>
  <div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Sélectionner votre CV  et  lettre de motivation à uploader (PDF): </label>
    <input type="file" id="image_uploads" name="image_uploads" accept=".pdf" multiple>
  </div>
  </div> 

progressbar  
  <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar" style="width: 25%">25%</div>
</div>
<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar" style="width: 0%">0%</div>
</div>
<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar" style="width: 0%">0%</div>
</div>
<a href="/candidate/delete/<?= $candidate->id_intership ?>">supprimer la candidature de <?= $candidate->people_firstname ?></a>
    <?php endforeach; ?>
    </pre>