<?php 

class impot
{
    private $nom;
    private $revenu;

    private const $pauvre =0.15;
    private const $riche = 0.2;

    public function __construct ($nom,$revenu)
    {
        $this->nom=$nom;
        $this->revenu=$revenu;
      
    }

    public function afficheImpot()
    {
        return "Monsieur,Madame" $this->nom "votre impôt est de" .$this->calculImpot() "euros.";
    }

    public function calculImpot()
    {
        return $this->revenu*($this->revenu<15000?Impot::pauvre : Impot::riche);
    }

}