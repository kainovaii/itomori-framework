<?php
namespace App\src\Helper;

class Form
{
    /**
     * @var string 
     */
    private $formCode = '';

    /**
     * @return string
     *
     */
    public function create()
    {
        return $this->formCode;
    }

    /**
     * validate
     *
     * @param array form
     * @param array champs
     *
     * @return void
     */
    public static function validate(array $form, array $champs)
    {
        foreach($champs as $champ){
            if(!isset($form[$champ]) || empty($form[$champ])){
                return false;
            }
        }
        return true;
    }
    
    /**
     * addAttribute
     *
     * @param array attributs
     *
     * @return string
     */
    private function addAttribute(array $attributs): string
    {
        $str = '';

        $courts = ['checked', 'disabled', 'readonly', 'multiple', 'required', 'autofocus', 'novalidate', 'formnovalidate'];

        foreach($attributs as $attribut => $valeur){

            if(in_array($attribut, $courts) && $valeur == true){
                $str .= " $attribut";
            }else{
                $str .= " $attribut=\"$valeur\"";
            }
        }

        return $str;
    }
    
    /**
     * startForm
     *
     * @param string methode
     * @param string action
     * @param array attributs
     *
     * @return undefined
     */
    public function startForm(string $methode = 'post', string $action = '#', array $attributs = []): self
    {
        $this->formCode .= "<form action='$action' method='$methode'";

        $this->formCode .= $attributs ? $this->addAttribute($attributs).'>' : '>';

        return $this;
    }
    
    /**
     * endForm
     *
     * @return undefined
     */
    public function endForm():self
    {
        $this->formCode .= '</form>';
        return $this;
    }

    public function addLabelFor(string $for, string $texte, array $attributs = []):self
    {
        $this->formCode .= "<label for='$for'";

        $this->formCode .= $attributs ? $this->addAttribute($attributs) : '';

        $this->formCode .= ">$texte</label>";

        return $this;
    }
    
    /**
     * addInput
     *
     * @param string type
     * @param string nom
     * @param array attributs
     *
     * @return undefined
     */
    public function addInput(string $type, string $nom, array $attributs = []):self
    {
        $this->formCode .= "<input type='$type' name='$nom'";

        $this->formCode .= $attributs ? $this->addAttribute($attributs).'>' : '>';

        return $this;
    }
    
    /**
     * addTextarea
     *
     * @param string nom
     * @param string valeur
     * @param array attributs
     *
     * @return undefined
     */
    public function addTextarea(string $nom, string $valeur = '', array $attributs = []):self
    {
        $this->formCode .= "<textarea name='$nom'";

        $this->formCode .= $attributs ? $this->addAttribute($attributs) : '';

        $this->formCode .= ">$valeur</textarea>";

        return $this;
    }
    
    /**
     * addSelect
     *
     * @param string nom
     * @param array options
     * @param array attributs
     *
     * @return undefined
     */
    public function addSelect(string $nom, array $options, array $attributs = []):self
    {
        $this->formCode .= "<select name='$nom'";

        $this->formCode .= $attributs ? $this->addAttribute($attributs).'>' : '>';

        foreach($options as $valeur => $texte){
            $this->formCode .= "<option value=\"$valeur\">$texte</option>";
        }

        $this->formCode .= '</select>';

        return $this;
    }
    
    /**
     * addButton
     *
     * @param string texte
     * @param array attributs
     *
     * @return undefined
     */
    public function addButton(string $texte, array $attributs = []):self
    {
        $this->formCode .= '<button ';

        $this->formCode .= $attributs ? $this->addAttribute($attributs) : '';

        $this->formCode .= ">$texte</button>";

        return $this;
    }
}