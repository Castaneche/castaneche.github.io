let menu_opened = false;
let panel = document.getElementsByClassName('panel')[0];
let myname = document.getElementById('myname');
let sidebar = document.querySelector('.sidebar');
let menubtn = document.querySelector('.menu-btn');
let menucontent = document.querySelector('.menu-content');

function OpenMenu(event) {
    menu_opened = true;
    panel.style.display = 'block';
    myname.className = 'myname__opened';
    menucontent.style.display = 'block';
    sidebar.classList.add('sidebar__opened');
    menubtn.classList.add('menu-btn__opened');
    menubtn.removeEventListener('click', OpenMenu);
    menubtn.addEventListener('click', CloseMenu);
    event.preventDefault();
};
function CloseMenu(event) {
    menu_opened = false;
    panel.style.display = 'none';
    myname.className = 'none';
    menucontent.style.display = 'none';
    menucontent.style.display = 'none';
    sidebar.classList.remove('sidebar__opened');
    menubtn.classList.remove('menu-btn__opened');
    menubtn.removeEventListener('click', CloseMenu);
    menubtn.addEventListener('click', OpenMenu);
    event.preventDefault();
};

menubtn.addEventListener('click', OpenMenu);

panel.addEventListener('click', function(event) {
    if(menu_opened == true)
        CloseMenu(event);
})

menucontent.style.display = 'none';
panel.style.display = 'none';