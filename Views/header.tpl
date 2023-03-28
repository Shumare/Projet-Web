<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
    <link rel="stylesheet" media="all" href="/media/bootstrap/css/bootstrap.min.css" type="text/css">
</head>

<body>
{if $user_role != ''}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/main/recent">MIB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {if $page == 'home'}active" aria-current="page{/if}" href="/main/recent">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {if $page == 'internships'}active" aria-current="page{/if}" href="/internship">Internships</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {if $page == 'company'}active" aria-current="page{/if}" href="/company">Companies</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {if $page == 'admin_panel'}active{/if}" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            My Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item {if $page == 'admin_users'}active" aria-current="page{/if}" href="/User/Myprofile">My Profile</a></li>
                            <li><a class="dropdown-item {if $page == 'admin_companies'}active" aria-current="page{/if}" href="/User/logout">Logout</a></li>
                        </ul>
                    </li>
                    {if $user_role == 'admin' || $user_role == 'tutor'}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {if $page == 'admin_panel' || "admin_internships" || "admin_companies" || "admin_users"}active{/if}" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin Panel
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                            <li><a class="dropdown-item {if $page == 'admin_users'}active" aria-current="page{/if}" href="/people">Users</a></li>
                            <li><a class="dropdown-item {if $page == 'admin_companies'}active" aria-current="page{/if}" href="/company">Companies</a></li>
                            <li><a class="dropdown-item {if $page == 'admin_internships'}active" aria-current="page{/if}" href="/internship">Internships</a></li>
                        </ul>
                    </li>
                    {/if}
                </ul>
            </div>
        </div>
    </nav>
{/if}
<!--
$title : le titre de l'onglais
$page le nom de la page active (home,internships,companies,profile)
$user_role : le rôle de l'utilisateur (student, admin, tutor)
-->