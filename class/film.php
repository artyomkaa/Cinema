<?php 


class film {
    public $id;
    public $titre;
    public $resume;
    public $duree;
    public $public_cible;
    public $sample;
    public $img;
	
    
    function user() {
        $id = 0;
        $titre = 0;
        $resume = 0;
        $duree = 0;
        $public_cible = 0;
        $sample = 0;
        $img = 0;
    }

    function user_par($t1, $t2, $t3, $t4, $t5, $t6, $t7) {
        $id = $t1;
        $titre = $t2;
        $resume = $t3;
        $duree = $t4;
        $public_cible = $t5;
        $sample = $t6;
        $img = $t6;
    }

    function getFilm($par){
        $q = "SELECT * FROM film WHERE id_film = ".$par;
        $res = mysql_query($q);
		$data = mysql_fetch_array($res);
		$this->id = $data[0];
		$this->titre = $data[1];
		$this->resume = $data[2];
		$this->duree = $data[3];
		$this->public_cible = $data[4];
		$this->sample = $data[5];
		$this->img = $data[6];
		
   }
   
   function getFilm_titre($par){
        $q = "SELECT * FROM film WHERE titre = ".$par;
        $res = mysql_query($q);
		$data = mysql_fetch_array($res);
		$this->id = $data[0];
		$this->titre = $data[1];
		$this->resume = $data[2];
		$this->duree = $data[3];
		$this->public_cible = $data[4];
		$this->sample = $data[5];
		$this->img = $data[6];
   }
   

}

?>