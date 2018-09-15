<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Jonathan's portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="base">
            <div class="parallax">
            <figure class="snip1190">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample64.jpg" alt="sample64" style="visibility: hidden"/>
                <figcaption>
                    <div class="square">
                    <div></div>
                    </div>
                    <h2>Jonathan<span> NICOLAS</span></h2>
                    <p>Junior Web Developper</p>
                </figcaption>
            </figure>
            </div>

            <article class="presentation">
                @include('presentation')
            </article>
           
            <div class="parallax2"></div>

            <article class="skills">
                @include('skills')
            </article>

            <div class="parallax3"></div>         

            <article>
                @include('projects')
            </article>
            
            <div class="parallax4"></div>
            
            <article>
                @include('training')
            </article>

            <div class="parallax5"></div>

            <section>
                @include('contact')
            </section>
       
    </body>
</html>
