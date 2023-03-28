<?php
namespace Website\Models;

use Website\Models\Db;


class Model extends Db
{
    protected $table;
    protected  $currentPage;
    private  $db;
    protected $cookie_key;
    
    public function findAll()
    {
       
        $query = $this->requete("SELECT * FROM $this->table");
       
  
        return $query->fetchAll();
    }

    public function pagination(int $pageAct)
    {

        if(!isset($_COOKIE["currentPage"])){
            setcookie("currentPage",0);
            $currentPage=1;
        }else if($_COOKIE["currentPage"]<0 ){
            setcookie("currentPage",0);
            $currentPage=1;
        }else{
            setcookie("currentPage",$_COOKIE["currentPage"]+$pageAct);
            $currentPage=$_COOKIE['currentPage']+$pageAct;
        };

        $parPage=5;
        $premier = ($currentPage * $parPage) - $parPage;
        //echo "premier".$premier;
        if($premier<0){
            $premier=0;
        }

        $sql = $this->requete("SELECT COUNT(*) AS nb_articles FROM $this->table");
        $result=$sql->fetch();
        $nbArticles =(int) $result->nb_articles;
        $page = ceil($nbArticles/$parPage);
        //echo  " le $nbArticles ";
        //echo $page;
        $query = $this->requete("SELECT * FROM $this->table /*where comp_name='romain'*/ LIMIT $premier, $parPage");
        return $query->fetchAll();
    }
    public function paginationfilter(int $pageAct,string $string)
    {

        if(!isset($_COOKIE["currentPage"])){
            setcookie("currentPage",0);
            $currentPage=1;
        }else if($_COOKIE["currentPage"]<0 ){
            setcookie("currentPage",0);
            $currentPage=1;
        }else{
            setcookie("currentPage",$_COOKIE["currentPage"]+$pageAct);
            $currentPage=$_COOKIE['currentPage']+$pageAct;
        };

        $parPage=5;
        $premier = ($currentPage * $parPage) - $parPage;
        //echo "premier".$premier;
        if($premier<0){
            $premier=0;
        }

        $sql = $this->requete("SELECT COUNT(*) AS nb_articles FROM $this->table");
        $result=$sql->fetch();
        $nbArticles =(int) $result->nb_articles;
        $page = ceil($nbArticles/$parPage);
        //echo  " le $nbArticles ";
        //echo $page;
        //$query = $this->requete("SELECT * FROM $this->table where $string LIMIT $premier, $parPage");
        
        if($string == ""){
            $query = $this->requete("SELECT * FROM  (((company join internship on company.id = internship.id_company) join address on company.id = address.id_company) join city on address.id_city = city.id)join intership_date on intership_date.id = internship.id_date  LIMIT $premier, $parPage");
        }else{
            echo "bbbbbbbbbbb";
            echo $string;
            $query = $this->requete("SELECT * FROM  (((company join internship on company.id = internship.id_company) join address on company.id = address.id_company) join city on address.id_city = city.id)join intership_date on intership_date.id = internship.id_date where $string LIMIT $premier, $parPage");
        }
        
        // inter_activity='$query'
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
        return $this->requete("SELECT * FROM {$this->table} WHERE $liste_champs", $valeurs )->fetchAll();
    }


    public function find(int $id)
    {
        return $this->requete("SELECT * FROM $this->table WHERE  id =$id")->fetch();
    }

