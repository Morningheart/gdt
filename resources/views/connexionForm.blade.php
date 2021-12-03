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
    <h1>Connexion</h1>

    <form method="POST" name="Connexion" action="javascript:verify_form();">


        <p style="margin:15px" class="vtmn-text-input_helper-text"><strong>Tous les champs contenant une * sont obligatoire</strong></p>

        <input type="submit" name="Valider">
    </form> 

    <script type="text/javascript">
        function verify_form(){
            var validate = true;

            if(validate){
                alert("TODO : Votre publication est en cours de traitement et de validation");

            }else{
                alert("Attention, des champs obligatoires sont manquants");
            }
        }
    </script>
</body>
</html>