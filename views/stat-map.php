<?php 
define( 'WEB_ROOT', $_SERVER['DOCUMENT_ROOT'] );
include( WEB_ROOT.'/views/partials/header.php' );
include( WEB_ROOT.'/views/partials/menu.php' );
?>
<link rel="stylesheet" href="./../includes/styles/case-study.css">
<main class="wrap">
    <article id="case-study">
        <header>
            <h1>Statistics Map</h1>
            <h2>React.js and Netlify</h2>
        </header>
        <div class="case-content">
            <ul>
                <li><a href="https://stats-map.netlify.com/">Live Site</a></li>
                <li><a href="https://github.com/RyeRob/stats-map">GitHub Repository</a></li>
            </ul>
            <p>
                This is an individual academic project which I was to utilize multiple APIs to make 
                an application of my choice. I chose to make an interactive map where a user can 
                click and see information about the country they clicked on and the current weather 
                in the nearest city. This could help people when they're traveling especially once I add things 
                like which language is predominantly spoken in an area or which currency they use.
            </p>
            <img src="../includes/assets/stat-map1.png" class="showcase-img" alt="screen shot of the application with title and map">
            <p>
                I started out by ensuring I was able to get the information I wanted from the APIs, so I implemented text 
                search that would make a call to the weather API and the country statistics API based on what was entered. Once I got that working, I integrated
                the map and began working on being able to drop a pin to get location information. I used a package called 
                google-maps-react (linked to on the GitHub of this project) to display the map. Reading the documentation 
                I figured out how to add markers to the map and get the latitude and longitude from a placed marker. After that 
                it was a matter of translating the latitude and longitude to a city and country key value pairs. For this I used Google’s
                Geocode API which gives the country and city name so I can use it to get information from the other two APIs used.
            </p>
            <img src="../includes/assets/stat-map2.png" class="showcase-img" alt="screen shot of the application with results and map">
        </div>
    </article>
</main>