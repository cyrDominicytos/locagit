<?php


function index()
{
    //$posts = getPosts();
    $parametres = new ParametreManager();
    require('view/frontend/index.php');
}
function about()
{
    $parametres = new ParametreManager();
    require('view/frontend/about.php');
}
function property_grid()
{
    $parametres = new ParametreManager();
    require('view/frontend/property-grid.php');
}
function agents_grid()
{
    $parametres = new ParametreManager();

    $collaborateurs = new CollaborateurManager();
    $collaborateurs = $collaborateurs->getAll();
    require('view/frontend/agents-grid.php');
}
function contact()
{
     $parametres = new ParametreManager();

    require('view/frontend/contact.php');
}
function conditions()
{
     $parametres = new ParametreManager();

    require('view/frontend/conditions.php');
}
function politique()
{
     $parametres = new ParametreManager();

    require('view/frontend/politique.php');
}
