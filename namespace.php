<?php

    namespace \location\das; 
    use \PDO;
    class Proprietaire
    
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
// *****
class Bien

    {
        var $idBien;
        var $nomBien;
        var $adresse;
        var $montantLoc;
        var $commission;
        var $idtypeBien;
        var $idPro;
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
    


function addbien()
{
    $this->getConnection();
    // proprietaire::$this->getConnection();
    $trouv=proprietaire::find();
    if($trouv==1)
    {
        $sql="INSERT INTO Bien ('idBien','nomBien','adresse','montantLoc','commission','idtypeBien','idPro')
         VALUE (null, :nomBien,:adresse,:montantLoc,:commission,null,null)";
         $req=$this->bdd->prepare($sql);
         $donnees=$req->execut(array(
             'nombien'=>$this->nomBien,
             'adresse'=> $this->adresse,
             'montantLoc' =>$this->montantLoc,
             'commission'=>$this->commission,
         ));
         return $donnees;

    }
    else{
        proprietaire::addProprietaire();
        function addBien()
        {
            $this->getConnexion();
           $sql = "INSERT INTO Bien VALUES (null,?,?,?,?,?,?)";
            $req = $this->bdd->prepare($sql);
            $data = $req->execute(
                array('nombien'=>$this->nom,
                'adresse'=>$this->adresse,
                'montantLoc'=>$this->montantLoc,
                'commission'=>$this->commission,
            ));
            return $data;
        }
    }

}
function update()
{
    $this->getConnexion();
    $req=$this->bdd->prepare("UPDATE Bien SET nomBien='$nombien' WHERE $trouv=proprietaire::find()");
    $donnes=$req->execute(array('nombien=$this->nom'));
    return $donnees;
}

function findBien()
{
    $this->getConnexion();
    $req=$this->bdd->query("SELECT nomBien FROM Bien WHERE $trouv=proprietaire::find()");
return $req;
}


function lister()
{
    $this->getConnexion();
    $req=$this->bdd->query('SELECT nomBien FROM bien');
    return $req;
}

function findtype()
{
    $this->getConnexion();
    $req=('SELECT nombien FROM Bien WHERE idType==idBien');
    return $req;
}
    
}


// ******
class typeBien

    {

        var $idUti;
        var $nomCom;
        var $login;
        var $password;
         var $profil;
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
    

function strlen()
{
    echo "je suis  un type de bien <br/>";

    // add enregistre un type de bien et son proprietaire sil néxist pa
    // lister  les type bien on ne change pas de propriétaire
    // find by id 
    
}


}
$c= new typeBien; 
$c->  strlen();

// ******
class utilisateur

    {

        var $idUti;
        var $nomCom;
        var $login;
        var $password;
         var $profil;
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
    

function strlen()
{
    echo "je suis  un utilisateur <br/>";
    // add enregistre un utilisateur avec etat moin 1
    // activé desactivé un utilisateur 1-0

    // lister user 
    // log on permet de se logué login mot de passe avec la session et retourne l'utilisateur
    // change password
}


}
$d= new utilisateur; 
$d->  strlen();
?>

        