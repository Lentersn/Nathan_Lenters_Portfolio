<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume | Nathan Lenters</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'nav.php'; ?>

<main class="container">
    <section class="page-header">
        <h1>Resume</h1>
        <p>Experience, education, skills, and a downloadable copy of my resume.</p>

        <div class="buttons">
            <a class="button primary" href="documents/resume.pdf" download>Download Resume</a>
        </div>
    </section>

    <section class="section">
        <iframe
            class="resume-frame"
            src="documents/resume.pdf"
            title="Nathan Lenters Resume">
        </iframe>
    </section>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
