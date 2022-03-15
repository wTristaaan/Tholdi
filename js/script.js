function selector() {
        for(let i =0;i < 2; i++){
            const conteneur = document.getElementById('conteneur')
            const enfant = conteneur.childNodes;

            if(enfant.length === 0){
                const divRow = document.createElement("div");
                divRow.className = 'row'
                divRow.id = 'rowCol'
                conteneur.appendChild(divRow);

                const idRowCol = document.getElementById('rowCol')
                const col = document.createElement('div')
                col.className = 'col-md-12 flexible'
                col.id = 'colCard'
                idRowCol.appendChild(col);

                const idColCard = document.getElementById('colCard')
                const card = document.createElement('div')
                card.className = 'card sizeCard'
                card.id = 'cardBody'
                idColCard.appendChild(card);

                const idCardBody = document.getElementById('cardBody')
                const cardBody = document.createElement('div')
                cardBody.className = 'card-body'
                cardBody.id = 'cardTitle'
                idCardBody.appendChild(cardBody);

                const idCardTitle = document.getElementById('cardTitle')
                const cardTitle = document.createElement('h5')
                cardTitle.className = 'card-title black'
                cardTitle.id = 'contentCard'
                cardTitle.innerHTML = 'Aperçu du conteneur'
                idCardTitle.appendChild(cardTitle);

                const cardImg = document.createElement('div')
                cardImg.className = 'imgConteneur'
                cardImg.id = 'selector'
                idCardTitle.appendChild(cardImg);


                const idReserverContainerBody = document.getElementById('reserverContainerBody')
                idReserverContainerBody.className = ' flexible'

                const idReserverContainerRow = document.getElementById('reserverContainerRow')
                idReserverContainerRow.className = 'marge'

                const numConteneur = document.getElementById("numTypeContainer").value;
                document.getElementById("selector").innerHTML = "L'élément: " + numConteneur;

                const listeImagesConteneur = ['img/smallDry.jpg', 'img/mediumDry.jpg',
                    'img/hightCube.jpg', 'img/smallFlat.jpg', 'img/mediumFlat.jpg', 'img/smallOpen.jpg',
                    'img/mediumOpen.jpeg', 'img/smallReefer.jpg', 'img/mediumReefer.jpeg'];

                const nouvelleImage = document.createElement('img');
                nouvelleImage.src = listeImagesConteneur[numConteneur - 1];
                nouvelleImage.className = "imgConteneur"

                const maDivImage = document.getElementById("selector");
                maDivImage.innerHTML = '';
                maDivImage.appendChild(nouvelleImage);

                const titleConteneur = document.createElement('div')
                titleConteneur.className = 'black'
                titleConteneur.id = 'nomConteneur'
                idCardTitle.appendChild(titleConteneur);

                const typeContainer = document.createElement('div')
                typeContainer.className = 'black'
                typeContainer.id = 'typeConteneur'
                typeContainer.innerHTML = 'Decription : '
                idCardTitle.appendChild(typeContainer);

                let paragraphe = document.createElement('p');
                paragraphe.p = nomDuConteneur[numConteneur - 1];
                const div2 = document.getElementById('nomConteneur');
                paragraphe.innerHTML = "Nom du conteneur : " + paragraphe.p;
                div2.appendChild(paragraphe);

                let paragraphe1 = document.createElement('p');
                paragraphe1.p = numTypeDuConteneur[numConteneur - 1 ];
                const div3 = document.getElementById('typeConteneur');
                paragraphe1.innerHTML = "Type du conteneur : " + paragraphe1.p;
                div3.appendChild(paragraphe1);


                let paragraphe2 = document.createElement('p');
                paragraphe2.p = codeConteneur[numConteneur - 1 ];
                const div4 = document.getElementById('typeConteneur');
                paragraphe2.innerHTML = "Code du conteneur : " + paragraphe2.p;
                div4.appendChild(paragraphe2);

                let paragraphe3 = document.createElement('p');
                paragraphe3.p = longueurConteneur[numConteneur - 1 ];
                const div5 = document.getElementById('typeConteneur');
                paragraphe3.innerHTML = "Longueur du conteneur : " + paragraphe3.p;
                div5.appendChild(paragraphe3);

                let paragraphe4 = document.createElement('p');
                paragraphe4.p = largeurConteneur[numConteneur - 1 ];
                const div6 = document.getElementById('typeConteneur');
                paragraphe4.innerHTML = "Longueur du conteneur : " + paragraphe4.p;
                div6.appendChild(paragraphe4);

                let paragraphe5 = document.createElement('p');
                paragraphe5.p = hauteurConteneur[numConteneur - 1 ];
                const div7 = document.getElementById('typeConteneur');
                paragraphe5.innerHTML = "Hauteur du conteneur : " + paragraphe5.p;
                div7.appendChild(paragraphe5);

                let paragraphe6 = document.createElement('p');
                paragraphe6.p = poidsConteneur[numConteneur - 1];
                const div8 = document.getElementById('typeConteneur');
                if (poidsConteneur[numConteneur - 1] == null){

                }else{
                    paragraphe6.innerHTML = "Poids du conteneur : " + paragraphe6.p;
                }
                div8.appendChild(paragraphe6);

                let paragraphe7 = document.createElement('p');
                paragraphe7.p = tareConteneur[numConteneur - 1 ];
                const div9 = document.getElementById('typeConteneur');
                if (tareConteneur[numConteneur - 1] == null){

                }else{
                    paragraphe7.innerHTML = "Tare du conteneur : " + paragraphe7.p;
                }
                div9.appendChild(paragraphe7);

                let paragraphe8 = document.createElement('p');
                paragraphe8.p = capaciteConteneur[numConteneur - 1 ];
                const div10 = document.getElementById('typeConteneur');
                if (capaciteConteneur[numConteneur - 1] == null){

                }else {
                    paragraphe8.innerHTML = "Capacité de charge : " + paragraphe8.p;
                }
                div10.appendChild(paragraphe8);

                break;
            }else{
                const row = document.getElementById('rowCol')
                conteneur.removeChild(row);
            }
        }
}
