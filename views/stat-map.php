<?php 
define( 'WEB_ROOT', $_SERVER['DOCUMENT_ROOT'] );
include( WEB_ROOT.'/views/partials/header.php' );
include( WEB_ROOT.'/views/partials/menu.php' );
?>
<link rel="stylesheet" href="./../includes/styles/case-study.css">
<main class="wrap">
    <article id="case-study">
        <header>
            <h1>Statistics Map Details</h1>
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
                in the nearest city.
            </p>
            <h3 class="learned-heading">What I learned</h3>
            <ul>
                <li>React.js and ES6 basics</li>
                <li>How to work with API's and JSON data</li>
                <li>Intergrating open source projects into my own projects</li>
            </ul>
            <img src="../includes/assets/stat-map1.png" alt="screen shot of the application with title and map">
            <p>
                I started out by ensuring I was able to get the information I wanted from the APIs, so I implemented text 
                search functionality. This was to test the API calls I was making. After I got this working, I integrated
                the map and began working on being able to drop a pin to get location information. I used a package called 
                google-maps-react (linked to on the GitHub of this project) to display the map. Going through the documentation 
                I figured out how to add markers to the map and get the latitude and longitude from the placed marker. After that 
                it was a matter of translating the latitude and longitude to a city and country name pair. For this I used Google’s
                Geocode API which then passes the country and city name to the other APIs to get the weather of the nearest city and
                statistics for that country.
            </p>
            <img src="../includes/assets/stat-map2.png" alt="screen shot with results and map">
        </div>
    </article>
</main>