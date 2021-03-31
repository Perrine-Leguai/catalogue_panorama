<?php
require_once(__DIR__.'/User.php');

    class Student {
        private $id ;
        private $id_user ;
        private $nickname ;
        private $bio ;
        private $facebook ;
        private $twitter ;
        private $website ;


        // transform object to a string
        function __toString()
        {
            return  "[id] :" . $this->id .
                    "[id_user] :" . $this->id_user .
                    "[nickname] :" . $this->nickname  .
                    "[bio] :" . $this->bio . 
                    "[facebook] :" . $this->facebook  .
                    "[twitter] :" . $this->twitter  .
                    "[website] :" . $this->website ;
        }


        /**
         * Get the value of id
         *
         * @return $id
         */
        public function getId() : int
        {
                return $this->id;
        }


        /**
         * Get the value of id_user
         *
         * @return $id_user
         */
        public function getIdUser() : int
        {
                return $this->id_user;
        }

        /**
         * Set the value of id_user
         *
         * @param $id_user
         *
         * @return self
         */
        public function setIdUser(int $id_user) : self
        {
                $this->id_user = $id_user;

                return $this;
        }

        /**
         * Get the value of nickname
         *
         * @return $nickname
         */
        public function getNickname() : ?string
        {
                return $this->nickname;
        }

        /**
         * Set the value of nickname
         *
         * @param $nickname 
         *
         * @return self
         */
        public function setNickname(?string $nickname) : self
        {
                $this->nickname = $nickname;

                return $this;
        }

        

        /**
         * Get the value of bio
         *
         * @return $bio
         */
        public function getBio() : ?string 
        {
                return $this->bio;
        }

        /**
         * Set the value of bio
         *
         * @param $bio
         *
         * @return self
         */
        public function setBio(?string $bio) : self
        {
                $this->bio = $bio;

                return $this;
        }

        /**
         * Get the value of facebook
         *
         * @return $facebook
         */
        public function getFacebook() :?string
        {
                return $this->facebook;
        }

        /**
         * Set the value of facebook
         *
         * @param $facebook 
         *
         * @return self
         */
        public function setFacebook(?string $facebook) : self
        {
                $this->facebook = $facebook;

                return $this;
        }

        /**
         * Get the value of twitter
         *
         * @return $twitter
         */
        public function getTwitter() :?string
        {
                return $this->twitter;
        }

        /**
         * Set the value of twitter
         *
         * @param $twitter 
         *
         * @return self
         */
        public function setTwitter(?string $twitter) : self
        {
                $this->twitter = $twitter;

                return $this;
        }

        /**
         * Get the value of website
         *
         * @return $website
         */
        public function getWebsite() : ?string
        {
                return $this->website;
        }

        /**
         * Set the value of website
         *
         * @param $website
         *
         * @return self
         */
        public function setWebsite(?string $website) : self
        {
                $this->website = $website;

                return $this;
        }

    }
?>