    public function findcandidate(int $id_intership)
    {
        return $this->requete("SELECT * FROM $this->table WHERE  id_intership =$id_intership")->fetch();
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
    public function findrecent()
    {
       
        $query = $this->requete("SELECT * FROM ($this->table JOIN internship on  internship.id_date = intership_date.id) ORDER BY dates DESC");
       
  
        return $query->fetchAll();
    }

    public function feedback_candidature()
    {
       
        $query = $this->requete("SELECT * FROM ($this->table JOIN internship on  internship.id = candidate.id_intership JOIN student on student.id = candidate.id_student join people on people.id = student.id_people) ");
       
  
        return $query->fetchAll();
    }
   
    public function paginationfilterpeople(int $pageAct,string $string)
    {

        if(!isset($_COOKIE["currentPage"])){
            setcookie("currentPage",0);
            $currentPage=1;
        }else if($_COOKIE["currentPage"]<0 ){
            setcookie("currentPage",0);
            $currentPage=1;
        }else{
            setcookie("currentPage",$_COOKIE["currentPage"]+$pageAct);
            $currentPage=$_COOKIE['currentPage']+$pageAct;
        };

        $parPage=5;
        $premier = ($currentPage * $parPage) - $parPage;
        //echo "premier".$premier;
        if($premier<0){
            $premier=0;
        }

        $sql = $this->requete("SELECT COUNT(*) AS nb_articles FROM $this->table");
        $result=$sql->fetch();
        $nbArticles =(int) $result->nb_articles;
        $page = ceil($nbArticles/$parPage);
        //echo  " le $nbArticles ";
        //echo $page;
        //$query = $this->requete("SELECT * FROM $this->table where $string LIMIT $premier, $parPage");
        
        if($string == ""){
            $query = $this->requete("SELECT * FROM  (people join account on people.id = account.id_people) join role on account.id_role = role.id LIMIT $premier, $parPage");
        }else{
            //echo "bbbbbbbbbbb";
            //echo $string;
            $query = $this->requete("SELECT * FROM  (people join account on people.id = account.id_people) join role on account.id_role = role.id where $string LIMIT $premier, $parPage");
        }
        
        // inter_activity='$query'
        return $query->fetchAll();
    }

    public function paginationfiltercompany(int $pageAct,string $string)
    {

        if(!isset($_COOKIE["currentPage"])){
            setcookie("currentPage",0);
            $currentPage=1;
        }else if($_COOKIE["currentPage"]<0 ){
            setcookie("currentPage",0);
            $currentPage=1;
        }else{
            setcookie("currentPage",$_COOKIE["currentPage"]+$pageAct);
            $currentPage=$_COOKIE['currentPage']+$pageAct;
        };

        $parPage=5;
        $premier = ($currentPage * $parPage) - $parPage;
        //echo "premier".$premier;
        if($premier<0){
            $premier=0;
        }

        $sql = $this->requete("SELECT COUNT(*) AS nb_articles FROM $this->table");
        $result=$sql->fetch();
        $nbArticles =(int) $result->nb_articles;
        $page = ceil($nbArticles/$parPage);
        //echo  " le $nbArticles ";
        //echo $page;
        //$query = $this->requete("SELECT * FROM $this->table where $string LIMIT $premier, $parPage");
        
        if($string == ""){
            $query = $this->requete("SELECT * FROM  (address join company on address.id_company = company.id) join city on address.id_city = city.id LIMIT $premier, $parPage");
        }else{
            //echo "bbbbbbbbbbb";
            //echo $string;
            $query = $this->requete("SELECT * FROM  (address join company on address.id_company = company.id) join city on address.id_city = city.id where $string LIMIT $premier, $parPage");
        }
        
        // inter_activity='$query'
        return $query->fetchAll();
    }
    public function findprofile(int $id)
    {
        if($_SESSION['user_role']=="tutor"||'admin'){
            $query = $this->requete("SELECT * FROM ((people  join tutor on tutor.id_people = people.id) join center on center.id = people.id_center)join promotion on promotion.id_tutor = tutor.id where id_people = $id");
        }
       if($_SESSION['user_role']=='student')
        $query = $this->requete("SELECT * FROM ((people join center on center.id = people.id_center) join student on student.id_people = people.id)join promotion on promotion.id = student.id_promotion  where id_people = $id");
       
  
        return $query->fetchAll()[0];
    }

    public function paginationfilterwish(int $pageAct,int $idpeop)
    {

        if(!isset($_COOKIE["currentPage"])){
            setcookie("currentPage",0);
            $currentPage=1;
        }else if($_COOKIE["currentPage"]<0 ){
            setcookie("currentPage",0);
            $currentPage=1;
        }else{
            setcookie("currentPage",$_COOKIE["currentPage"]+$pageAct);
            $currentPage=$_COOKIE['currentPage']+$pageAct;
        };

        $parPage=5;
        $premier = ($currentPage * $parPage) - $parPage;
        //echo "premier".$premier;
        if($premier<0){
            $premier=0;
        }

        $sql = $this->requete("SELECT COUNT(*) AS nb_articles FROM $this->table");
        $result=$sql->fetch();
        $nbArticles =(int) $result->nb_articles;
        $page = ceil($nbArticles/$parPage);
        //echo  " le $nbArticles ";
        //echo $page;
        //$query = $this->requete("SELECT * FROM $this->table where $string LIMIT $premier, $parPage");
        
        if($idpeop == ""){
            $query = $this->requete("SELECT * FROM  ((((((company join internship on company.id = internship.id_company) join address on company.id = address.id_company) join city on address.id_city = city.id)join intership_date on intership_date.id = internship.id_date)join stocked on stocked.id_intership=internship.id)join wishlist on wishlist.id=stocked.id_wishlist) join student on student.id=wishlist.id_student  LIMIT $premier, $parPage");
        }else{
            //echo "bbbbbbbbbbb";
            //echo $string;
            $query = $this->requete("SELECT * FROM  ((((((company join internship on company.id = internship.id_company) join address on company.id = address.id_company) join city on address.id_city = city.id)join intership_date on intership_date.id = internship.id_date)join stocked on stocked.id_intership=internship.id)join wishlist on wishlist.id=stocked.id_wishlist) join student on student.id=wishlist.id_student where id_people=$idpeop LIMIT $premier, $parPage");
        }
        
        // inter_activity='$query'
        return $query->fetchAll();
    }


    
}