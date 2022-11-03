const form = document.getElementById("form");


const nom = document.getElementById("nom");
const numeroCIN = document.getElementById("numeroCIN");
const adresse = document.getElementById("adresse");
const sexe = document.getElementById("sexe");
form.addEventListener('submit', e => {
    e.preventDefault();
    validateInputs();
});


const setError = (element,message) =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');   
    inputControl.classList.remove('success');    

}

const setSuccess = element =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = "";
    inputControl.classList.add('success');   
    inputControl.classList.remove('error');    

}

const validateInputs = () => {
    const nomvaleur = nom.value.trim();
    const CINvaleur = numeroCIN.value.trim();
    const adressevaleur = adresse.value.trim();
    const sexevaleur = sexe.value.trim();

    if(nomvaleur ===""){
        setError(nom,'le nom est requis');
    }else{
        setSuccess(nom);
    }

    //
    if(CINvaleur === ""){
        setError(numeroCIN,"le numero CIn est requis");
    }else{
        setSuccess(numeroCIN);
    }
    //
    if(adressevaleur === ""){
        setError(adresse,"l'adresse est requis");
    }else{
        setSuccess(adresse);
    }

    //
    if(sexevaleur === ""){
        setError(sexe,"choisir un votre genre");
    }else{
        setSuccess(sexe);
    }



}