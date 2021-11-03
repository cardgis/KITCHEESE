<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <script language="javascript" src="calcul.js"></script>
        <link rel="stylesheet" href="../css/style.css">
      
    </head>
    <script>

        function validate(){
            var name = document.getElementById("name").value;
            var subject = document.getElementById("subject").value;
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
            var error_message = document.getElementById("error_message");
  
            error_message.style.padding = "10px";
  
            var text;
            if(name.length < 5){
                text = "Please Enter valid Name";
                error_message.innerHTML = text;
                return false;
            }

            if(subject.length < 10){
                text = "Please Enter Correct Subject";
                error_message.innerHTML = text;
                return false;
            }

            if(isNaN(phone) || phone.length != 10){
                text = "Please Enter valid Phone Number";
                error_message.innerHTML = text;
                return false;
            }

            if(email.indexOf("@") == -1 || email.length < 6){
                text = "Please Enter valid Email";
                error_message.innerHTML = text;
                return false;
            }

            if(message.length <= 140){
                text = "Please Enter More Than 140 Characters";
                error_message.innerHTML = text;
                return false;
            }

        alert("Form Submitted Successfully!");
        return true;
        }

        function traiterNom(){
            var nom =document.getElementById("nom").value;
            if(nom.length<3 ||nom.length>20){
                document.getElementById("nom").style.borderColor="red";
            }else document.getElementById("nom").style.borderColor="green";
        }

        function traiterPrenom(){
            var Prenom =document.getElementById("Prenom").value;
            if(Prenom.length<3 ||Prenom.length>20){
                document.getElementById("Prenom").style.borderColor="red";
            }else document.getElementById("Prenom").style.borderColor="green";
        }

        function traiterProfession(){
            var Profession =document.getElementById("Profession").value;
            if(Profession.length<3 ||Profession.length>30){
                document.getElementById("Profession").style.borderColor="red";
            }else document.getElementById("Profession").style.borderColor="green";
        }
        
        function traiterEmail(){
            var mail = document.getElementById("email").value;         
                    
            if(mail.indexOf("@") == -1 || mail.length < 6 || mail.indexOf(".")== -1) {
                document.getElementById("email").style.borderColor="red";
            }else{
                document.getElementById("email").style.borderColor="green";
                mail.value.trim();
            }
        }

        function traiterNumero(){
        var num = document.getElementById("telephone").value;
            if(num.length != 10 || isNaN(num) ) {
                document.getElementById("telephone").style.borderColor="red";
            }else document.getElementById("telephone").style.borderColor="green";
        }

        function traiterAge(){
            var age = document.getElementById("age").value;
            if(age.length< 2 )
            {
                document.getElementById("age").style.borderColor="red";
            }else document.getElementById("age").style.borderColor="green";
        }



        function validation(){
            var nom = document.getElementById("nom");
            var prenom = document.getElementById("Prenom");
            var prof= document.getElementById("Profession");
            var age = document.getElementById("age");
            var mail = document.getElementById("email");
            var genre = document.getElementById("genre");
            if(nom.validity.valueMissing || prenom.validity.valueMissing || prof.validity.valueMissing || age.validity.valueMissing || mail.validity.valueMissing || genre.validity.valueMissing)
            {
                alert ("veuillez remplir tout les champs")
            }else{
                document.location.href="Questionnaire.html"
            }
        }

        var myCookies= [];
        function  saveCookies(name){ 
            myCookies ["_nom"]  = document.getElementById ("nom").value;
            myCookies ["_prenom"]  = document.getElementById ("Prenom").value;
            myCookies ["genre"]=document.getElementById("genre").value;
            myCookies ["age"]=document.getElementById("age").value;
            myCookies ["_telephone"]  = document.getElementById ("telephone").value;
            myCookies ["_email"]  = document.getElementById ("email").value;
            myCookies ["_profession"]  = document.getElementById ("Profession").value;
            myCookies ["_statut"]  = document.getElementById ("statut").value;
            myCookies ["_preferences"]  = document.getElementById ("preferences").value;
            myCookies ["note"]  ="0" ;
            myCookies ["_note"]  ="0" ;
            myCookies ["_note2"]  ="0" ;
            myCookies ["_note3"]  ="0" ;
            myCookies ["_note4"]  ="0" ;
            myCookies ["_note5"]  ="0" ;
            myCookies ["_note6"]  ="0" ;
            myCookies["moyenne"]="0";
            // Démarrer la section réutilisable
            // Démarrer la section réutilisable
            document.cookie  =  "" ;
            var  expiresAttrib  =  new  Date( Date.now() + 60 * 1000 ).toString();
            var  cookieString  =  "" ;
            for  ( var  key  in  myCookies )
            {
                cookieString  =  key+"="+myCookies[key]+";"+expiresAttrib+";" ;
                document.cookie = cookieString ;
            }
        }

    </script>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand" href="../#page-top"><img src="../Images/logo-non-bg.png" alt="Logo de notre projet" /></a>
                
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                            <li class="nav-item"><a class="nav-link" href="../#services">Qui somme-nous ?</a></li>
                            <li class="nav-item"><a class="nav-link" href="../#portfolio">Nos Projets</a></li>
                            <li class="nav-item"><a class="nav-link" href="../#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
        
                <div class="masthead-heading text-uppercase"> kitcheeze </div>
                <div class="masthead-subheading">  
        
                    Faites vous enfin livrer les plats maison dont vous révez
                </div>
            </div>
        </header>   
        <center>
        </br></br>
            <div class="formulaireP1">
            <form action="Modification.php" name="Enquete" method="post">
            <h2 class="section-heading text-uppercase">Enquête de satisfaction</h2>
            </br></br>
            <div class="classy">
            <i>Complétez le formulaire. Tout les champs sont obligatiore </i><em>*</em> sont <em>obligatoires</em>
            </br></br>
                    <label>Genre <em>*</em></label>
                        <SELECT NAME="Genre" id="genre" style="font-size: 25px;">
                        <option value="Female">Femme</option>
                        <option value="Male">Homme</option>
                        </select>
                    </br>
                    <br>
                    <label for="nom">Nom <em>*</em></label>
                    <input id="nom" placeholder=" Serre" autofocus="" required="" onblur="traiterNom()" style="font-size: 25px;" >
                    <br><br>

                    <label for="prenom">Prenom <em>*</em></label>
                    <input id="Prenom" placeholder="Olivier " autofocus="" required="" onblur="traiterPrenom()" style="font-size: 25px;"><br>
                    <span id='missPrenom'></span><br>
                    
                    <label for="telephone">Portable <em>*</em></label>
                    <input id="telephone"  placeholder="06xxxxxxxx" pattern="06[0-9]{8}" maxlength="10" onblur="traiterNumero()" style="font-size: 25px;"><br><br>

                    <label for="email">Email <em>*</em></label>
                    <input id="email" type="email" placeholder="prenom.nom@polytechnique.edu" required="" onblur="traiterEmail()" pattern="[a-zA-Z]*.[a-zA-Z]*@polytechnique.edu"  style="font-size: 25px;"><br>
                    <span id="missemail"></span></br>

                    <label for="age">Age<em>*</em></label>
                    <input id="age" type="number" placeholder="xx" pattern="[0-9]{2}"  required="" style="-moz-appearance: textfield; height: 40px; font-size: 25px;"  onblur="traiterAge()" style="font-size: 25px;"><br>
                    <span id=''></span><br>

                    <label for="nom">Profession<em>*</em> </label>
                    
                    <input id="Profession" placeholder=" Garagiste" autofocus="" required="" onblur="traiterProfession()" style="font-size: 25px;"><br>
                </br></br>
                    
                                <label for="preferences">Vos preferences culinaires</label>
                                <select name="preferences" id="preferences" required="" >
                                    <option>--Choisissez--</option>
                                    <option value="FR">Française</option>
                                    <option value="IT">Italienne</option>
                                    <option value="USA">Americaine</option>
                                    <option value="AF">Africaine</option>
                                </select>
                            </br></br>

                            <label for="statut">Statut</label>
                                <select name="statut" id="statut" required="">
                                    <option>--Choisissez--</option>
                                    <option value="particulier">Particulier</option>
                                    <option value="Professionnel">Professionnel</option>
                                    
                                </select>
                            </br></br>

                    <div class="div_input_form">
                    <input type="button" name="valid_inscr" id="bouton_envoi" class="input_form" value="Valider" onclick="validation(), saveCookies()" style="font-size: 25px;" />
                    </div>

                    

                
            </div>
            </form>
            </div>
            <?php
            include('Modification.php');
            ?>
      </center>   
          <!-- Footer-->
        <section class="page-section" id="contact"> 
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>  
        </section>
          
            <footer class="footer py-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-lg-start">Copyright &copy; Kitcheeze 2021</div>
                        <div class="col-lg-4 my-3 my-lg-0">
                            <a class="btn btn-dark btn-social mx-2" href="#!"><img src="../Images/Icones/facebook.png" width="30" height="30"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><img src="../Images/Icones/instagram.png" width="40" height="40"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><img src="../Images/Icones/twitter.png" width="30" height="30"></i></a>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                            <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                        </div>
                    </div>
                </div>
            </footer>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="../js/scripts.js"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

