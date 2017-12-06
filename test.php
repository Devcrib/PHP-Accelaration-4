<?php
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

        public function singleUser ($index = '') {
            if($index === '') {
                return $this->singleuser = 'You selected no user';
            }
            return $this->singleuser = $this->user[$index];
        }

        // public function getKeyVal($key, $val) {
        //     $specified = array();
        //     for($i = 0; $i < 500; $i++) {
        //         if($this->singleUser($i)->$key == $val) {
        //             echo $this->singleUser($i)->$key;
        //             array_push($specified, $this->singleuser($i));
        //         }
        //     }
        //     return $specified;    
        // }

    }


    $allUsers = new User('Appendix');
//    var_dump($allUsers->getAllUsers());

// for($i = 0; $i < 500; $i++) {
//     $currentUser = $allUsers->singleUser($i);
//     var_dump( $currentUser->tags). '<br>';
// }

//($allUsers->getKeyVal('isActive', 'true'));




