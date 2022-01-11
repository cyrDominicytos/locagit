<?php


function index()
{
    //$posts = getPosts();
    $parametres = new ParametreManager();
    require('view/frontend/index.php');
}
function about()
{
    
    require('view/frontend/about.php');
}
function property_grid()
{
    
    require('view/frontend/property-grid.php');
}
function agents_grid()
{
    $collaborateurs = new CollaborateurManager();
    $collaborateurs = $collaborateurs->getAll();
    var_dump( $collaborateurs);
    require('view/frontend/agents-grid.php');
}
function contact()
{
    
    require('view/frontend/contact.php');
}
