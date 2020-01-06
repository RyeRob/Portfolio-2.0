<?php 
define( 'WEB_ROOT', $_SERVER['DOCUMENT_ROOT'] );
include( WEB_ROOT.'/views/partials/header.php' );
include( WEB_ROOT.'/views/partials/menu.php' );
?>
<link rel="stylesheet" href="./../includes/styles/case-study.css">
<main class="wrap">
    <article id="case-study">
        <header>
            <h1>Burger Restaurant Site</h1>
            <h2>HTML, CSS, JavaScript, jQuery</h2>
        </header>
        <div class="case-content">
            <ul class="case-links">
                <li><a href="">Live Site</a></li>
            </ul>
            <p>
                This acadmeic project was the first website I built with a team. I got my first experience using GitHub to collaborate on code in 
                this project and learned a lot about merge conflicts. Each person was responsible for 2 unique web pages, I created pages for gift cards and the site map as well as helping 
                with home page, navigation and overall design of the site.
            </p>
            <h3 class="learned-heading">What I Learned</h3>
            <ul>
                <li>- Git version control</li>
                <li>- JavaScript form validation and jQuery basics</li>
                <li>- Translating a design into a working web site</li>
            </ul>
            <img class="showcase-img" src="../includes/assets/Restaurant-GiftCards1.png" alt="screen shot of gift cards page">
            <p>
                For the gift cards page, I made 3 different gift card designs in Photoshop and used JavaScript to switch between the images when the radio 
                button is clicked. The form has JavaScript validation with regular expressions and error messages that appear when something doesn’t match the regex or is 
                left empty.
            </p>
            <img class="showcase-img" src="../includes/assets/Restaurant-SiteMap1.png" alt="screen shot of gift cards page with different card design">
            <p> 
                For the site map page, I used jQuery to show and hide lists with an animation when you click on a page title to give a description 
                of that page is and a direct link to it.
            </p>
            <img class="showcase-img" src="../includes/assets/Restaurant-SiteMap2.png" alt="screen shot of the applications text search">
        </div>
    </article>
</main>