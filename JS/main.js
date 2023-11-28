console.log("Javascript initiated.")

document.addEventListener("DOMContentLoaded", function(colors){
    const buttons = document.getElementsByClassName('btn')
    for (var i = 0; i < buttons.length; i++){
        var roll = Math.floor(Math.random(1,5)*5) + 1;
        console.log(roll)
        if (roll == 1){
            buttons[i].style.backgroundColor = "green";
        }
        else if (roll == 2){
            buttons[i].style.backgroundColor = "blue";
        }
        else if (roll == 3){
            buttons[i].style.backgroundColor = "red";
        }
        else if (roll == 4){
            buttons[i].style.backgroundColor = "cornflowerblue";
        }
        else if (roll == 5){
            buttons[i].style.backgroundColor = "darkslateblue";
        }
        
    }
}); 


function ChangeLeftMenuButtonColors(id){
    const clicked_button = document.getElementById(`${id}`);
    const buttons = document.getElementsByClassName('menu-buttons');
    for(var i = 0, il = buttons.length; i<il; i++){
        buttons[i].style.backgroundColor = "rgb(35, 35, 35)";
    }
    clicked_button.style.backgroundColor = "rgb(180, 3, 3)";
}

function ToggleDropdown(id){
    var dropdowns = document.getElementsByClassName('dropdown')
    var Item = document.querySelector(`#dropdown-${id}`);
    
    if (Item.style.display == "none"){
        for (var i = 0; i < dropdowns.length; i++){
            dropdowns[i].style.display = "none";
        }
        Item.style.display = "block";
        
    }
    else if (Item.style.display == "block"){
        Item.style.display = "none";
    }

}