<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuit de l'info 2021</title>
    <link rel="stylesheet" href="https://unpkg.com/@vtmn/css" />

</head>
<body>
    <h1>Inscription</h1>

    <form method="POST" name="Inscription" action="javascript:verify_inscript();">
        <div class="block" style="margin:15px">
            <div>
                <label class="vtmn-text-input_label">Prénom</label>
                <div class="vtmn-text-input_container">
                    <input type="text" class="vtmn-text-input" id="first_name_input" placeholder="Votre prénom">
                </div>
                <p class="vtmn-text-input_helper-text" id="helper_first_name">Prénom *</p>
            </div>
        </div>

        <div class="block" style="margin:15px">
            <div>
                <label class="vtmn-text-input_label">Nom</label>
                <div class="vtmn-text-input_container">
                    <input type="text" class="vtmn-text-input" id="last_name_input" placeholder="Votre nom">
                </div>
                <p class="vtmn-text-input_helper-text" id="helper_last_name">Nom *</p>
            </div>
        </div>

        <div class="block" style="margin:15px">
            <div>
                <label class="vtmn-text-input_label">Mail</label>
                <div class="vtmn-text-input_container">
                    <input type="text" class="vtmn-text-input" id="mail_input" placeholder="Votre mail">
                </div>
                <p class="vtmn-text-input_helper-text" id="helper_mail">Mail *</p>
            </div>
        </div>

        <div class="block" style="margin:15px">
            <div>
                <label class="vtmn-text-input_label">Mot de passe</label>
                <div class="vtmn-text-input_container">
                    <input type="password" class="vtmn-text-input" id="pwd_input" placeholder="Votre mot de passe">
                </div>
                <p class="vtmn-text-input_helper-text" id="helper_pwd">Mote de passe * (entre 8 et 16 caracères)</p>
            </div>
        </div>

        <p style="margin:15px" class="vtmn-text-input_helper-text"><strong>Tous les champs contenant une * sont obligatoire</strong></p>

        <input type="submit" name="Valider">
    </form> 

    <script type="text/javascript">
        function verify_inscript(){
            var FName = document.getElementById("first_name_input");
            var LName = document.getElementById("last_name_input");
            var mail = document.getElementById("mail_input");
            var pwd = document.getElementById("pwd_input");
            var validate = true;

            if(FName.value.split(" ").join() == ""){
                document.getElementById("first_name_input").className = "vtmn-text-input vtmn-text-input--error";
                document.getElementById("helper_first_name").className = "vtmn-text-input_helper-text vtmn-text-input_helper-text--error";
                validate = false;
            }else{
                document.getElementById("first_name_input").className = "vtmn-text-input vtmn-text-input--valid";
                document.getElementById("helper_first_name").className = "vtmn-text-input_helper-text";
            }

            if(LName.value.split(" ").join() == ""){
                document.getElementById("last_name_input").className = "vtmn-text-input vtmn-text-input--error";
                document.getElementById("helper_last_name").className = "vtmn-text-input_helper-text vtmn-text-input_helper-text--error";
                validate = false;
            }else{
                document.getElementById("last_name_input").className = "vtmn-text-input vtmn-text-input--valid";
                document.getElementById("helper_last_name").className = "vtmn-text-input_helper-text";
            }

            if(mail.value.split(" ").join() == ""){
                document.getElementById("mail_input").className = "vtmn-text-input vtmn-text-input--error";
                document.getElementById("helper_mail").className = "vtmn-text-input_helper-text vtmn-text-input_helper-text--error";
                validate = false;
            }else{
                document.getElementById("mail_input").className = "vtmn-text-input vtmn-text-input--valid";
                document.getElementById("helper_mail").className = "vtmn-text-input_helper-text";
            }

            if(pwd.value.length < 8 || pwd.value.length > 16){
                document.getElementById("pwd_input").className = "vtmn-text-input vtmn-text-input--error";
                document.getElementById("helper_pwd").className = "vtmn-text-input_helper-text vtmn-text-input_helper-text--error";
                validate = false;
            }else{
                document.getElementById("pwd_input").className = "vtmn-text-input vtmn-text-input--valid";
                document.getElementById("helper_pwd").className = "vtmn-text-input_helper-text";
            }

            if(validate){
                alert("TODO : Votre publication est en cours de traitement et de validation");

            }else{
                alert("Attention, des champs obligatoires sont manquants");
            }
        }
    </script>
</body>
</html>