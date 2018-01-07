<?php
  namespace \location\das; 
  use \PDO;
  use \proprietaire;
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





?>