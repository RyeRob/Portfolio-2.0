<?php 
define( 'WEB_ROOT', $_SERVER['DOCUMENT_ROOT'] );
include( WEB_ROOT.'/views/partials/header.php' );
include( WEB_ROOT.'/views/partials/menu.php' );
?>
<link rel="stylesheet" href="./../includes/styles/case-study.css">
<main class="wrap">
    <article id="case-study">
        <header>
            <h1>Andre's Restaurant</h1>
            <h2>HTML, CSS, JavaScript, jQuery</h2>
        </header>
        <div class="case-content">
            <ul class="case-links">
                <li><a href="">Live Site</a></li>
            </ul>
            <p>
                This was the first academic project I completed working in a group on the same site. It was also the first time I collaborated on 
                a project using a version control system and Trello. The guidelines for this project were to create a restaurant site with any theme 
                (we chose hamburgers) that had multiple required pages such as menu, site map, gift cards and others. As well as helping with the overall 
                aesthetic of the site I designed and coded the gift cards and site map pages.
            </p>
            <img src="../includes/assets/Restaurant-GiftCards1.png" alt="screen shot of gift cards page">
            <p>
                For the gift cards page, I made 3 different gift card designs in Photoshop and used JavaScript to switch between the images when the radio 
                button is clicked, and a different amount is selected. The form has JavaScript validation with regex for all required fields and error 
                messages that appear when something doesn’t match the regex or is left empty.
            </p>
            <img src="../includes/assets/Restaurant-SiteMap1.png" alt="screen shot of gift cards page with different card design">
            <p> 
                For the site map page, I used jQuery to show and hide lists with a simple animation when you click on a page title to give a description 
                of that page and a direct link to the page.
            </p>
            <img src="../includes/assets/Restaurant-SiteMap2.png" alt="screen shot of the applications text search">
        </div>
    </article>
</main>