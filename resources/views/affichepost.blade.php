<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT `idPost`, `posText` FROM `posts` WHERE `idPost`= $id";
        $results = mysqli_query($db,$sql);
        $data = [];
        while ($row=mysqli_fetch_assoc($results)) {
            $data[] = $row;
        }
        for ($i=0; $i < count($data); $i++) { 
            $data['data'] = explode("!", $data['data']);
        }
        echo $data;
    }
    else{
        echo "<h1>Vous n'êtes pas sur un post</h1>";
        echo "<h2>ERREUR 404, not found !</h2>";

        echo "<h1>D'autres Profils :</h1>";
        $sql = "SELECT `idPost`, `posText` FROM `posts` WHERE 1 LIMIT 5";
        $results = mysqli_query($db,$sql);
        $data = [];
        while ($row=mysqli_fetch_assoc($results)) {
            $data[] = $row;
        }
        for ($i=0; $i < count($data); $i++) { 
            $data['data'] = explode("!", $data['data']);
        }
        echo $data;
    }

?>