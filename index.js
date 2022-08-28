all = [
    'fga', 'ns', 'mol', 'dice', 
]
main = [
    'fga', 'ns'
]
univ = [
    'mol', 'dice',
]

function update_projects(arr, newLink) {
    //Update links
    links = document.querySelectorAll("#projects .selectable");
    for(l of links) 
        l.classList.remove('selected');
    document.getElementById(newLink).classList.add('selected');

    //Update cards to display
    cards = document.querySelectorAll("#projects .container .card");
    for(c of cards) {
        c.style.display = 'none';
    }
    for(a of arr) {
        card = document.getElementById(a);
        card.style.display = 'block';
    }
}

document.getElementById("allprojects").addEventListener("click", function() {update_projects(all, 'allprojects')});
document.getElementById("mainprojects").addEventListener("click", function() {update_projects(main, 'mainprojects')});
document.getElementById("univprojects").addEventListener("click", function() {update_projects(univ, 'univprojects')});