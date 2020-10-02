<?php


class ville
{
	public $nom;
	public $departement;

	public function getinfo()
	{
		return "La ville de $this->nom est dans le département : $this->departement <br/>"; // réfléchir à ce que cette méthode doit renvoyer
	}
}

$ville1 = new Ville();
$ville1 ->nom = "Nantes";
$ville1 ->departement = "Loire-Atlantique";

$ville2 = new Ville();
$ville2 ->nom = "Grasse";
$ville2 ->departement = "PACA";

$ville3 = new Ville();
$ville3 ->nom = "Montpellier";
$ville3 ->departement = "Herault";


echo $ville1->getinfo();
echo $ville2->getinfo();

?>