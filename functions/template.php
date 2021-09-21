<?php

/* template function script */

/* header function */
function head(){
    echo'<h2 class="siteTitle">Survey 2021</h2>';
}

/* footer function */
function footer(){
    echo'<p><a href=admin/index.php>Admin Panel</a></p>';
}

/* side navigation function  */
function sideNav($dbConn){
    echo'
        <ul>
            <li><a href="#">Survey 1</a></li>
            <li><a href="#">Survey 2</a></li>
        </ul>
    ';
}

?>