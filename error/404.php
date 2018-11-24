
<?php include '..\header.php' ?>

<h5>
<?php
$arr = [1,2,3,4,5];

class Venzy{
    
    //public $opisanie = 60 * 60 * 24;

    final static function describeYourself(){
        echo 'uk';
        //echo self::$opisanie; // tova nqma da raboti poneje ne e stati4no property
    }
        
    final function sweet(){
        $this->opisanie = 'haha';
        echo $this->opisanie;
    }
    
    function __set($property, $value){
    }
    function __get($property){
    }
    
}

$new = new Venzy;
//$new::describeYourself();
$new->sweet();


class Person {
    
    public $name = 'venzaaaaaaaaaaa';
    
    public function test() {
        echo 'test e uspeshen';
    }
}

class Employee extends Person {
    
    public $position = 4;
    
//    public function test(){
//        parent::test();
//        //echo 'az sum razlichennnnn';
//    }
    
}

//echo (new Employee)->test();

trait Logger 
{   
    
    public $property = 'az sum obshtestven';

    protected function log($logString){
        $className = __CLASS__;
        echo date("Y-m-d h:i:s", time()) . ": [{$className}] {$logString}";
    }
}

trait Logger2 
{   
    
    protected function log($logString){
        $className = __CLASS__;
        echo date(" Logger2 Y-m-d h:i:s", time()) . ": [{$className}] {$logString}";
    }
}

class User
{
    use Logger;
    public $name;
    
    function __construct($name = ''){
        $this->name = $name;
        $this->log("Created user '{$this->name}' <br>");
    }
    
    
    function __toString(){
        return $this->name;
    }
    
}
class UserGroup extends User
{
    use Logger;
    public $users = array();

//    public function log($neshto){
//      echo 'dsadasd';  
//    }
    function addUser(User $user){
        $this->users[] = $user;
        $this->log("Added user '{$user}' to group <br>");
    }
    
}

$group = new UserGroup;
$group->addUser(new User("Franklin"));
//var_dump(get_class_methods('UserGroup'),'<br>',get_parent_class('UserGroup'));
//var_dump(get_object_vars($group));
//var_dump(get_class_vars('UserGroup'));

var_dump($_SERVER);
?>
    
</h5>
<div class="Error">
   <div class="Error__block">
        <img src="../images/error/404_v6.png" alt="404" width="400">
        <div class="Error__msg">404 Page not found!</div>
        <a href="../index.php">Back to home page</a>
    </div> 
    
</div>

        

<?php include '..\footer.php' ?>
