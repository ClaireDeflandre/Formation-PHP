<?php
class personne
{
	private $nom;
	private $prenom;
	private $adresse;

	//Constructeur
	public function __construct($nom, $prenom, $adresse)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
	}

	//Destructeur
	public function __destruct()
	{
		echo "<script type=\"text/javascript\">alert('La personne nommée $this->prenom $this->nom \\n est supprimée de vos contacts')</script>";
	}

	public function getPersonne()
	{
        echo "$this->prenom $this->nom <br/> $this->adresse <br/>";
	}

	public function setadresse($adresse)
	{
		$this->adresse=$adresse;
	}
}

//Création d'objets
$client = new personne("Geelsen","Jan"," 145 Rue du Maine Nantes");
echo $client->getPersonne();

//Modification de l'adresse
$client->setadresse("23 Avenue Foch Lyon");
echo $client->getPersonne();

//Suppression explicite du client, donc appel du destructeur
unset($client);
//Fin du script
echo "Fin du script";
?>