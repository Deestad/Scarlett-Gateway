console.log("Javascript initiated.")

// Set time if timepanel exists
document.addEventListener("DOMContentLoaded", function(setTime){
    const panel = document.getElementById('datetime-common')
    const options = {
        weekday: 'long',
        year: 'numeric',
        day: 'numeric',
        month: 'long',
    };
    let time_settings = new Date().toLocaleDateString('pt-BR',options)
    panel.innerHTML =`Olá, Kaldwin. <br><b>Hoje é ${time_settings}</b>`;
})

document.addEventListener("DOMContentLoaded", function(colors){
    const buttons = document.getElementsByClassName('btn')
    for (var i = 0; i < buttons.length; i++){
        var roll = Math.floor(Math.random(1,5)*5) + 1;
        if (roll == 1){
            buttons[i].style.backgroundColor = "orange";
        }
        else if (roll == 2){
            buttons[i].style.backgroundColor = "cornflowerblue";
        }
        else if (roll == 3){
            buttons[i].style.backgroundColor = "violet";
        }
        else if (roll == 4){
            buttons[i].style.backgroundColor = "purple";
        }
        else if (roll == 5){
            buttons[i].style.backgroundColor = "darkslateblue";
        }
        
    }
}); 

document.addEventListener("DOMContentLoaded", function colorChanging() {
    setTimeout(function(){
    const buttons = document.getElementsByClassName('btn')
    for (var i = 0; i < buttons.length; i++){
        var roll = Math.floor(Math.random(1,5)*5) + 1;
        if (roll == 1){
            buttons[i].style.backgroundColor = "rgb(255, 8, 103)";
        }
        else if (roll == 2){
            buttons[i].style.backgroundColor = "deeppink";
        }
        else if (roll == 3){
            buttons[i].style.backgroundColor = "darkviolet";
        }
        else if (roll == 4){
            buttons[i].style.backgroundColor = "cyan";
        }
        else if (roll == 5){
            buttons[i].style.backgroundColor = "darkorchid";
        }
    }
    colorChanging();
}, 300);
});


function ChangeLeftMenuButtonColors(id){
    const clicked_button = document.getElementById(`${id}`);
    const buttons = document.getElementsByClassName('menu-buttons');
    for(var i = 0, il = buttons.length; i<il; i++){
        buttons[i].style.backgroundColor = "rgb(35, 35, 35)";
    }
    clicked_button.style.backgroundColor = "rgb(255, 8, 103)";
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