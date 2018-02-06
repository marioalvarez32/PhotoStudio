<?php
//Testing github
//session_start();
// include database connection info
//include('pdo_connect.php');
// include functions needed to data from the database
//include('refl/refl.php');
// Read the main task using the primary key 'ref'
$ref = 'home';
if (isset($_REQUEST['ref']))
    $ref = $_REQUEST['ref'];

switch ($ref) {
    case 'login':
        include('view/login.php');
        //testing
        //include('view/footer.php');
        break;
    case 'register':
        include('view/login.php');
        break;
    case 'logout':
        // destroy session variables and display home form
        session_destroy();
        setcookie(session_name(), '', time() - 1000, '/');
        $_SESSION = array();
        // display default view
        include('view/header.php');
        include('view/displayContentHome.php');
        include('view/displayScript.php');
        // include menu
        //include('view/sidemenu.php');
        //include('view/defaultview.php');
        // include footer
        include('view/footer.php');
        break;
    case 'search':
        include('view/headerSimple.php');
        include('view/displayContentSearch.php');
        include('view/footer.php');
        break;
    case 'bodas':
         // display default view
        include('view/displayHeader.php');
        include('view/displayNav.php');
        include('view/displayContent_Info.php');
        include('view/displayFooter.php');
        include('model/script_simple.php');
        break;
    case 'home':
        // display default view
        include('view/displayHeader.php');
        include('view/displayNav.php');
        include('view/displayContent.php');
        include('view/displayFooter.php');
        include('model/script_home.php');
        break;
}
?>
