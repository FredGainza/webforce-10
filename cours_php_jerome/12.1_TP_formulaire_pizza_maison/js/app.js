(function(){
	"use strict";
	// Les éléments du formulaire
	let sauce_tomate 	= document.querySelector("#sauce_tomate"),
		sauce_blanche 	= document.querySelector("#sauce_blanche"),
		fromage 		= document.querySelector("#fromage"),
		couper 			= document.querySelector("#couper"),
		piment 			= document.querySelector("#piment");
	// Les images pour composer sa pizza
		let basePate 	= document.querySelector('#basePate'),
			nbrFromage	= document.querySelector('#nbrFromage'),
			coupePizza	= document.querySelector('#coupePizza'),
			nbrPiment	= document.querySelector('#nbrPiment'),
			pizzaFini	= document.querySelector('#pizzaFini');

	// La pizza finie
	let pizza = {'base' : 'tomate', 'piment' : 0};
			

		sauce_tomate.addEventListener('change', function(e){
			if(this.checked === true){
				// Je change l'url de l'image
				basePate.childNodes[1].src = 'images/tomate.png';
				pizza.base = 'tomate';
				changePizzaFini();
			}
		});

		sauce_blanche.addEventListener('change', function(e){
			if(this.checked === true){
				basePate.childNodes[1].src = 'images/blanche.png';
				pizza.base = 'blanche';
				changePizzaFini();
			}
		});

		fromage.addEventListener('change', function(e){
			switch (this.value) {
				case "Mozzarella":
					nbrFromage.childNodes[1].src = 'images/fromage.png';
					break;
				case "Mozzarella, parmigiano":
					nbrFromage.childNodes[1].src = 'images/middle_fromage.png';
					break;
				case "Mozzarella, parmigiano, gorgonzolla":
					nbrFromage.childNodes[1].src = 'images/full_fromage.png';
					break;
				default:
					nbrFromage.childNodes[1].src = 'images/fromage.png';
					break;
			}
		});

		couper.addEventListener('change', function(e){
			if(this.checked === true){
				coupePizza.childNodes[1].src = 'images/coupe.png';
			}else{
				coupePizza.childNodes[1].src = 'images/blanche.png';
			}
		});

		piment.addEventListener('change', function(e){
			switch (this.value) {
				case "0":
					nbrPiment.childNodes[1].src = 'images/no_piment.png';
					break;
				case "1":
					nbrPiment.childNodes[1].src = 'images/middle_piment.png';
					break;
				case "2":
					nbrPiment.childNodes[1].src = 'images/full_piment.png';
					break;
				default:
					nbrPiment.childNodes[1].src = 'images/no_piment.png';
					break;
			}
			if(this.value > 0){
				pizza.piment = 1;
			}else{
				pizza.piment = 0;
			}
			changePizzaFini();
		});

		let changePizzaFini = () =>{
			console.log(pizza);
			if(pizza.base === "tomate" && pizza.piment === 1){
				pizzaFini.childNodes[1].src = 'images/pizza.png';
			}else if(pizza.base === "tomate" && pizza.piment !== 1){
				pizzaFini.childNodes[1].src = 'images/pizza_no_piment.png';
			}else if(pizza.base === "blanche" && pizza.piment === 1){
				pizzaFini.childNodes[1].src = 'images/fromage_piment.png';
			}else if(pizza.base === "blanche" && pizza.piment !== 1){
				pizzaFini.childNodes[1].src = 'images/just_fromage.png';
			}
		};

})();