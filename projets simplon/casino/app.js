

let cagnotte = prompt("Quel est le montant de départ de la cagnotte ?");
let partie = prompt("Combien une partie est estimé ?");
let age=
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
    }
const nbrandom=getRandomInt(1,20); 
    while(cagnotte >=partie){
        console.log(nbrandom);
        nb = prompt("Votre nombre ?")
        if (nbrandom==nb){
            cagnotte=cagnotte+400;
            alert("Vous avez gagné 600 points. Voici votre nouveau solde "+cagnotte);
        }else{
            cagnotte=cagnotte-600;
            alert("Vous avez perdu 400 points. Voici votre nouveau solde "+cagnotte);
        }
        
    }