class film {
    public $id;
    public $titte;
    public $resume;
    public $duree;
    public $public_cible;
    public $sample;
    public $img;

    include("bd.php");
    
    function user() {
        $id = 0;
        $titte = 0;
        $resume = 0;
        $duree = 0;
        $public_cible = 0;
        $sample = 0;
        $img = 0;
    }

    function user_par($t1, $t2, $t3, $t4, $t5, $t6, $t7) {
        $id = $t1;
        $titte = $t2;
        $resume = $t3;
        $duree = $t4;
        $public_cible = $t5;
        $sample = $t6;
        $img = $t6;
    };

    function getFilm($par){
        $q = "SELECT * FROM film WHERE id = ".$par;
        $res = mysql_query($q,$db);
	$data = mysql_fetch_array($result2);     
   };
  

}

?>