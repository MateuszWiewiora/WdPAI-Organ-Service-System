<?php $stylesheets = ['/css/about.css']; ?>

<div class="about">
    <h1 class="about__title">O aplikacji</h1>

    <p class="about__description">
        To edukacyjna aplikacja webowa napisana w czystym PHP 8.3.
    </p>

    <section class="about__contacts">
        <h2 class="about__heading">Kontakt</h2>

        <ul class="about__contact-list">
            <?php foreach ($contacts as $contact): ?>
                <li class="about__contact-card">
                    <p>
                        <?= htmlspecialchars((string) $contact['firstName'], ENT_QUOTES, 'UTF-8') ?>
                        <?= htmlspecialchars((string) $contact['lastName'], ENT_QUOTES, 'UTF-8') ?>
                    </p>
                    <a
                        class="about__link"
                        href="mailto:<?= htmlspecialchars((string) $contact['email'], ENT_QUOTES, 'UTF-8') ?>"
                    >
                        <?= htmlspecialchars((string) $contact['email'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</div>
