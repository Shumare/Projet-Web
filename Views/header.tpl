<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$titre}</title>
    <link rel="stylesheet" href="../../media/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MIB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item {if $page == 'home'}active{/if}">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item {if $page == 'internships'}active{/if}">
                        <a class="nav-link" href="#">Internships</a>
                    </li>
                    <li class="nav-item {if $page == 'companies'}active{/if}">
                        <a class="nav-link" href="#">Companies</a>
                    </li>
                    <li class="nav-item {if $page == 'profile'}active{/if}">
                        <a class="nav-link" href="#">My Profile</a>
                    </li>
                    {if $user_role == 'admin' || $user_role == 'tutor'}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {if $page == 'admin_panel'}active{/if}" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin Panel
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Users</a></li>
                            <li><a class="dropdown-item" href="#">Companies</a></li>
                            <li><a class="dropdown-item" href="#">Internships</a></li>
                        </ul>
                    </li>
                    {/if}
                </ul>
            </div>
        </div>
    </nav>

<!--
$title : le titre de l'onglais
$page le nom de la page active (home,internships,companies,profile)
$user_role : le rôle de l'utilisateur (student, admin, tutor)
-->