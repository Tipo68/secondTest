<?php
class avisModel{
    public function sendMessage($pseudo, $mail, $commentaire, $note){
        $json   = array();
        try
        {
	        $bdd    = new PDO('mysql:host=localhost;dbname=avisfizzup;charset=utf8', 'root', '');
            
            $req = $bdd->prepare('INSERT INTO commentaire(pseudo, mail, commentaire, date, note) VALUES(:pseudo, :mail, :commentaire, NOW(), :note)');
            $req->execute(array(
                'pseudo'        => $pseudo,
                'mail'          => $mail,
                'commentaire'   => $commentaire,
                'note'          => $note,
            ));

            $json['redirect'] = "index.php";
        }
        catch (Exception $e)
        {
            $json['error'] = 'Erreur : ' . $e->getMessage();
        }

        return json_encode($json);
    }

    public function getComment($tri = "date", $sort = "asc", $noteSup = null){
        $avis = "";
        
        $bdd    = new PDO('mysql:host=localhost;dbname=avisfizzup;charset=utf8', 'root', '');
        
        if($tri == "date" && !isset($noteSup)){
            if($sort == "asc"){
                $req = $bdd->query('SELECT * FROM commentaire ORDER BY date ASC');
            }elseif($sort == "desc"){
                $req = $bdd->query('SELECT * FROM commentaire ORDER BY date DESC');
            }
        }elseif($tri == "note" && !isset($noteSup)){
            if($sort == "asc"){
                $req = $bdd->query('SELECT * FROM commentaire ORDER BY note ASC');
            }elseif($sort == "desc"){
                $req = $bdd->query('SELECT * FROM commentaire ORDER BY note DESC');
            }
        }elseif(isset($noteSup)){
            $req = $bdd->query('SELECT * FROM commentaire WHERE note >= '. $noteSup .' ORDER BY note ASC');
        }
        
        while ($donnees = $req->fetch()){
            $note = "";
            for($i = 0; $i < 5; $i++){
                if($i < $donnees['note']){
                    $note .= '<i class="fa fa-star" aria-hidden="true"></i>';
                }else{
                    $note .= '<i class="fa fa-star-o" aria-hidden="true"></i>';
                }
            }
            
            $avis .= '<div class="avis"><span class="date">'. $donnees['date'] .'</span><div class="pseudo">' . $donnees['pseudo'] . " " . $note . '</div>';
            $avis .= $donnees['commentaire'];
            $avis .= "</div>";
        }
        
        return $avis;
    }
}
?>