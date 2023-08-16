<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="index.php" class="logo">UserAuth</a>

            <ul class="nav-list">
                <li class="nav-list-item">
                    <button id="signin-cta">Sign in</button>
                </li>
                <li class="nav-list-item">
                    <button id="signup-cta">Sign up</button>
                </li>
                <li class="nav-list-item" hidden>
                    <button class="logout-cta">Log out</button>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1 class="hero-title">Welcome to UserAuth</h1>
            <p class="hero-text">
                A user authentication system made with PHP, MySQL and jQuery.
            </p>
        </section>

        <section class="signin-section" style="display: none;">
            <h2 class="signin-title">Sign in</h2>
            <form id="signin-form">
                <fieldset>
                    <legend>Username</legend>
                    <input type="text" name="username" id="signin-username" placeholder="Username">
                </fieldset>
                <fieldset>
                    <legend>Password</legend>
                    <input type="password" name="password" id="signin-password" placeholder="Password">
                </fieldset>
                <button type="submit" class="signin-submit">Sign in</button>
            </form>
        </section>

        <section class="signup-section" style="display: none;">
            <h2 class="signup-title">Sign up</h2>
            <form id="signup-form">
                <fieldset>
                    <legend>Name</legend>
                    <input type="text" name="name" id="signup-name" placeholder="Name">
                </fieldset>
                <fieldset>
                    <legend>Username</legend>
                    <input type="text" name="username" id="signup-username" placeholder="Username">
                </fieldset>
                <fieldset>
                    <legend>Password</legend>
                    <input type="password" name="password" id="signup-password" placeholder="Password">
                </fieldset>
                <fieldset>
                    <legend>Confirm password</legend>
                    <input type="password" name="confirm-password" id="signup-confirm-password" placeholder="Confirm password">
                </fieldset>
                <button type="submit" class="signup-submit">Sign up</button>
            </form>
        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>

</html>