<?

class PlacesController {
  
    public function places() {
      require_once("models/Mark.php");
      $marks = Mark::getAll();
      
      require_once("views/places.php");
      require_once("views/template.php");
    }
    
    public function markPage($top) {
      require_once("models/Mark.php");
      $mark = Mark::getByTop($top);
      
      if(isset($mark)) {
        require_once('views/markPage.php');
      } else {
        require_once('views/mark404.php');
      }
      
      require_once("views/template.php");
    }
     
}