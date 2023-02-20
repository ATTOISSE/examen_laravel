const btn_pagination = document.getElementById('btn_pagination');
const plus = document.getElementById('plus');
const moins = document.getElementById('moins');
btn_pagination.addEventListener('click',function()
{
    if (btn_pagination.innerHTML == "Plus") {
        
        plus.removeAttribute('hidden');
        moins.setAttribute('hidden',"");
        btn_pagination.innerText = "Moins";
    }
    else{
        plus.setAttribute("hidden",'');
        moins.removeAttribute("hidden")
        btn_pagination.innerText = "Plus";

    }
})
