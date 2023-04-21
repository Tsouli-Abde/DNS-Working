window.onload = function()
{
    let menu      = document.getElementById("menu");
    let container = document.getElementById("container");

    menu.onclick  = function()  {
                                    container.classList.toggle("active");
                                }

    let main      = document.getElementById("main");
    
    main.onclick  = function()  {
                                    container.classList.remove("active");                         
                                }
}