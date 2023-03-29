    <head>
    <a class="icon-link icon-link-hover" href="/peoplefilter/index2">
        recherche
        <svg class="bi" aria-hidden="true">
            <use xlink:href="#arrow-right"></use>
        </svg>
    </a>
        <a class="icon-link icon-link-hover" href="/account/dirige">
            create people
            <svg class="bi" aria-hidden="true">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </a>
         
    </head>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($people as $people) : ?>
            <div class="col">
                <div class="card h-100">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/people/read/<?= $people->id ?>"><?= $people->people_firstname ?></a></h5>
                        <p class="card-text">Le profile ci-dessous appartient à <?= $people->people_firstname ?> </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="link-candidate">
        <a href="/candidate/candidature"> suivi de candidature</a>
    </div>
    <div class="link">
        <a href="/people/previous">Précedent</a>
        <a href="/people/next">Suivant</a>
    </div>
</body>

</html>