<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Baptiste Odet</title>
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/index.css">
        <meta name="viewport" content="width=600">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=The+Girl+Next+Door&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <?php include('header.php'); ?>

        <div id="main">
            <div id="welcome">
                <div class="background"></div>
                <div class="stylized">Welcome to my portfolio.</div>
                <p>I’m a student currently studying physics (first year of master) at the university Claude Bernard Lyon 1. I am passionate about programming, i love to code scientific related software when time allows me to.</p>
            </div>
            <div class="header"><h2>-> My Work</h2></div>
            <div class="card">
                <div class="thumbnail">
                    <img src="data/fga-thumbnail.png">
                </div>
                <div class="infos">
                    <div class="name">FGA - Fast Graphing & Analysis Software</div>
                    <div class="desc">Data analysis software. Draw curves and do realtime analysis : fourier, fitting and more...</div>
                    <div class="languages">C++, OpenGl, ImGui</div>
                    <div onclick="transitionToPage('www.fga-software.com')" class="btn website-btn">
                        <div class="background"></div>
                        <div class="shadow"></div>
                        <span>View Website -></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="thumbnail">
                    <img src="data/thumbnail-noisevisualizer.PNG">
                </div>
                <div class="infos">
                    <div class="name">Noise Visualizer</div>
                    <div class="desc">Perlin noise realtime visualization in one, two, or three dimensions.</div>
                    <div class="languages">C++, OpenGl, ImGui</div>
                    <div onclick="transitionToPage('noisevisualizer')" class="btn">
                        <div class="background"></div>
                        <div class="shadow"></div>
                        <span>View Project -></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="data/thumbnail-ProTomuss.PNG">
                <div class="infos">
                    <div class="name">ProTomuss</div>
                    <div class="desc">Desktop application to consult university's grades.</div>
                    <div class="languages">HTML, CSS, Javascript, Electron</div>
                    <div onclick="transitionToPage('protomuss')" class="btn">
                        <div class="background"></div>
                        <div class="shadow"></div>
                        <span>View Project -></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="thumbnail">
                    <img src="data/thumbnail-dice.PNG">
                </div>
                <div class="infos">
                    <div class="name">Dice Detection</div>
                    <div class="desc">Realtime dice detection with a smartphone's camera.</div>
                    <div class="languages">Python, OpenCV</div>
                    <div onclick="transitionToPage('dice')" class="btn">
                        <div class="background"></div>
                        <div class="shadow"></div>
                        <span>View Project -></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="thumbnail">
                    <img src="data/thumbnail-minimisation.PNG">
                </div>
                <div class="infos">
                    <div class="name">Minimisation</div>
                    <div class="desc">Various minimisation algorithms to solve the travelling salesman problem</div>
                    <div class="languages">C++, ROOT</div>
                    <div onclick="transitionToPage('minimisation')" class="btn">
                        <div class="background"></div>
                        <div class="shadow"></div>
                        <span>View Project -></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="thumbnail">
                    <img src="data/thumbnail-workouttimer.PNG">
                </div>
                <div class="infos">
                    <div class="name">WorkoutTimer</div>
                    <div class="desc">Simple android app to configure timers for sport's sessions.</div>
                    <div class="languages">C++, OpenGl, ImGui</div>
                    <div onclick="transitionToPage('workouttimer')" class="btn">
                        <div class="background"></div>
                        <div class="shadow"></div>
                        <span>View Project -></span>
                    </div>
                </div>
            </div>

            <div class="header"><h2>-> About Me</h2></div>
            <div class="about">
                <div class="left">
                    <img class="face" src="data/face.jpg">
                    <div class="name">Baptiste Odet</div>
                    <div class="desc">Physics student and programmer</div>
                    <div class="socials">
                        <a href=""><img src="data/socials/gmail_64x64.png"></a>
                        <a href=""><img src="data/socials/github_64.png"></a>
                        <a href=""><img src="data/socials/twitter_64.png"></a>
                        <a href=""><img src="data/socials/linkedin_64.png"></a>
                    </div>
                </div>
                <div class="right">
                    <p>
                        Passionné d’informatique je me forme en autodidacte depuis plus de 5 ans dans le domaine du développement. J’ai pu m’initier aux languages du web, aux languages tels que C++ et Python ou encore aux logiciels tels que arduino, unity, labview. A travers les différents projets que je réalise, j’aime allier le domaine scientifique (maths/physique) au domaine de l’informatique. Les simulations ou les logiciels scientifiques sont les axes majeurs que je souhaite poursuivre dans le futur. 
                    </p>
                    <p>
                        C’est dans cette optique que j’étudie actuellement la physique à l’Université Claude Bernard Lyon 1. Après avoir validé une licence, j’ai intégré le master de physique en première année. Lorsque le temps me le permet je développe des projets afin de me former en autodidate pour avoir une double compétence informatique physique à la fin de mes études. 
                    </p>
                    <p>
                        Cette année, je travaille sur le projet : FGA - Graphing & Analysis Software, vous pouvez le retrouver sur le site dédié.
                    </p>
                </div>
            </div>
            <?php include('footer.php'); ?>
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

    