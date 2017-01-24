<!--HEADER-->
<?php include "view/includes/head.php";
      include "view/includes/component/navigation-menu.php"; ?>
<!--END HEADER-->

<div class="Content-wrapper"> <!--WRAP THE WHOLE CONTENT OF BODY -->
    <div id="Top-content" class="top-content">

        <div class="overlay text-uppercase">
            <div class="logo"><img src="view/assets/images/logo.png" alt="Eye logo" width="75px" height="55px"></div>
            <h2>Alice Devaux</h2><span>Art Director</span>
        </div>

        <header id="Carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel" data-slide-to="1"></li>
                <li data-target="#Carousel" data-slide-to="2"></li>
            </ol>


            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('view/assets/images/image1.jpg');"></div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('view/assets/images/Image2.jpg');"></div>
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('view/assets/images/image3.jpg');"></div>
                </div>
        </header>
    </div>

    <div id="Middle-content" class="middle-content"> <!--PORTFOLIO GOES INSIDE-->
        <div class="row no-gutter"><!--NO GUTTER-->
            <ul id="Portfolio" class="gridder">
                <li class="gridder-list" data-griddercontent="#gridder-content-1"><div class="overlay-info"><div class="info-box"><h1 class="info">Sweet & Sour</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/1.jpg" alt="Sweet & Sour"></li>
                <li class="gridder-list" data-griddercontent="#gridder-content-2"><div class="overlay-info"><div class="info-box"><h1 class="info">Paris Ville Monde</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/2.jpg" alt="Paris Ville-monde"></li>
                <li class="gridder-list" data-griddercontent="#gridder-content-3"><div class="overlay-info"><div class="info-box"><h1 class="info">War</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/3.jpg" alt="War"></li>
                <li class="gridder-list" data-griddercontent="#gridder-content-4"><div class="overlay-info"><div class="info-box"><h1 class="info">Livre d'Artiste</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/4.jpg" alt="Livre Artiste"></li>
                <li class="gridder-list" data-griddercontent="#gridder-content-5"><div class="overlay-info"><div class="info-box"><h1 class="info">Petit Paris</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/5.jpg" alt="Petit Paris"></li>
                <li class="gridder-list" data-griddercontent="#gridder-content-6"><div class="overlay-info"><div class="info-box"><h1 class="info">Portrait</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/6.jpg" alt="Portrait"></li>
                <li class="gridder-list" data-griddercontent="#gridder-content-7"><div class="overlay-info"><div class="info-box"><h1 class="info">Croquis Fanzine</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/7.jpg" alt="Croquis Fanzine"></li>
                <li class="gridder-list" data-griddercontent="#gridder-content-8"><div class="overlay-info"><div class="info-box"><h1 class="info">Nude</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/8.jpg" alt="Nude"></li>
                <li class="gridder-list" data-griddercontent="#gridder-content-9"><div class="overlay-info"><div class="info-box"><h1 class="info">Ando</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/9.jpg" alt="Ando"></li>
                <li class="gridder-list" data-griddercontent="#gridder-content-10"><div class="overlay-info"><div class="info-box"><h1 class="info">Nature Morte Morbide</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/10.jpg" alt="Nature Morte Morbide"></li>
                <li class="gridder-list" data-griddercontent="#gridder-content-11"><div class="overlay-info"><div class="info-box"><h1 class="info">Barbe Bleue</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/11.jpg" alt="Barbe Bleue"></li>
                <li class="gridder-list" data-griddercontent="#gridder-content-12"><div class="overlay-info"><div class="info-box"><h1 class="info">Arte Café</h1></div></div><div class="mask"></div><img src="view/assets/images/Porfolio/12.jpg" alt="Arte Cafe"></li>
            </ul><!--End Portfolio thumbnails-->

            <div id="gridder-content-1" class="gridder-content">
                <div class="col-md-10 col-md-offset-1">
                    <div class="videoWrapper">
                        <iframe width="100%" height="" src="https://player.vimeo.com/video/129651272" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div id="gridder-content-2" class="gridder-content">
                <div class="col-md-6 col-md-offset-3">
                <img src="view/assets/images/Paris-Ville-Monde/Alice_DEVAUX_Parisvillemonde.jpg" alt="Paris-Ville-Monde">
                <img src="view/assets/images/Paris-Ville-Monde/ParisVilleMonde1.jpg" alt="Paris-Ville-Monde">
                </div>
            </div>

            <div id="gridder-content-3" class="gridder-content">
                <div class="col-md-5 col-md-offset-1">
                <img src="view/assets/images/Guerre/1.jpg" alt="War">
                <img src="view/assets/images/Guerre/2.jpg" alt="War">
                <img src="view/assets/images/Guerre/3.jpg" alt="War">
              </div>
                <div class="col-md-5">
                <img src="view/assets/images/Guerre/4.jpg" alt="War">
                <img src="view/assets/images/Guerre/5.jpg" alt="War">
                <img src="view/assets/images/Guerre/6.jpg" alt="War">
              </div>
                <div class="col-md-10 col-md-offset-1">
                <div class="videoWrapper">
                    <iframe width="100%" height="" src="https://www.youtube.com/embed/QPj0szoe2gA" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div id="gridder-content-4" class="gridder-content">
                <div class="description col-md-5 col-md-offset-1"><p>Livre d'artiste composé des créations d'Emma Bedos, Alice Mesguich, Florence Cousergue et moi-même. Nous voulions une mise en page simple pour les images imprimées sur le livre avec, scotchés par dessus, les citations auxquelles les oeuvres font référence. Ce système permet, au delà du livre unique, au lecteur de disposer des citations qu'il peut déplacer ou enlever comme bon lui semble puisque grâce à des petits numéros cachés dans l'image il pourra toujours faire le lien entre les deux.</br></br>

                        Exhibition book with mix creations from Emma Bedos, Alice Mesguich, Florence Cousergue and myself. The idea consisted in having a basic layout for the images with taped removable papers for the quotes that inspired the image. We delibarately chose absurd quotes and the tape allows the reader to remove the paper as he wishes. A little number is hidden in each image if you want to put it back </p></div>
                <div class="col-md-6 col-md-offset-3">
                <img src="view/assets/images/Livre-Artiste/LivreA-1.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-2.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-3.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-4.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-5.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-6.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-7.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-8.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-9.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-10.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-11.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-12.jpg" alt="Livre-Artiste">
                <img src="view/assets/images/Livre-Artiste/LivreA-13.jpg" alt="Livre-Artiste">
                </div>
            </div>

            <div id="gridder-content-5" class="gridder-content">

                <div class="description col-md-5 col-md-offset-1"><p>Petit Paris est une collection de guides de Paris par arrondissement pour les 8-12 ans. En 20 volumes, l'enfant découvre l'histoire de la capitale et ses monuments à travers des anecdotes inédites.

                        Comment l'obélisque est-elle arrivée à Paris ?
                        Que représentent les sculptures de la fontaine Stravinsky ?
                        Quelle est la vraie histoire du bossu de Notre Dame ?
                        Pourquoi le Jardin des Tuileries d'appelle-t-il ainsi ?
                        Les réponses dans le Petit Paris 1er.</br></br>

                        Petit Paris is a collection of guides by districts for children from 8 to 12. In 20 volumes discover the history of the capital and its monuments through amazing anecdotes.

                        How did the obelisk came to Paris ?
                        What does the sculptures of the Stravinsky fountain represents ?
                        What is the real story of the Hunchback of Notre-Dame ?
                        Why is the Jardin des Tuileries called this way ?
                        The answers in Petit Paris 1er</p></div>
               <div class="thumbnails col-md-10 col-md-offset-1">
                    <div class="column col-md-6" >
                        <img src="view/assets/images/Petit-Paris/New1.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New3.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New5.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New7.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New9.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New11.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New13.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New15.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New17.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New23.jpg" alt="Petit Paris">
                    </div>
                    <div class="column col-md-6">
                        <img src="view/assets/images/Petit-Paris/New2.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New4.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New6.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New8.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New10.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New14.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New16.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New18.jpg" alt="Petit Paris">
                        <img src="view/assets/images/Petit-Paris/New19.jpg" alt="Petit Paris">
                    </div>
                </div>
            </div>

            <div id="gridder-content-6" class="gridder-content">
                <div class="col-md-6 col-md-offset-3">
                <img src="view/assets/images/DEVAUX_Alice_DA4.jpg" alt="Photo">
                </div>
            </div>

            <div id="gridder-content-7" class="gridder-content">
                <div class="col-md-6 col-md-offset-3">
                <img src="view/assets/images/Croquis-Fanzine/BOOKpage1.jpg" alt="Croquie Fanzine">
                <img src="view/assets/images/Croquis-Fanzine/BOOKpage2.jpg" alt="Croquie Fanzine">
                <img src="view/assets/images/Croquis-Fanzine/BOOKpage3.jpg" alt="Croquie Fanzine">
                <img src="view/assets/images/Croquis-Fanzine/BOOKpage4.jpg" alt="Croquie Fanzine">
                <img src="view/assets/images/Croquis-Fanzine/BOOKpage5.jpg" alt="Croquie Fanzine">
                <img src="view/assets/images/Croquis-Fanzine/BOOKpage6.jpg" alt="Croquie Fanzine">
                </div>
            </div>

            <div id="gridder-content-8" class="gridder-content">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-6">
                        <img src="view/assets/images/Nus/23042012-IMG_2142.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2160.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2177.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2214.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2229.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2289.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2290.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2296.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2309.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2331.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2336.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2359.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2361.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2362.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2366.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2367.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2369.jpg" alt="Nue">
                    </div>
                    <div class="col-md-6">
                        <img src="view/assets/images/Nus/23042012-IMG_2378.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2493.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2504.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2522.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2535.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2583.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2646.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2647.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2650.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2675.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2683.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2739.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2774.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2798.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2817.jpg" alt="Nue">
                        <img src="view/assets/images/Nus/23042012-IMG_2867.jpg" alt="Nue">
                    </div>
                </div>
            </div>

            <div id="gridder-content-9" class="gridder-content">
                <div class="col-md-6 col-md-offset-3">
                <img src="view/assets/images/Ando/AfficheFINALE2.jpg" alt="Ando">
            </div>
            </div>

            <div id="gridder-content-10" class="gridder-content">
                <div class="col-md-6 col-md-offset-3">
                <img src="view/assets/images/morbide/DEVAUX_Alice_DA4 - copie.jpg" alt="Morbide">
                </div>
            </div>

            <div id="gridder-content-11" class="gridder-content">
                <div class="description col-md-5 col-md-offset-1"><p>Livre Illustré du conte de Charles Perrault, Barbe Bleue.</br></br>

                        Barbe Bleue is a french tale written by Charles Perrault.
                        We follow the story through Barbe Bleu's beard; its color changing as the story's becoming darker.</p></div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-6">
                        <img src="view/assets/images/Barbe-Bleue/BBPart1.jpg" alt="Barbe bleue">
                        <img src="view/assets/images/Barbe-Bleue/BBPart3.jpg" alt="Barbe bleue">
                        <img src="view/assets/images/Barbe-Bleue/BBPart5.jpg" alt="Barbe bleue">
                        <img src="view/assets/images/Barbe-Bleue/BBPart7.jpg" alt="Barbe bleue">
                        <img src="view/assets/images/Barbe-Bleue/BBPart9.jpg" alt="Barbe bleue">
                    </div>
                    <div class="col-md-6">
                        <img src="view/assets/images/Barbe-Bleue/BBPart2.jpg" alt="Barbe bleue">
                        <img src="view/assets/images/Barbe-Bleue/BBPart4.jpg" alt="Barbe bleue">
                        <img src="view/assets/images/Barbe-Bleue/BBPart6.jpg" alt="Barbe bleue">
                        <img src="view/assets/images/Barbe-Bleue/BBPart8.jpg" alt="Barbe bleue">
                        <img src="view/assets/images/Barbe-Bleue/BBPart10.jpg" alt="Barbe bleue">
                    </div>
                </div>
            </div>

            <div id="gridder-content-12" class="gridder-content">
                <div class="description col-md-5 col-md-offset-1"><p>Arte Café est une branche fictive de la chaine Arte dont le fameux slogan est "La télé qui vous allume". En jouant sur le mot "allumer" j'ai imaginé une campagne de publicité avec des extraits de films ou les acteurs boivent du café de manière "sensuelle" avec le clin d'oeil à la fin "le café qui vous allume". L'idée est de mélanger le côté culturel des films, le café et la séduction sur laquelle joue la chaine.</br></br>

                        Les extraits sont du film "Coffee and Cigarettes" </br></br>

                        The exercice was to take an existing brand and imagine a new branch. I took the TV channel ARTE which slogan is "La télé qui vous allume", ("the TV that turns you on"), and imagined that they would create a coffee. I played on the meaning of "turning someone on" and imagined an advertising campaign with extracts of movies where people would drink coffee in a sensual way. And at the end the logo appears with the famous slogan "the coffee that turns you on".</br></br>

                        The extracts are from "Coffee and Cigarettes"</p></div>
                <div class="col-md-6 col-md-offset-3">
                <img src="view/assets/images/Arte/arte1.jpg" alt="Arte Café">
                <img src="view/assets/images/Arte/arte2.jpg" alt="Arte Café">
                <img src="view/assets/images/Arte/arte3.jpg" alt="Arte Café">
                <img src="view/assets/images/Arte/arte4.jpg" alt="Arte Café">
                <img src="view/assets/images/Arte/arte5.jpg" alt="Arte Café">
                <img src="view/assets/images/Arte/arte6.jpg" alt="Arte Café">
                <img src="view/assets/images/Arte/arte10.jpg" alt="Arte Café">
                <img src="view/assets/images/Arte/arte12.jpg" alt="Arte Café">
                <img src="view/assets/images/Arte/arte12.jpg" alt="Arte Café">
                </div>
            </div>

        </div><!--END ROW NO GUTTER-->

    </div><!--END middle-content-->


      <div id="Bottom-content" class="bottom-content">
        <div class="row no-gutter">
          <div class="cv col-md-8 col-md-offset-1">
            <img src="view\assets\images\CV.jpg" alt="Curriculum vitae">
          </div>
          <div class="footer text-center col-md-12">
            <div class="end-icon">
              <img src="view/assets/images/logo2.png" width="75px" height="55px" alt="">
            </div>
          </div>
        </div>
      </div>


<!--FOOT-->
<?php include "view/includes/foot.php"; ?>
<!--END FOOT-->
