<?php
class NBAPlayer{
    public $name='Jordan';
    public $height = '198cm';
    public $weight = '98kg';
    public $team = 'bull';
    public $playerNumber = '23';
    public static $president = "David Stern";

    function __construct($name, $height, $weight, $team, $playerNumber){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        $this->team = $tram;
        $this->playerNumber = $playerNumber;
        echo "In NBAPlayerConstruct<br />";
    }

    function __destruct(){
       echo "Destroying" . $this->name . "<br />"; 
    }

    public function run(){
        echo "Running<br />";
    }

    public function jump(){
        echo "Jumping<br />";
    }
    public function shoot(){
        echo "Shooting<br />";
    }
    public static function changePresident($newPresdt){
        self::$president = $newPresdt; 
    }
}

$jordan = new NBAPlayer("Jordan","198cm", "98kg", "Bulls", "23");
echo $jordan->name.'<br />';
$jordan->run();
$jordan->jump();
$jordan->shoot();

$james = new NBAPlayer("James", "203cm", "120kg", "Cavaliers", "23");
echo $james->name."<br />";
$james1 = $james;
$james2 = &$james;
//$james1 = null;
//$james2 = null;
$james1->name = 'James new';
echo $james->name.'<br />';
$james2->name = 'James new2';
echo $james1->name.'<br />';
echo "From now on James will not be used.<br />";
echo $james->president."<br />";
echo NBAPlayer::$president."<br />";
?>
