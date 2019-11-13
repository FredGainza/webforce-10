let imageSauce = document.getElementById("img-sauce");
let image = document.getElementsByTagName("img");
let image_sauce = image[0];
let image_fromage = image[1];
console.log(image);
// let sourceImgSauce = document.getElementById("img-sauce").getAttribute("src");
console.log(image_sauce.getAttribute("src"))
// console.log(sourceImgSauce);
let choixSauce = document.querySelectorAll('input[name=sauce]');
for (let i = 0; i < choixSauce.length; i++) {
    choixSauce[i].addEventListener("change", function(){
        let sauce_choisie = this.value;
        console.log(sauce_choisie);
        if (sauce_choisie === "tom"){
         image_sauce.src = "img/tomate.png";
            
        }else{
            image_sauce.src = "img/blanche.png";
        }
       
     })
}

let fromage = document.getElementById("fromage");

let choixFromage = document.querySelectorAll('option[name=fromage].select');
console.log(choixFromage);
for (let i = 0; i < choixFromage.length ; i++) {
    choixFromage[i]= addEventListener("change", function(){
        let fromage_choisi = this.value;
        console.log(fromage_choisi);
        if (fromage_choisi === "0"){
            image_fromage.src = "img/fromage.png";
        }
        if (fromage_choisi === "1"){
            image_fromage.src = "img/middle_fromage.png";
        }
        if (fromage_choisi === "2"){
            image_fromage.src = "img/full_fromage.png";
        }
    }) 
}  


