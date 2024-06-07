<div class="content">
    <?php
    $page = isset($_REQUEST['pg']) ? $_REQUEST['pg'] : '';
    switch($page) {
        case 'create':
            include('create.php');
            break;
        case 'login':
            include('login.php');
            break;
        case 'userlogin':
            include('userlogin.php');
            break;
        case 'adminlogin':
            include('adminlogin.php');
            break;
        case 'adminhome':
                include('adminhome.php');
                break;
        case 'home':
                    include('home.php');
                    break;
    }
    ?>