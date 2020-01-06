<?php
include( WEB_ROOT.'/views/partials/header.php' );

include( WEB_ROOT.'/views/partials/menu.php' );
?>

<main>
    <section id="landing">
        <div class="container landing-inner">
            <h1><span id="first-name">Ryan</span>Robinson</h1>
            <p>Hello, I am web developer living in Toronto with a passion for coffee, code and congeniality.</p>
            <a href="#work" class="work-btn btn">See Work</a>
            <a href="/views/contact.php" class="work-btn btn">Contact Me</a>
        </div>
    </section>
    <!-- Work Section -->
    <section id="work" class="work">
        <h2>My Work</h2>
        <!-- 1st Project -->
        <div class="work-1">
            <div class="card">
                <a href="views/globalmedic.php"><div class="work-display"></div></a>
                <div class="work-desc">
                    <h3>GlobalMedic</h3>
                    <p>A custom WordPress site for a humanitarian relief organization.</p>
                </div>
                <div class="work-details1">
                    <a href="views/globalmedic.php" class="work-link">More Info</a>
                </div>
            </div>    
        </div>
        <!-- 2nd Project -->
        <div class="work-2">
            <div class="card">
                <a href="views/stat-map.php"><div class="work-display"></div></a>
                <div class="work-desc">
                    <h3>Stats Map</h3>
                    <p>An interactive map to explore the world through weather and statistics.</p>
                </div>
                <div class="work-details2">
                    <a href="views/stat-map.php" class="work-link">More Info</a>
                </div>
            </div>
        </div>
        <!-- 3rd Project -->
        <div class="work-3">
            <div class="card">
                <a href="views/hidden-stockpile.php"><div class="work-display"></div></a>
                <div class="work-desc">
                    <h3>Hidden Stockpile</h3>
                    <p>A Magic: The Gathering card valuating and price tracking tool.</p>
                </div>
                <div class="work-details3">
                    <a href="views/hidden-stockpile.php" class="work-link">More Info</a>
                </div>  
            </div>  
        </div>
        <!-- 4th Project -->
        <div class="work-4">
            <div class="card">
                <a href="views/humbie-helper.php"><div class="work-display"></div></a>
                <div class="work-desc">
                    <h3>Humbie Helper</h3>
                    <p>An organization and collaborating tool designed for sutdents of the web development program.</p>
                </div>
                <div class="work-details4">
                    <a href="views/humbie-helper.php" class="work-link">More Info</a>
                </div>
            </div>
        </div>
        <!-- 5th Project -->          
        <div class="work-5">
            <div class="card">
                <a href="http://ryerob.com/restaurant"><div class="work-display"></div></a>
                <div class="work-desc">
                    <h3>Restaraunt Site</h3>
                    <p>My first team project. A website for a fictional burger restaraunt.</p>
                </div>
                <div class="work-details5">
                    <a href="views/restaurant.php" class="work-link">More Info</a>
                </div>
            </div>
        </div>
        <!-- 6th Project -->  
        <div class="work-6">
            <div class="card">
                <a href="http://ryerob.com/restaurant"><div class="work-display"></div></a>
                <div class="work-desc">
                    <h3>Trillium College</h3>
                    <p>Designing a page to be displayed on screens across campus.</p>
                </div>
                <div class="work-details6">
                    <p class="work-link">Coming Soon</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about">
        <div class="about-wrap">
            <h2>About</h2>
            <p>I've always been a problem solver. I love taking things apart to see how they work, 
                and I can never get rid of something broken until I have tried everything to fix it. 
                I have years of debugging experience in multiple industries and I am motivated by difficult 
                problems and learning new things.
            </p>
            <p>
                If you have an opportunity that you think I would be a good fit for, I would love to talk about 
                it and can be reached at the e-mail below, or by filling out 
                <a class="form-link" href="/views/contact.php">this form.</a>
            </p>
            <div class="contact-info">
                <a href="mailto:ryan@ryanrobinson.com" class="form-link">ryan@ryanrobinson.com</a>
            </div>
        </div>
    </section>
</main>
