console.log("Javascript initiated.")

function ChangeLeftMenuButtonColors(id){
    const clicked_button = document.getElementById(`${id}`);
    const buttons = document.getElementsByClassName('menu-buttons');
    for(var i = 0, il = buttons.length; i<il; i++){
        buttons[i].style.backgroundColor = "rgb(35, 35, 35)";
    }
    clicked_button.style.backgroundColor = "rgb(180, 3, 3)";
}