<?php
// un tableau avec les titres des posts
$title= array('Vins','Bière ','Spiritueux','Sans-alcool');
$img= array('vineRound.png','beerRound.png','spiritueuxRound.png','drink.png',);

//img links path are targeted following where the page will be included 
            echo"
            <div class=\"container-fluid category mt-2`\">
            <div class=\"row\">";
//la boucle pour la création de 6 posts de plus 
//les titres sont pris dans le tableau et insérés dans chaque posts
    for ($i=0; $i<4 ; $i++) { 

       echo" <article class=\"col-md-2 mx-auto mt-5 myCard\">
                <br>  
                <img class=\"d-block mx-auto\" src=\"img/$img[$i]\" alt=\"\"> 
                <br>  
                <br>  
                <h2 class=\"text-uppercase\">$title[$i]</h2> 
                <br>  

            </article>";          
    }
    echo"
    </div>
    </div>";
    ?>