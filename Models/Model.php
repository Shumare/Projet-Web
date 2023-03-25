<?php
namespace Website\Models;

use Website\Main\Db;

class Model extends Db
{
    protected $table;
    protected $cookie_key;
    private  $db;
     
    public function findAll()
    {
        $query = $this->requete('SELECT * FROM '.$this->table);
        return $query->fetchAll();
    }


    public function findBy(array $criteres)
    {
        $champs= [];
        $valeurs =[];

        foreach($criteres as $champ=> $valeur)
        {
            $champs[]="$champ = ?";
            $valeurs[]= $valeur;
        }
        // On transforme le tableau en chaîne de caractères séparée par des AND
        $liste_champs = implode(' AND ', $champs);

        // On exécute la requête
        return $this->requete("SELECT * FROM {$this->table} WHERE $liste_champs", $valeurs)->fetchAll();
    }


    public function find(int $id)
    {
        return $this->requete("SELECT * FROM $this->table WHERE  id =$id")->fetch();
    }


    public function create(Model $model)
    {
        $champs = [];
        $inter = [];
        $valeurs = [];
    
        // On boucle pour éclater le tableau
        foreach($model as $champ => $valeur){
            // INSERT INTO annonces (titre, description, actif) VALUES (?, ?, ?)
            if($valeur !== null && $champ != 'db' && $champ != 'table'){
                $champs[] = $champ;
                $inter[] = "?";
                $valeurs[] = $valeur;
            }
        }
    
        // On transforme le tableau "champs" en une chaine de caractères
        $liste_champs = implode(', ', $champs);
        $liste_inter = implode(', ', $inter);
    
        // On exécute la requête
        return $this->requete('INSERT INTO '.$this->table.' ('. $liste_champs.')VALUES('.$liste_inter.')', $valeurs);
    }


    public function update($id, Model $model)
{
    $champs = [];
    $valeurs = [];

    // On boucle pour éclater le tableau
    foreach($model as $champ => $valeur){
        // UPDATE annonces SET titre = ?, description = ?, actif = ? WHERE id= ?
        if($valeur !== null && $champ != 'db' && $champ != 'table'){
            $champs[] = "$champ = ?";
            $valeurs[] = $valeur;
        }
    }
    $valeurs[] = $id;

    // On transforme le tableau "champs" en une chaine de caractères
    $liste_champs = implode(', ', $champs);

    // On exécute la requête
    return $this->requete('UPDATE '.$this->table.' SET '. $liste_champs.' WHERE id = ?', $valeurs);
}

public function delete(int $id){
    return $this->requete("DELETE FROM {$this->table} WHERE id = ?", [$id]);
}


    public function requete(string $sql, array $attributs = null)
    {
        // On récupère l'instance de Db
        $this->db = Db::getInstance();
    
        // On vérifie si on a des attributs
        if($attributs !== null){
            // Requête préparée
            $query = $this->db->prepare($sql);
            $query->execute($attributs);
            return $query;
        }else{
            // Requête simple
            return $this->db->query($sql);
        }
    }

	/**
	 * @return mixed
	 */
	public function getCookie_key() {
		return $this->cookie_key;
	}
	
	/**
	 * @param mixed $cookie_key 
	 * @return self
	 */
	public function setCookie_key(): self {
		$this->cookie_key = 'dgrqrg65z4ef684zeef62a';
		return $this;
	}
}