<?php
include( WEB_ROOT.'/views/partials/header.php' );

include( WEB_ROOT.'/views/partials/menu.php' );
?>
<main>
    <section id="landing">
        <div class="container landing-inner">
            <h1><span id="first-name">Ryan</span>Robinson</h1>
            <p>Web Developer Based in Toronto</p>
            <a href="#work" class="btn">See Work</a>
            <a href="/views/contact.php" class="work-btn btn">Contact Me</a>
        </div>
    </section>
    <!-- Work Section -->
    <section id="work" class="work">
        <h2>My Work</h2>
        <!-- 1st Project -->
        <div class="work-1">
            <div class="card">
                <div class="work-display" title="GlobalMedic"></div>
                <div class="work-desc">
                    <h3><a href="views/globalmedic.php" class="work-link">GlobalMedic</a></h3>
                    <p>A custom WordPress site for a disaster relief  and humanitarian aid organization.</p>
                </div>
            </div>    
        </div>
        <!-- 2nd Project -->
        <div class="work-2">
            <div class="card">
                <div class="work-display" title="Stats Map"></div>
                <div class="work-desc">
                    <h3><a href="views/stat-map.php" class="work-link">Stats Map</a></h3>
                    <p>An interactive map to explore the world through weather and statistics.</p>
                </div>
            </div>
        </div>
        <!-- 3rd Project -->
        <div class="work-3">
            <div class="card">
                <div class="work-display"></div>
                <div class="work-desc">
                    <h3><a href="views/humbie-helper.php" class="work-link">Humbie Helper</a></h3>
                    <p>An organization and collaborating tool designed for sutdents of the web development program.</p>
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
                <a href="mailto:ryan@ryanrobinson.dev" class="form-link">ryan@ryanrobinson.dev</a>
            </div>
        </div>
    </section>
</main>
