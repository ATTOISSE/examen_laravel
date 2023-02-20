const option1 = document.getElementById('option1');
const option2 = document.getElementById('option2');
const is_start = document.getElementById('is_started');

 var date_courant = new Date();

 is_start.addEventListener('click',function()
 {
    const date_debut_value = document.getElementById('date_debut').value;
    var date = new Date(date_debut_value);
    if (date >= date_courant) 
    {
        console.log(date);
       option1.setAttribute('selected',"");
       is_start.setAttribute('readonly',"");
       option1.removeAttribute('hidden');
       option2.setAttribute('hidden',"");
    }
    else if(date <= date_courant)
    {
        option2.setAttribute('selected',"");
       is_start.setAttribute('readonly',"");
       option2.removeAttribute('hidden');
       option1.setAttribute('hidden',"");
    }
 })