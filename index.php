<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>zaklady oop</title>
    </head>
    <body>
    <?php
      
        require 'tracy/tracy.phar';
        use Tracy\Debugger;
        
        class User {
           private $cisloPrivateFilipNeumann;
           private $stringKratkyPrivateFilipNeumann;
           protected $cisloProtectedFilipNeumann;
           protected $stringKratkyProtectedFilipNeumann;
           protected $stringDlouhyProtectedFilipNeumann;
           public $cisloPublicFilipNeumann = 27;
           public $stringKratkyPublicFilipNeumann = 'ahoj';
           public $stringDlouhyPublicFilipNeumann = 'jak se mas?';
           Public $stringSpolecnyPublicFilipNeumann = 'ahoj, jak se mas?';
           public $ovocePublicFilipNeumann = 'banan';
        
           public function __construct() {
           }
           
           public function setcisloPrivateFilipNeumann($cisloPrivateFilipNeumann){
           return $cisloPrivateFilipNeumann;
           }    
        
           public function setstringKratkyPrivateFilipNeumann($stringKratkyPrivateFilipNeumann){
           return $stringKratkyPrivateFilipNeumann;    
           } 

           public function getcisloPublicFilipNeumann(){
           return $this->cisloPublicFilipNeumann;
           } 
        
           public function getstringKratkyPublicFilipNeumann(){
           return $this->stringKratkyPublicFilipNeumann;    
           }
           
           public function getstringDlouhyPublicFilipNeumann(){
           return $this->stringDlouhyPublicFilipNeumann;    
           }
           
           public function getstringSpolecnyPublicFilipNeumann(){
           return $this->stringSpolecnyPublicFilipNeumann;
           }        
        
          public function getovocePublicFilipNeumann(){
          return $this->ovocePublicFilipNeumann;    
          }
         }
        
        $User = new User;
        
        echo "<br>";
        echo $User->setcisloPrivateFilipNeumann(190);
        
        echo "<br>";
        echo $User->setstringKratkyPrivateFilipNeumann('cau');
                
        echo "<br>";
        echo $User->getcisloPublicFilipNeumann();
        
        echo "<br>";
        echo $User->getstringKratkyPublicFilipNeumann();
                
        echo "<br>";
        echo $User->getstringDlouhyPublicFilipNeumann();
        
        echo "<br>";
        echo $User->getstringDlouhyPublicFilipNeumann();
        
        echo "<br>";
        echo $User->getstringSpolecnyPublicFilipNeumann();
                
        echo "<br>";
        echo $User->getovocePublicFilipNeumann();
                
        var_dump($User);    
                
                
    ?>
    </body
    </html>

