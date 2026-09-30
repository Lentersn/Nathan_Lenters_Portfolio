<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Nathan Lenters</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'nav.php'; ?>

<main class="container">
    <section class="page-header">
        <h1>Projects</h1>
        <p>A selection of programming, AI, data mining, and systems-related projects.</p>
    </section>

    <section class="section" id="cuanswers">
        <div class="card">
            <h3>CU*Answers AI Knowledge Base / Web Crawler</h3>
            <p>
                This GVSU capstone project involved creating several web crawlers to collect
                CU*Answers knowledge-base documentation. The project collected approximately
                10,000 documentation pages and prepared the information for future AI applications.
            </p>
            <p>
                The project included cleaning and organizing collected information, creating
                embeddings, storing them for semantic search, and retrieving relevant information
                using similarity matching.
            </p>
            <div class="tags">
                <span class="tag">JavaScript</span>
                <span class="tag">Crawlee</span>
                <span class="tag">Playwright</span>
                <span class="tag">Python</span>
                <span class="tag">FAISS</span>
                <span class="tag">AI</span>
            </div>
        </div>
    </section>

    <section class="section" id="language">
        <div class="card">
            <h3>Custom Programming Language</h3>
            <p>
                Worked collaboratively on a custom programming language written in C.
                Starting with provided lexer, parser, and graphics code, we implemented and
                expanded the language's commands and functionality.
            </p>
            <p>
                Our work included commands for moving and rotating the drawing cursor,
                controlling the pen, changing colors, clearing the screen, positioning the cursor,
                retrieving its location, working with variables, and saving drawings as BMP images.
            </p>
            <div class="tags">
                <span class="tag">C</span>
                <span class="tag">Lex</span>
                <span class="tag">Yacc</span>
                <span class="tag">SDL</span>
            </div>
            <div class="buttons">
                <a class="button primary" href="https://github.com/Lentersn/Creating_Lang" target="_blank" rel="noopener">
                    View on GitHub
                </a>
            </div>
        </div>
    </section>

    <section class="section" id="python">
        <div class="grid">
            <article class="card">
                <h3>Python Dungeon Crawler</h3>
                <p>
                    A Python programming project focused on interactive gameplay,
                    game logic, and object-oriented programming concepts.
                </p>
                <div class="tags">
                    <span class="tag">Python</span>
                    <span class="tag">OOP</span>
                </div>
            </article>

            <article class="card">
                <h3>AI Galaga</h3>
                <p>
                    A retro-style Galaga application created with Python and Pygame,
                    including a menu screen, statistics, and achievements.
                </p>
                <div class="tags">
                    <span class="tag">Python</span>
                    <span class="tag">Pygame</span>
                </div>
            </article>

            <article class="card">
                <h3>Customer Segmentation</h3>
                <p>
                    A data mining project using the Mall Customers dataset to explore
                    customer segmentation with K-Means and K-Medoids clustering.
                </p>
                <div class="tags">
                    <span class="tag">Python</span>
                    <span class="tag">K-Means</span>
                    <span class="tag">K-Medoids</span>
                    <span class="tag">Data Mining</span>
                </div>
            </article>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
