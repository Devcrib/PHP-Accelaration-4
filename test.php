<?


    class User {

        public $user;
        public $singleuser;

        public function __construct($file)
        {
            $handle = file_get_contents($file);
            $this->user = json_decode($handle);
        }

        public function getAllUsers() {
            return $this->user;
        }

        public function singleUser ($index) {
            return $this->singleuser = $this->user[$index];
        }

        public function name() {
            if(isset($this->singleUser)) {
                return $this->singleUser->name;
            } else return false;
        }


    }

//
//    $allUsers = new User('Appendix');
////    var_dump($allUsers->getAllUsers());
//  $currentUser = $allUsers->singleUser(8);
// echo $currentUser->name . '<br>';
// echo $currentUser->email;






