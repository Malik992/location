
<?php

    namespace \location\das; 
    use \PDO;
    class Propriete
    
        {
    var $id;
    var $numPiece;
    var $nomPro;
    var $telPro;
    private $bdd;
    private function getConnection(){
        try{
            if( $this->bdd==null)
            {
                $bdd = new PDO('mysql:host=localhost;dbname=bdlocation;charset=utf8', 'root', 'malik92');
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
            }
           
           }  
           catch(Exception $e)
              {
                die('Erreur : '.$e->getMessage());
              }

    }


    function find()
    {
        $this->getConnexion();
    $req = $this->bdd->query("SELECT * FROM proprietaire WHERE numPiece='$numPiece'");
    return $req;
    }



    function update()
    {
        $this->getConnexion();
        $req= $this->bdd->prepare("UPDATE proprietaire SET telPro='$telPro WHERE numPiece='$numPiece'");
        $data =$req->execute(
            array(
            'telPro'=>$this->$telPro,
        )
        );

        return $data;
        
    }
    function allPro()
    {
        $this->getConnexion();
        $sql=" SELECT * FROM proprietaire";
        $donnees=$this->bdd->query($sql);
        return $donnees;

    }


}

?>