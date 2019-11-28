<?php 
define( 'WEB_ROOT', $_SERVER['DOCUMENT_ROOT'] );
include( WEB_ROOT.'/views/partials/header.php' );
include( WEB_ROOT.'/views/partials/menu.php' );
?>
<link rel="stylesheet" href="./../includes/styles/case-study.css">
<main class="wrap">
    <article id="case-study">
        <header>
            <h1>Humbie Helper</h1>
            <h2>HTML, CSS, SASS, Bootstrap, PHP, MySQL</h2>
        </header>
        <div class="case-content">
            <ul>
                <li><a href="https://humbiehelper.skriptkaiju.com/">Live Site</a></li>
                <li><a href="https://github.com/porkalmighty/humbie-helper">GitHub Repository</a></li>
            </ul>
            <p>
                This was the second large project that I worked with a team to complete. We brainstormed 
                ideas and came up with Humbie Helper which is an application design to help students of the 
                Web Development program co-ordinate with classmates and stay organized.There is a complete feature list on the GitHub page of this project. I developed the announcements 
                feature, the file upload feature and the motivational quotes feature.
            </p>
            <img src="../includes/assets/HumbieHelperProjects.png" alt="screen shot of the applications text search">
            <p>
                This was the second large project that I worked with a team to complete. We brainstormed 
                ideas and came up with Humbie Helper which is an application design to help students of the 
                Web Development program co-ordinate with classmates and stay organized.There is a complete feature 
                list on the GitHub page of this project. I developed the announcements feature, the file upload feature 
                and the motivational quotes feature
            </p>
            <img src="../includes/assets/HumbieHelperAnnouncements.png" alt="screen shot of the applications text search">
            <p>
                The announcements feature allows students to add announcements to a project and all the other 
                students in that project will see them along with the date and time the announcement was made. 
                Announcements are stored in the database which I helped to design. (ERD <a href="../includes/assets/humbiehelper-erd.pdf">here</a>)
            </p>
            <img src="../includes/assets/HumbieHelperFiles.png" alt="screen shot of the applications text search">
            <p>
                Motivational quotes takes the form of a random quote that appears in a dismissible banner when a 
                user is logged in on the project view. The quotes are stored in the database retrieved using the RAND 
                function with a limit of 1.The file upload feature stored the files in a folder on the server and creates a corresponding record of that file 
                in the database which is modified or delete when the file is modified or deleted. There is validation that checks the 
                extension of the file that a user attempts to upload to make sure it matches one on a list.
            </p>
        </div>
    </article>
</main>