<?php 
define( 'WEB_ROOT', $_SERVER['DOCUMENT_ROOT'] );
include( WEB_ROOT.'/views/partials/header.php' );
include( WEB_ROOT.'/views/partials/menu.php' );
?>
<link rel="stylesheet" href="./../includes/styles/case-study.css">
<main class="wrap">
    <article id="case-study">
        <header>
            <h1>GlobalMedic</h1>
            <h2>HTML, CSS, PHP and WordPress</h2>
        </header>
        <div class="case-content">
            <!-- <ul>
                <li><a href="https://dev2.globalmedic.ca/">Live Site</a></li>
            </ul> -->
            <p>
                This website was done for GlobalMedic, a humanitarian relief organization based in Etobicoke. They were looking for a new site design with improved organization and workflow for staff.
            </p>
            <img src="../includes/assets/gm-hero-area.png" alt="screen shot of globalmedic site">
            <p>
                I wanted to make the home page of the site as customizable as possible without the risk of changing the layout or making the site less 
                accessible or responsive. I decided to utilize the customizer section of WordPress for this. Below is the section where you can edit everything 
                in the hero image area of the home page. The titles, icons and background of the tiles are also editable in a different section of the customizer.
            </p>
            <img class="customize-img" src="../includes/assets/hero-image-customize.png">
            <p>
                I made multiple mockups for this project and made changes with feedback from the staff at GlobalMedic. Below is the final desktop version of 
                the mockup which I used Adobe Photoshop to create. I also made a mobile version of the mockup with a working menu in Adobe XD which can be found 
                <a href="https://xd.adobe.com/view/c3c3b443-7165-4595-507b-bf741438b159-b5f2/">here.</a>
            </p>
            <img src="../includes/assets/gm-mockup-final.png">
            <p>
                Below is the final site live on the development server. The site has yet to be officially launched as the staff are working on uploading content.
            </p>
            <img src="../includes/assets/gm-full-page.png">
        </div>
    </article>
</main>