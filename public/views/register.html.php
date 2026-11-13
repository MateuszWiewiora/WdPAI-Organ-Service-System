<?php $stylesheets = ['/css/login.css']; ?>

<main>
    <form id="register" method="post" action="/register">
        <h1>Rejestracja</h1>

        <label for="email"><i class="fa-solid fa-at"></i> Email:</label>
        <input type="email" id="email" name="myemail" required>

        <label for="password"><i class="fa-solid fa-key"></i> Hasło:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password"><i class="fa-solid fa-key"></i> Potwierdź hasło:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit">Zarejestruj się</button>
    </form>
</main>
