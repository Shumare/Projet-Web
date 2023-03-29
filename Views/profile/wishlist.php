<h1>Wishlist</h1>
<div>
        
        </div>
        <?php foreach ($internshipfilter as $internshipfilter) : ?>
        <div class="card border-primary mb-3" style="max-width: 18rem;">
          <div class="card-header"><a href="/internship/read/<?= $internshipfilter->id ?>"><?= $internshipfilter->comp_name ?></a></div>
          <div class="card-body text-primary">
            <h5 class="card-title"><?= $internshipfilter->city_name ?></h5>
            <p class="card-text"> <?= $internshipfilter->intern_description ?><br> <?= $internshipfilter->add_number . " " . $internshipfilter->add_typeway . " " . $internshipfilter->add_name ?> <br><?= "Publication " . $internshipfilter->inter_publication_date ?> <br><?= $internshipfilter->city_name ?> <br> <?= $internshipfilter->comp_activity ?> <br><?= $internshipfilter->comp_phone_number ?> <br><?= "Durée " . $internshipfilter->inter_duration. " semaines"?> </p>
          </div>
        </div>
     
        <?php endforeach; ?>
        <a href="/profile/next">Suivant</a>

        <a href="/profile/previous">Précedent</a>