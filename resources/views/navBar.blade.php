<div class="vtmn-flex">

    <?php
        if(/*$_SESSION["connected"]*/TRUE){
    ?>
        <div class="block vtmn-flex vtmn-flex-row vtmn-flex-wrap" style="display: flex; flex-direction: row; align-items: center; padding: 10px">
            <a href="addPubliFormButton">
                <button class="vtmn-btn">Ajouter une publication</button>
            </a>
        </div>
    <?php
        }
    ?>
    <div class="block vtmn-flex vtmn-flex-row vtmn-flex-wrap" style="display: flex; flex-direction: row; align-items: center; padding: 10px">
        <a href="InscriptionFormButton">
            <button class="vtmn-btn">Inscription</button>
        </a>
    </div>
    <div class="block vtmn-flex vtmn-flex-row vtmn-flex-wrap" style="display: flex; flex-direction: row; align-items: center; padding: 10px">
        <a href="connexionFormButton">
            <button class="vtmn-btn">Connexion</button>    
        </a>
    </div>
</div>