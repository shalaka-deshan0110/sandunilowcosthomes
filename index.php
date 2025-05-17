<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
include 'inc/header.php';

// Include the appropriate page content
switch ($page) {
    case 'about':
        include 'pages/about.php';
        break;
    case 'services':
        include 'pages/services.php';
        break;
    case 'projects':
        include 'pages/projects.php';
        break;
    case 'testimonials':
        include 'pages/testimonials.php';
        break;
    case 'contact':
        include 'pages/contact.php';
        break;
    default:
        include 'pages/home.php';
        break;
}

include 'inc/footer.php';
?>
