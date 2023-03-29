<h1>Wishlist</h1>
<div>
        <?php foreach ($internshipfilter as $internshipfilter) : ?>

                <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea"><a href="/internship/read/<?= $internshipfilter->id ?>"><?= $internshipfilter->comp_name ?></a></label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"><?= $internshipfilter->city_name ?></textarea>
                        <label for="floatingTextarea"></label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"> <?= $internshipfilter->intern_description ?></textarea>
                        <label for="floatingTextarea"></label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"><?= $internshipfilter->add_number . " " . $internshipfilter->add_typeway . " " . $internshipfilter->add_name ?></textarea>
                        <label for="floatingTextarea"></label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"><?= "Publication " . $internshipfilter->inter_publication_date ?></textarea>
                        <label for="floatingTextarea"></label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"><?= $internshipfilter->city_name ?>  </textarea>
                        <label for="floatingTextarea"></label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"><?= $internshipfilter->comp_activity ?></textarea>
                        <label for="floatingTextarea"></label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"><?= $internshipfilter->comp_phone_number ?>  </textarea>
                        <label for="floatingTextarea"></label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"><?= "Durée " . $internshipfilter->inter_duration ?>  </textarea>
                        <label for="floatingTextarea"></label>

                </div>
        <?php endforeach; ?>
        <a href="/profile/next">Suivant</a>

        <a href="/profile/previous">Précedent</a>
</div>