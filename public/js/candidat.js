const btn_candidat = document.getElementById('btn_candidat');
const span_age = document.getElementById('span_age');
const age = document.getElementById('age');
console.log(age);
age.addEventListener('keyup',function()
{
    const age_value = document.getElementById('age').value;
    if (age_value <= 35) 
    {
        span_age.setAttribute("hidden",'');
        btn_candidat.removeAttribute("disabled");
    }
    else
    {
        span_age.removeAttribute('hidden');
        btn_candidat.setAttribute("disabled","");
    }
})