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
    <h1>Ajout d'une publication</h1>

    <form method="POST" name="AddPublication" action="javascript:verify_form();">
        <div class="block" style="margin:15px">
            <div>
                <label class="vtmn-text-input_label">Titre</label>
                <div class="vtmn-text-input_container">
                    <input type="text" class="vtmn-text-input" id="title_input" placeholder="Placeholder Text">
                </div>
                <p class="vtmn-text-input_helper-text" id="helper_title">Ajouter un titre à votre sauvetage *</p>
            </div>
        </div>

        <div class="block" style="margin:15px">
            <div>
                <label class="vtmn-text-input_label">Description</label>
                <div class="vtmn-text-input_container">
                    <input type="text" class="vtmn-text-input" id="desc_input" placeholder="Placeholder Text">
                </div>
                <p class="vtmn-text-input_helper-text" id="helper_desc">Ajouter une description à votre sauvetage *</p>
            </div>
        </div>

        <div class="block" style="margin:15px">
            <div>
                <label class="vtmn-text-input_label">Date</label>
                <div class="vtmn-text-input_container">
                    <input type="text" class="vtmn-text-input" id="date_input" placeholder="Placeholder Text">
                </div>
                <p class="vtmn-text-input_helper-text" id="helper_date">Quelle est la date du sauvetage ?</p>
            </div>
        </div>

        <div class="block" style="margin:15px">
            <div>
                <label class="vtmn-text-input_label">Location</label>
                <div class="vtmn-text-input_container">
                    <input type="text" class="vtmn-text-input" id="location_input" placeholder="Placeholder Text">
                </div>
                <p class="vtmn-text-input_helper-text" id="helper_location">Quelle est la localisation du sauvetage ?</p>
            </div>
        </div>

        <div class="block" style="margin:15px">
            <div>
                <label class="vtmn-text-input_label">Document</label>
                <div class="vtmn-text-input_container">
                    <input type="text" class="vtmn-text-input" id="doc_input" placeholder="Placeholder Text">
                </div>
                <p class="vtmn-text-input_helper-text" id="helper_doc">Avez-vous un document complémentaire que vous souhaiteriez partager ?</p>
            </div>
        </div>

        <div class="block" style="margin:15px">
            <div>
                <label class="vtmn-text-input_label">Image</label>
                <div class="vtmn-text-input_container">
                    <input type="text" class="vtmn-text-input" id="img_input" placeholder="Placeholder Text">
                </div>
                <p class="vtmn-text-input_helper-text" id="helper_img">Auriez-vous une image du sauvetage ?</p>
            </div>
        </div>

        <p style="margin:15px" class="vtmn-text-input_helper-text"><strong>Tous les champs contenant une * sont obligatoire</strong></p>

        <input type="submit" name="Valider">
    </form>

    <script type="text/javascript">
        function verify_form(){
            var title = document.getElementById("title_input");
            var desc = document.getElementById("desc_input");
            var validate = true;

            if(title.value.split(" ").join() == ""){
                document.getElementById("title_input").className = "vtmn-text-input vtmn-text-input--error";
                document.getElementById("helper_title").className = "vtmn-text-input_helper-text vtmn-text-input_helper-text--error";
                validate = false;
            }else{
                document.getElementById("title_input").className = "vtmn-text-input vtmn-text-input--valid";
                document.getElementById("helper_title").className = "vtmn-text-input_helper-text";
            }

            if(desc.value.split(" ").join() == ""){
                document.getElementById("desc_input").className = "vtmn-text-input vtmn-text-input--error";
                document.getElementById("helper_desc").className = "vtmn-text-input_helper-text vtmn-text-input_helper-text--error";
                validate = false;
            }else{
                document.getElementById("desc_input").className = "vtmn-text-input vtmn-text-input--valid";
                document.getElementById("helper_desc").className = "vtmn-text-input_helper-text";
            }

            if(validate){
                alert("TODO : Votre publication est en cours de traitement et de validation");

            }else{
                alert("Attention, des champs obligatoires sont manquants");
            }
        }
    </script>

    <?php
        if(isset($_POST["AddPublication"])){
            var_dump($_POST["AddPublication"]);
        }
    ?>
</body>
</html>