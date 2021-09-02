<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Baptiste Odet</title>
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/pages.css">
        <meta name="viewport" content="width=600">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=The+Girl+Next+Door&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="project-header">
            <div onclick="transitionToPage('/')" class="btn">
                <div class="background"></div>
                <div class="shadow"></div>
                <span><- Back</span>
            </div>
            
            <h1>NoiseVisualizer</h1>

            <div class="nav-btn">
                <div onclick="transitionToPage('www.fga-software.xyz')" class="btn">
                    <div class="background"></div>
                    <div class="shadow"></div>
                    <span><-</span>
                </div>
                <div onclick="transitionToPage('protomuss')" class="btn">
                    <div class="background"></div>
                    <div class="shadow"></div>
                    <span>-></span>
                </div>
            </div>
        </div>
        <div id="main">
            <img id="head-img" src="data/thumbnail-noisevisualizer.PNG">
            <div class="head-section">
                <div id="purpose">
                    <div class="zone-title">
                        <div class="stylized">Purpose of the project</div>
                    </div>
                    <p>Souhaitant m’initier à la visualisation 3D et plus généralement à l’environnement OpenGl, j’ai choisi de réaliser ce projet. L’algorithme Perlin Noise étant un algorithme très populaire et très utilisé dans les jeux vidéos ou les logiciels de modélisation je me suis donc tourné vers ce choix. De plus, la visualisation en temps réel des différents paramètres me semblait être une façon plus pratique de pouvoir aborder cet algorithme assez abstrait sur le papier.</p>
                </div>
                <div class="side">
                    <div id="duration">
                        <div class="zone-title">
                            <div class="stylized">Project Duration</div>
                        </div>
                        <p>2 mois (2020)</p>
                    </div>
                    <div id="role">
                        <div class="zone-title">
                            <div class="stylized">My Role</div>
                        </div>
                        <p>J’ai travaillé seul sur ce projet. Avec un camarade en licence d’informatique nous avons pu nous entraider car nos projets étaient similaires.</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div id="objective">
                    <div class="zone-title">
                        <div class="stylized">Objective</div>
                    </div>
                    <p>Le but était donc de construire une application permettant la visualisation en temps réel des différents paramètres de l’algorithme Perlin. Cette visualisation s’effectue en 1D (graph), 2D (texture), 3D (terrain). Les textures générées peuvent être exportées en format images ainsi que les terrains en format objet.</p>
                </div>
                <div class="side-img">
                    <img src="data/NoiseVisualizer_graph1.PNG">
                </div>
            </div>
            <div class="section">
                <div class="side-img">
                    <img src="data/NoiseVisualizer_terrain1.PNG">
                </div>
                <div id="approach">
                    <div class="zone-title">
                        <div class="stylized">Approach</div>
                    </div>
                    <p>La partie graphique est réalisée avec ImGui et OpenGl. Toute l’application est codée en C++. L’algorithme de Perlin à été implémenté de zéro ce qui a permis de choisir les paramètres à intégrer. Pour une visualisation en temps réel, il a fallu utiliser des threads car pour de grandes résolutions de texture ou de terrain l’algorithme nécessite un certain temps de calcul. </p>
                </div>
            </div>

            <div id="final">
                <div class="zone-title">
                    <div class="stylized">Final Product</div>
                </div>
                <p>La partie graphique est réalisée avec ImGui et OpenGl. Toute l’application est codée en C++. L’algorithme de Perlin à été implémenté de zéro ce qui a permis de choisir les paramètres à intégrer. Pour une visualisation en temps réel, il a fallu utiliser des threads car pour de grandes résolutions de texture ou de terrain l’algorithme nécessite un certain temps de calcul. </p>
            </div>


            <?php include('../footer.php'); ?>
        </div>
    </body>
    <script>
        window.transitionToPage = function(href) {
            document.querySelector('body').style.opacity = 0
            setTimeout(function() { 
                window.location.href = href
            }, 500)
        }

        window.onpageshow = function() { 
            document.querySelector('body').style.opacity = 1
        }
    </script>
</html>

    