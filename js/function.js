function LoadHtml(file, DOMElement, functionAfterLoad = function(){}) {
    var xhr= new XMLHttpRequest();
    xhr.open('GET', file, true);
    xhr.onreadystatechange= function() {
        if (this.readyState!==4) return;
        if (this.status!==200) return; // or whatever error handling you want
        DOMElement.innerHTML = this.responseText;

        functionAfterLoad();
    };
    xhr.send();
}

function SetActiveMenu(id, DOMMenu) {
    for(child of DOMMenu.children)
        child.classList.remove('activeMenu');
    DOMMenu.children[id].classList.add('activeMenu');
}