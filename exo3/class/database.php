<?php 

    class Database {
        /* Propriétés */
        private $pdo;

        /* Méthodes */
        public function __construct($database_name, $login, $password, $host = 'localhost') {
            $this->pdo = new PDO("mysql:dbname=$database_name;host=$host", $login, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // rapport d'erreurs &  émition d'une exception
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // définit le mode de récupération par défaut & retourne un objet anonyme avec les noms de propriétés qui correspondent aux noms des colonnes retournés dans le jeu de résultats 
        }

        public function query($query, $params = false) {
            if ($params){
            $req = $this->pdo->prepare($query);
            $req->execute($params);
            }
            else {
                $req = $this->pdo->query($query);
            }
            return $req;
        }
    }

?>
