let imgs =
[
    {
        name: "ProTomuss",
        desc: "Logiciel de consultation des notes de l'Université Claude Bernard Lyon 1",
        languages: ['HTML', 'CSS', 'Javascript'], 
        src: "data/thumbnail-protomuss.png",
        href: "protomuss.html"
    },
    {
        name: "NoiseVisualizer",
        desc: "Logiciel de visualisation en temps réel du bruit de Perlin",
        languages: ['C++', 'OpenGl'],
        src: "data/thumbnail-noisevisualizer.png",
        href: "noisevisualizer.html"
    },
    {
        name: "Workout Timer",
        desc: "Application pour smartphone donnant accès à un timer spécifique pour les séances de sport",
        languages: ['Unity', 'C#'],
        src: "data/thumbnail-workouttimer.png",
        href: "workouttimer.html"
    }
]
    

let swipes = document.getElementsByClassName('swipe');

let nextProjectButton = document.getElementById('next-project');
let prevProjectButton = document.getElementById('prev-project');

let loop;
let i = 1;

nextProjectButton.addEventListener('click', function(event) {
    clearInterval(loop);
    app();
    loop = window.setInterval(app, 8000); // repeat forever;
    event.preventDefault();
});
prevProjectButton.addEventListener('click', function(event) {
    clearInterval(loop);
    decrement();decrement();
    app();
    loop = window.setInterval(app, 8000); // repeat forever;
    event.preventDefault();
});

window.onload = function start() {
    changeImage(0);
    updateInfos(0);
    loop = window.setInterval(app, 8000); // repeat forever;
}
function app() {
    console.log('loop');
    changeImage(i);
    updateInfos(i);

    increment();
}
function increment() {
    (i >= (imgs.length-1)) ? i = 0 : i+=1;
}
function decrement() {
    (i <= 0) ? i = i=imgs.length-1 : i-=1;
}
function updateInfos(index) {
    let name = document.getElementById('project-name');
    let desc = document.getElementById('project-desc');
    let lang = document.getElementsByClassName('languages')[0];

    name.innerHTML = imgs[index].name;
    triggerAnimation(name);
    desc.innerHTML = imgs[index].desc;
    triggerAnimation(desc);
    lang.innerHTML = '';
    for(let j = 0; j < imgs[index].languages.length; j++)
        lang.innerHTML += '<span>' + imgs[index].languages[j] + '</span>';
    triggerAnimation(lang);

    for(let j = 0; j < swipes.length; j++) {
        swipes[j].style.animation = 'none';
        swipes[j].offsetHeight; /* trigger reflow */
        swipes[j].style.animation = null;
    }

    let currNumber = document.getElementById('current-number');
    let currProgress = document.getElementById('current-progress');
    
    currNumber.innerHTML = index + 1;
    triggerAnimation(currNumber);
    triggerAnimation(currProgress);

    let goto = document.getElementById('goto-project');
    goto.href = imgs[index].href;
}
function changeImage(index) {
    let image1 = document.getElementById('image1');
    let image2 = document.getElementById('image2');
    let image3 = document.getElementById('image3');
    
    let images = [image1, image2, image3];

    setTimeout(function() {
        for(let j = 0; j < images.length; j++)
        {
            images[j].style.display = 'none';
        }
        images[index].style.display = 'block';
    }
    , 300);
}


function triggerAnimation(object)
 {
    object.style.animation = 'none';
    object.offsetHeight; /* trigger reflow */
    object.style.animation = null; 
 }