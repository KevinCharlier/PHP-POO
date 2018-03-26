<?php

/**
 * Class Form
 * Permet de générer un formulaire
 */

class Form  {

    /**
     * @var array Données utilisées par le formulaire
     */
    private $data;

    /**
     * @var string Tag utilisé pout entourer les champs
     */
    public $surround ='p';

    /**
     * @param array $data Données utilisées par le formulaire
     */
    public function __construct($data = array()){

        $this->data = $data;
    }

    /**
     * @param $html string Code HTML à entourer
     * @return string
     */
    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
        
    }

    /**
     * @param $index string index de la valeur à récupérer
     * @return string
     */
    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */
    public function text($name){
        return $this->surround(
            '<input placeholder="Entrer votre nom ici" type="text" name="'.$name.'" value="'.$this->getValue($name).'">');

    }

    public function select(){
        return $this->surround(
        '<select>
            <option value="H">Homme</option>
            <option value="F">Femme</option>
        </select>');

    }

    public function textarea(){
        return $this->surround(
        '<textarea rows="4" cols="50"></textarea>');

    }

    public function radio(){
        return $this->surround(
        '<p>Veuillez choisir la meilleure méthode pour vous contacter :</p>
        <div>
        <input type="radio" id="contactChoice1"
         name="contact" value="email">
        <label for="contactChoice1">Email</label>
    
        <input type="radio" id="contactChoice2"
         name="contact" value="telephone">
        <label for="contactChoice2">Téléphone</label>
    
        <input type="radio" id="contactChoice3"
         name="contact" value="courrier">
        <label for="contactChoice3">Courrier</label>
      </div>');

    }

    public function checkbox(){
        return $this->surround(
            ' <legend>Veuillez sélectionner vos intérêts :</legend>
            <div>
              <input type="checkbox" id="coding" name="interest" value="coding">
              <label for="coding">Développement</label>
            </div>
            <div>
              <input type="checkbox" id="music" name="interest" value="music">
              <label for="music">Musique</label>
            </div>'
        );
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }

}

?>