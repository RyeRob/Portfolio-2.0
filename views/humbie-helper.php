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
                This was the second large project that I worked with a team to complete. We brainstormed ideas and came up with Humbie Helper which is an application 
                designed to help students of the web development program co-ordinate with classmates and stay organized. There is a complete feature list on the GitHub 
                page of this project. I developed the announcements, file upload and motivational quotes. If you want to try it you can login with 
                the username: qwerty and password: qwerty.
            </p>
            <img class="showcase-img" src="../includes/assets/HumbieHelperProjects.png" alt="screenshot of a list of projects">
            <p>
                The announcements section is specific to each project and is the main form of group communication in the application. Any student part of a project can add, 
                edit and delete announcements made by themsevles to this section.Announcements are stored in the database using PDO. (Database ERD can be found here 
                <a href="../includes/assets/humbiehelper-erd.pdf">here</a>)
            </p>
            <img class="showcase-img" src="../includes/assets/HumbieHelperAnnouncements.png" alt="screen shot of the applications text search">
            <p>
                Motivational quotes appear at random in a dismissible banner when a user is logged in and on the projects page. The quotes are 
                stored in an MySQL database and retrieved using the RAND function with a limit of 1.
            </p>
            <img class="showcase-img" src="../includes/assets/HumbieHelperFiles.png" alt="screen shot of the applications text search">
            <p>
                The file upload feature stores files in a folder on the server and creates a corresponding record of that file 
                in the database. When the file is renamed or deleted the database record is updated or removed. There is validation that checks the 
                extension of the file that a user attempts to upload to make sure it matches one on a list.
            </p>
        </div>
    </article>
</main>