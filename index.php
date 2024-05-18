<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Application</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Azure App Licenta</h1>
        <nav>
            <ul>
                <li><a href="#home">Acasa</a></li>
                <li><a href="#about">Despre</a></li>
                <li><a href="#services">Servicii</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Acasa</h2>
            <p>Sectiunea Acasa</p>
        </section>
        <section id="about">
            <h2>Despre</h2>
            <p>Sectiunea Despre</p>
        </section>
        <section id="services">
            <h2>Servicii</h2>
            <p>Sectiunea Servicii.</p>
        </section>
        <section id="contact">
            <h2>Contact</h2>
            <p>Sectiunea Contact</p>
            <?php
                // Example of embedding PHP in HTML
                $email = "contact@mywebapp.com";
                echo "<p>Email us at: <a href='mailto:$email'>$email</a></p>";
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My web app Azure.</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
