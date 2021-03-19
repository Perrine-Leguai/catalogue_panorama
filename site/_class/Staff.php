<?php
require_once(__DIR__.'/User.php');


    class Staff {
        private $id;
        private $id_user;

        // transform object to a string
        function __toString()
        {
            return  "[id] :" . $this->id .
                    "[id_user] :" . $this->id_user ;
        }
        
        /**
         * Get the value of id
         */
        public function getIdStaff() : int
        {
                return $this->id;
        }


        /**
         * Get the value of id_user
         */
        public function getIdUser() :int
        {
                return $this->id_user;
        }

        /**
         * Set the value of id_user
         *
         * @return self
         */
        public function setIdUser(int $id_user) : self
        {
                $this->id_user = $id_user;

                return $this;
        }
    }
?>