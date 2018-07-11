<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <title>Jonathan's portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>

    <body>
       <header>
            <figure class="snip1091">
                <figcaption>
                    <h2>Jonathan  <span>NICOLAS</span></h2>
                    <p>Welcome on my portfolio page.</p>
                </figcaption>
            </figure>
       </header>

       <article class="presentation">
            <h2>About me</h2>
            @include('presentation')
       </article>

       <figure class="space"></figure>

       <article class="projets">
           <h2>Projects</h2>
            @include('projects')
       </article>

       <figure class="mountain"></figure>

       <article class="skills">
           <h2>Skills</h2>
           @include('skills')
       </article>

       <figure class="stone"></figure>

       <article class="formation">
           <h2>Training</h2>
           @include('training')
       </article>

       <figure class="bretagne"></figure>

       <article class="contact">
           <h2>If you want contact me</h2>
           @include('contact')
       </article>
    </body>
</html>
