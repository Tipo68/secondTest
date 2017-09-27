<?php
if(isset($_POST['sendComment'])){
    require_once("../model/model.php");
    $model = new avisModel();
    echo $model->sendMessage($_POST['pseudo'], $_POST['mail'], $_POST['commentaire'], $_POST['note']);
}

if(isset($_POST['triDate'])){
    require_once("../model/model.php");
    $model = new avisModel();
    echo $model->getComment("date", $_POST['sort']);
}

if(isset($_POST['triNote'])){
    require_once("../model/model.php");
    $model = new avisModel();
    echo $model->getComment("note", $_POST['sort']);
}

if(isset($_POST['noteSup'])){
    require_once("../model/model.php");
    $model = new avisModel();
    echo $model->getComment("date", "asc", $_POST['noteSup']);
}

class avisController{
    public function init(){
        require_once("./model/model.php");
        $model = new avisModel();
        echo $model->getComment();
        
        require("./view/accueil.php");
    }
}

?>