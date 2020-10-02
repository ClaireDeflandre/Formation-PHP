<?php
class form
{
	private $code; // code complet du formulaire
	private $codeinit; // code de l'entete du formulaire : balises form + fielset + legend
	private $codetext ; // code de chaque input
	private $codesubmit; // code du bouton submit

	public function __construct($action, $titre, $method="post")
	{
		$this->codeinit ="<form action=\"$action\" method=\"$methode\">";
		$this->codeinit.="<fieldset><legend><b>$titre</b></legend>";
	}

	//********************************************
	public function settext($name, $libelle, $method="post")
	{
		$this->codetext.="<b>$libelle</b><input type=\"text\" name=\"$name\" /><br /><br / >" ;
		// notez que si vous appelez plusieurs fois la fonction settext, les input se concatènent
	}

	//************************************************
	public function setsubmit($name="envoi", $value="Envoyer")
	{
		$this->codesubmit= "<input type=\"submit\" name=\"$name\" value=\"Envoyer\"/><br />";
	}
	
	//**************************
	public function getform()
	{
		$this->code="";
		$this->code.= $this->codeinit;
		$this->code.= $this->codetext;
		$this->code.= $this->codesubmit;
		$this->code.="</fieldset></form>";
		
		echo $this->code;
	}
}
?>


Fichier de test incluant le fichier précédent et qui creé un objet de type form.
<?php
include('class_form.php');
//***************************
$myform = new form("traitement.php","Accès au site","post");
$myform->settext("nom","Votre nom :  ");
$myform->settext("code","Votre code : ");
$myform->setsubmit();
$myform->getform();
?>