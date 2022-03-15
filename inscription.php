<!--inclusion du header et de la navbar -->
<?php include_once 'inc/base.inc.php'; ?>
<?php include_once 'inc/nav.inc.php' ?>
<!--inclusion du header et de la navbar -->

<div class="container" style="margin-top: 5%">
    <section class="vh-100">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5" style="color: black">Créer un compte</h2>

                                <form action="_inscription.traitement.php" method="post">

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1cg" style="color: black">Nom de l'entreprise</label>
                                        <input type="text" name="raisonSociale" class="form-control form-control-lg" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg" style="color: black">Adresse</label>
                                        <input type="text" name="adresse" class="form-control form-control-lg" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg"   style="color: black">Code Postale</label>
                                        <input pattern="[0-9]{5,5}" type="text" name="cp" class="form-control form-control-lg" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg" style="color: black">Ville</label>
                                        <input type="text" name="ville" class="form-control form-control-lg" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg" style="color: black">Adresse mail</label>
                                        <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" name="adrMel" class="form-control form-control-lg" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg" style="color: black">Téléphone</label>
                                        <input pattern="^[0-9]{10}" type="text" name="telephone" class="form-control form-control-lg" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg" style="color: black">Contact</label>
                                        <input type="text" name="contact" class="form-control form-control-lg" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg" style="color: black">Nom d'utilisateur</label>
                                        <input type="text" name="login" class="form-control form-control-lg" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg" style="color: black">Mot de passe</label>
                                        <input type="password" name="mdp" class="form-control form-control-lg" required/>
                                    </div>

                                    <label for="validationTooltip04">Pays :</label>
                                    <label class="selectorPays">
                                        <select name="pays" class="taille">
                                            <option value="null">PAYS</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="ZA">Afrique du Sud</option>
                                            <option value="AL">Albanie</option>
                                            <option value="DZ">Algérie</option>
                                            <option value="DE">Allemagne</option>
                                            <option value="MK">Ancienne République yougoslave de Macédoine</option>
                                            <option value="AD">Andorre</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctique</option>
                                            <option value="AG">Antigua-et-Barbuda</option>
                                            <option value="AN">Antilles néerlandaises</option>
                                            <option value="SA">Arabie saoudite</option>
                                            <option value="AR">Argentine</option>
                                            <option value="AM">Arménie</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australie</option>
                                            <option value="AT">Autriche</option>
                                            <option value="AZ">Azerbaïdjan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahreïn</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbade</option>
                                            <option value="BE">Belgique</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Bénin</option>
                                            <option value="BM">Bermudes</option>
                                            <option value="BT">Bhoutan</option>
                                            <option value="BY">Biélorussie</option>
                                            <option value="BO">Bolivie</option>
                                            <option value="BA">Bosnie-et-Herzégovine</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BR">Brésil</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgarie</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodge</option>
                                            <option value="CM">Cameroun</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cap-Vert</option>
                                            <option value="CL">Chili</option>
                                            <option value="CN">Chine</option>
                                            <option value="CY">Chypre</option>
                                            <option value="CO">Colombie</option>
                                            <option value="KM">Comores</option>
                                            <option value="CG">Congo</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="HR">Croatie</option>
                                            <option value="CU">Cuba</option>
                                            <option value="DK">Danemark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominique</option>
                                            <option value="EG">Égypte</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="AE">Émirats arabes unis</option>
                                            <option value="EC">Équateur</option>
                                            <option value="ER">Érythrée</option>
                                            <option value="ES">Espagne</option>
                                            <option value="EE">Estonie</option>
                                            <option value="FM">États fédérés de Micronésie</option>
                                            <option value="US">États-Unis</option>
                                            <option value="ET">Éthiopie</option>
                                            <option value="FJ">Fidji</option>
                                            <option value="FI">Finlande</option>
                                            <option value="FR">France</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambie</option>
                                            <option value="GE">Géorgie</option>
                                            <option value="GS">Géorgie du Sud-et-les Îles Sandwich du Sud</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Grèce</option>
                                            <option value="GD">Grenade</option>
                                            <option value="GL">Groenland</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GN">Guinée</option>
                                            <option value="GQ">Guinée équatoriale</option>
                                            <option value="GW">Guinée-Bissau</option>
                                            <option value="GY">Guyane</option>
                                            <option value="GF">Guyane française</option>
                                            <option value="HT">Haïti</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hongrie</option>
                                            <option value="BV">Ile Bouvet</option>
                                            <option value="CX">Ile Christmas</option>
                                            <option value="NF">Île Norfolk</option>
                                            <option value="PN">Île Pitcairn</option>
                                            <option value="AX">Iles Aland</option>
                                            <option value="KY">Iles Cayman</option>
                                            <option value="CC">Iles Cocos (Keeling)</option>
                                            <option value="CK">Iles Cook</option>
                                            <option value="FO">Îles Féroé</option>
                                            <option value="HM">Îles Heard-et-MacDonald</option>
                                            <option value="FK">Îles Malouines</option>
                                            <option value="MP">Îles Mariannes du Nord</option>
                                            <option value="MH">Îles Marshall</option>
                                            <option value="UM">Îles mineures éloignées des États-Unis</option>
                                            <option value="SB">Îles Salomon</option>
                                            <option value="TC">Îles Turques-et-Caïques</option>
                                            <option value="VG">Îles Vierges britanniques</option>
                                            <option value="VI">Îles Vierges des États-Unis</option>
                                            <option value="IN">Inde</option>
                                            <option value="ID">Indonésie</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Irlande</option>
                                            <option value="IS">Islande</option>
                                            <option value="IL">Israël</option>
                                            <option value="IT">Italie</option>
                                            <option value="LY">Jamahiriya arabe libyenne</option>
                                            <option value="JM">Jamaïque</option>
                                            <option value="JP">Japon</option>
                                            <option value="JO">Jordanie</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KG">Kirghizistan</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KW">Koweït</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LV">Lettonie</option>
                                            <option value="LB">Liban</option>
                                            <option value="LR">Libéria</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lituanie</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MY">Malaisie</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malte</option>
                                            <option value="MA">Maroc</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MU">Maurice</option>
                                            <option value="MR">Mauritanie</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexique</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolie</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibie</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Népal</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigéria</option>
                                            <option value="NU">Niué</option>
                                            <option value="NO">Norvège</option>
                                            <option value="NC">Nouvelle-Calédonie</option>
                                            <option value="NZ">Nouvelle-Zélande</option>
                                            <option value="OM">Oman</option>
                                            <option value="UG">Ouganda</option>
                                            <option value="UZ">Ouzbékistan</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palaos</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papouasie-Nouvelle-Guinée</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="NL">Pays-Bas</option>
                                            <option value="PE">Pérou</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PL">Pologne</option>
                                            <option value="PF">Polynésie française</option>
                                            <option value="PR">Porto Rico</option>
                                            <option value="PT">Portugal</option>
                                            <option value="TW">Province chinoise de Taiwan</option>
                                            <option value="QA">Qatar</option>
                                            <option value="SY">République arabe syrienne</option>
                                            <option value="CF">République centrafricaine</option>
                                            <option value="KR">République de Corée</option>
                                            <option value="MD">République de Moldavie</option>
                                            <option value="CD">République démocratique du Congo</option>
                                            <option value="DO">République dominicaine</option>
                                            <option value="IR">République islamique d'Iran</option>
                                            <option value="KP">République populaire démocratique de Corée</option>
                                            <option value="LA">République Populaire du Laos</option>
                                            <option value="CZ">République tchèque</option>
                                            <option value="TZ">République-Unie de Tanzanie</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Roumanie</option>
                                            <option value="GB">Royaume-Uni</option>
                                            <option value="RU">Russie</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="EH">Sahara occidental</option>
                                            <option value="KN">Saint-Christophe-et-Niévès</option>
                                            <option value="SM">Saint-Marin</option>
                                            <option value="PM">Saint-Pierre-et-Miquelon</option>
                                            <option value="VA">Saint-Siège (Cité du Vatican)</option>
                                            <option value="VC">Saint-Vincent-et-les Grenadines</option>
                                            <option value="SH">Sainte-Hélène</option>
                                            <option value="LC">Sainte-Lucie</option>
                                            <option value="WS">Samoa</option>
                                            <option value="AS">Samoa américaines</option>
                                            <option value="ST">Sao Tomé-et-Principe</option>
                                            <option value="SN">Sénégal</option>
                                            <option value="CS">Serbie-et-Monténégro</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapour</option>
                                            <option value="SK">Slovaquie</option>
                                            <option value="SI">Slovénie</option>
                                            <option value="SO">Somalie</option>
                                            <option value="SD">Soudan</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SE">Suède</option>
                                            <option value="CH">Suisse</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard et Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="TJ">Tadjikistan</option>
                                            <option value="TD">Tchad</option>
                                            <option value="IO">Territoire britannique de l'océan Indien</option>
                                            <option value="TF">Territoire Francais du Sud</option>
                                            <option value="PS">Territoires palestiniens occupés</option>
                                            <option value="TH">Thaïlande</option>
                                            <option value="TL">Timor oriental</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinité-et-Tobago</option>
                                            <option value="TN">Tunisie</option>
                                            <option value="TM">Turkménistan</option>
                                            <option value="TR">Turquie</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Vénézuéla</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="WF">Wallis-et-Futuna</option>
                                            <option value="YE">Yémen</option>
                                            <option value="ZM">Zambie</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </label>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Créer</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Déjà un compte? <a href="connexion.php" class="fw-bold text-body"><u>Conectez vous</u></a></p>
                                    <div style="display: flex; justify-content: center; padding:2%">
                                        <img src="img/asterisk.png" style="width: 2%; height:2%; position:relative; top:9px;right:2px">
                                        <label style="color: black">: les champs sont requis</label>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include_once 'inc/footer.inc.php' ?>

<script>
    document.getElementById('connexion').className = 'active';
</script>

