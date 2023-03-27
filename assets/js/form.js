
const formCourt = document.getElementById("form-court");
const formLong = document.getElementById("form-long");


function afficherFormCourt() {
    formLong.style.opacity = "0";

    setTimeout(function(){

        formLong.style.display = "none";
        formCourt.style.display = "block";
        
        setTimeout(function(){
            formCourt.style.opacity = "1"
        },10);
    },500);
}

function afficherFormLong() {
    formCourt.style.opacity = "0";

    setTimeout(function(){

        formCourt.style.display = "none";
        formLong.style.display = "block";
        
        setTimeout(function(){
            formLong.style.opacity = "1"
        },10);
    },500);

}

const btnCourt = document.getElementById("btn-court");
const btnLong = document.getElementById("btn-long");

btnCourt.addEventListener("click", afficherFormCourt);
btnLong.addEventListener("click", afficherFormLong);



//utilisaton de paramettre GET
const urlParams = new URLSearchParams(window.location.search);

if(urlParams.get("demande") == "privatisation"){
    afficherFormLong();
}

if(urlParams.get("demande") == "contact"){
    afficherFormCourt();
}