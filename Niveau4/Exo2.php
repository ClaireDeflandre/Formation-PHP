<<?php
class ville
{
	private $nom;
	private $departement;

	// c'est comme ça qu'on déclare le constructeur de la classe

	public function __construct($nom, $departement) 
	{
		$this->nom=$nom;
		$this->departement=$departement;
	}

	public function getinfo()
	{
		return "La ville de $this->nom est dans le département : $this->departement <br/>";
	}
}

//Création d'objets
$ville1 = new Ville("Nantes","Loire Atlantique");
$ville2 = new Ville("Grasse", "Alpes Maritimes");

echo $ville1->getinfo();
echo $ville2->getinfo();
?>