<<<<<<< HEAD
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav>
    <div class="nav-inner">
        <a class="logo" href="index.php">Nathan Lenters</a>

        <div class="nav-links">
            <a class="<?= $currentPage === 'about.php' ? 'active' : '' ?>" href="about.php">About</a>
            <a class="<?= $currentPage === 'projects.php' ? 'active' : '' ?>" href="projects.php">Projects</a>
            <a class="<?= $currentPage === 'resume.php' ? 'active' : '' ?>" href="resume.php">Resume</a>
            <a class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact</a>
        </div>
    </div>
=======
<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="projects.php">Projects</a>
    <a href="resume.php">Resume</a>
    <a href="contact.php">Contact</a>
>>>>>>> parent of 090ca58 (changed layout)
</nav>
