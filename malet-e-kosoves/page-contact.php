<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<div id="content" class="site-content">
    <main id="main" class="site-main">
        <section class="contact-hero">
            <div class="container">
                <h1>Kontakt</h1>
                <p>Na shkruani — do të përpiqemi të përgjigjemi sa më shpejt të jetë e mundur.</p>
            </div>
        </section>

        <section class="contact-form-section">
            <div class="container">
                <form action="" method="post" class="contact-form">
                    <p>
                        <label for="name">Emri</label><br>
                        <input type="text" id="name" name="name" required>
                    </p>
                    <p>
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="email" required>
                    </p>
                    <p>
                        <label for="subject">Subjekti</label><br>
                        <input type="text" id="subject" name="subject">
                    </p>
                    <p>
                        <label for="message">Mesazhi</label><br>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </p>
                    <p>
                        <input type="submit" name="submit_contact" value="Dërgo Mesazhin">
                    </p>
                </form>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>