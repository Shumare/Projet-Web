<div class="container mt-5">
        <h1 class="mb-5">Liste des candidatures</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nom et prénom</th>
                <th scope="col">Poste recherché</th>
                <th scope="col">Date de candidature</th>
                <th scope="col">Statut</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($applications as $application): ?>
                <tr>
                    <td><?= $application['nom'] . ' ' . $application['prenom'] ?></td>
                    <td><?= $application['poste_recherche'] ?></td>
                    <td><?= $application['date_candidature'] ?></td>
                    <td><?= $application['statut'] ?></td>
                    <td>
                        <a href="application_detail.php?id=<?= $application['id'] ?>" class="btn btn-primary">Voir le détail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
