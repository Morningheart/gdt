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
        <button class="vtmn-btn">Inscription</button>
    </div>
    <div class="block vtmn-flex vtmn-flex-row vtmn-flex-wrap" style="display: flex; flex-direction: row; align-items: center; padding: 10px">
        <button class="vtmn-btn">Connexion</button>
    </div>
</div>