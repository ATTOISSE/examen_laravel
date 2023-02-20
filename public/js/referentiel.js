const bnt_referentiel = document.querySelector('#btn_referentiel');
const validite_ref = document.getElementById("validite_referentiel");

validite_ref.addEventListener('click',function()
{
    const validite_referentiel = document.getElementById("validite_referentiel").options[document.getElementById('validite_referentiel').selectedIndex].value;
    if (validite_referentiel === "1") 
    {
        bnt_referentiel.removeAttribute('disabled');
    }
    else
    {
        bnt_referentiel.setAttribute('disabled','')
    }
});
