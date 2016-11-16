<!DOCTYPE html>

<html lang="fr">
    @include("includes.head")

    <body>
        <main id="main--container">

            @include("includes.header")

            @yield("content")

            @include("includes.footer")
        </main>
        <script src="assets/js/app.js"></script>
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    </body>
</html>