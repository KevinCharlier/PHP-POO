<?php 

    class Voiture {
        /* Propriétés */
            private $imma;
            private $date;
            public $km = 0;
            private $modele;
            private $marque;
            public $couleur;
            public $poids;
            public $pays;
            public $usage;
            public $dispo;

        /* Construct */
            function __construct ($imma, $date, $km, $marque, $modele, $couleur, $poids){

                $this->imma = $imma;
                $this->date = $date;
                $this->km = $km;
                $this->marque = $marque;
                $this->modele = $modele;
                $this->couleur = $couleur;
                $this->poids = $poids;
            }
        
        /* Méthodes */

            /*--- Disponibilité ---*/
            public function dispo(){
                if ($this->marque === 'Audi')
                {
                  $this->dispo = 'Reserved';
                  return $this->getDispo();
                }
                else
                {
                  $this->dispo = 'Free';
                  return $this->getDispo();
                }
            }
            public function getDispo(){
            return '<div class="dispo">' . $this->dispo . '</div>';
            }
            
            /*--- Usage ---*/
            public function usage(){
                if ($this->poids > 3500)
                {
                  $this->usage = 'Utilitaire';
                  return $this->getUsage();
                }
                else
                {
                  $this->usage = 'Commercial';
                  return $this->getUsage();
                }
            }
            public function getUsage(){
            return '<div class="dispo">' . $this->usage . '</div>';
            }

            /*--- Pays ---*/
            public function pays(){
                if (strpos($this->imma, "BE") === 0)
                {
                  $this->pays = 'Pays = BELGIQUE';
                  return $this->getPays();
                }
                elseif (strpos($this->imma, "FR") === 0)
                {
                  $this->pays = 'Pays = FRANCE';
                  return $this->getPays();
                }
                elseif (strpos($this->imma, "DE") === 0)
                {
                  $this->pays = 'Pays = ALLEMAGNE';
                  return $this->getPays();
                }
                else
                {
                  $this->pays = 'Pays = AUTRES';
                  return $this->getPays();
                }
              }
              public function getPays() {
                return '<div class="dispo">' . $this->pays . '</div>';
            }

            /*--- Kilométrage ---*/
            public function km(){
                if ($this->km < 100000)
                {
                  $this->km = 'Low';
                  return $this->getKm();
                }
                if ($this->km > 200000)
                {
                  $this->km = 'High';
                  return $this->getKm();
                }
                if ($this->km > 100000 && $km <= 200000)
                {
                  $this->km = 'Middle';
                  return $this->getKm();
                }
            }
            public function getKm(){
            return '<div class="dispo">' . $this->km . '</div>';
            }

            /*--- Age ---*/
            public function age(){
                $now = new DateTime();
                $date_de_creation = new DateTime($this->date);
                $interval = $date_de_creation->diff($now);
                return $interval->format("<div class='dispo'>%Y années d'ancienneté</div>");
            }

            /*--- Display ---*/
            public function display(){
                if ($this->modele == 'R8') {
                    return '<div class="">
                                <div class="">
                                    <table class="spec">
                                        <th></th>
                                            <tr>
                                                <td>Moteur: V10 5,2 L</td>
                                            </tr>
                                            <tr>
                                                <td>Émissions CO₂: 6 600 kg/an</td>
                                            </tr>
                                            <tr>
                                                <td>Puissance max: 540 hp @ 7 800 tr/min (403 kW)</td>
                                            </tr>
                                            <tr>
                                                <td>Vitesse max: 320 km/h</td>
                                            </tr>
                                            <tr>
                                                <td>0-100 km/h: 3,5 s</td>
                                            </tr>
                                            <tr>
                                                <td>Consommation: 14,1 L/100km</td>
                                            </tr>
                                            <tr>
                                                <td><img class="" src="img/2013_audi_r8_v10_1_1920x1080.jpg" alt="Audi R8 Coupe"></td>
                                            </tr>
                                    </table>
                                </div> 
                            </div>'
                    ;
                }

                if ($this->modele == 'LaFerrari') {
                    return '<div class="">
                                <div class="">
                                    <table class="spec">
                                        <th></th>
                                            <tr>
                                                <td>Moteur: V12 6,3 L</td>
                                            </tr>
                                            <tr>
                                                <td>Émissions CO₂: 6 600 kg/an</td>
                                            </tr>
                                            <tr>
                                                <td>Puissance max: 800 hp @ 9 000 tr/min (597 kW)</td>
                                            </tr>
                                            <tr>
                                                <td>Vitesse max: 350 km/h</td>
                                            </tr>
                                            <tr>
                                                <td>0-100 km/h: 2,6 s</td>
                                            </tr>
                                            <tr>
                                                <td>Consommation: n.d.</td>
                                            </tr>
                                            <tr>
                                                <td><img class="" src="img/ferrari_laFerrari_hybride_officiel_porte_papillon.jpg" alt="Ferrari LaFerrari"></td>
                                            </tr>
                                    </table>
                                </div> 
                            </div>'
                    ;
                }
                else
                {
                  return '<div class=""></br>Voiture introuvable</div>'
                    ;
                }
            }
    }





?>