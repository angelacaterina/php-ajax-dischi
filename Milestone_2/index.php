<!-- Seconda Milestone:
Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VueJS. -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-ajax-dischi 2</title>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script> -->
        
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="dist/css/style.css">
        <!-- Axios DCN -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </head>
    <body>
        <div id="app">
            <header>
            <div class="container">
                <img src="dist/img/logo.png" alt="logo">
            </div><!-- /.container -->
            </header>
            <!-- /header -->
            <main id="main_content">
                <section>
                    <h2>VUE</h2>
                    <div class="cds-container container">
                        <div class="cd" v-for="album in albumList">
                            <img :src="album.poster" alt="">
                            <h3>{{album.title}}</h3>
                            <span class="author">{{album.author}}</span>
                            <span class="year">{{album.year}}</span>
                        </div><!-- /.cd -->
                    </div><!-- /.cds-container container -->
                </section>

                <section>
                    <h2>JS</h2>
                    <div class="cds-container container albums_api">

                    </div><!-- /.cds-container container -->
                </section>
                
            </main>
        </div>
        <!-- /#app -->

        <!-- Jq -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <!-- VUE  -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <!-- Js -->
        <script src="dist/js/main.js" charset="utf-8"></script> <!-- utilizzato Vue -->
        <script src="dist/js/main2.js" charset="utf-8"></script> <!-- utilizzato Js -->
    </body>
</html>