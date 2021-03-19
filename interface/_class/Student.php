<?php
require_once(__DIR__.'/User.php');

    class Student {
        private $id ;
        private $id_user ;
        private $nickname ;
        private $bio_short_fr ;
        private $bio_fr ;
        private $bio_short_en ;
        private $bio_en ;
        private $facebook ;
        private $twitter ;
        private $website ;


        // transform object to a string
        function __toString()
        {
            return  "[id] :" . $this->id .
                    "[id_user] :" . $this->id_user .
                    "[nickname] :" . $this->nickname  .
                    "[bio_short_fr] :" . $this->bio_short_fr  .
                    "[bio_fr] :" . $this->bio_fr  .
                    "[bio_short_en] :" . $this->bio_short_en  .
                    "[bio_en] :" . $this->bio_en . 
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
        public function getNickname() : string
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
        public function setNickname(string $nickname) : self
        {
                $this->nickname = $nickname;

                return $this;
        }

        /**
         * Get the value of bio_short_fr
         *
         * @return $bio_short_fr
         */
        public function getBioShortFr() : string
        {
                return $this->bio_short_fr;
        }

        /**
         * Set the value of bio_short_fr
         *
         * @param $bio_short_fr 
         *
         * @return self
         */
        public function setBioShortFr(string $bio_short_fr) : self
        {
                $this->bio_short_fr = $bio_short_fr;

                return $this;
        }

        /**
         * Get the value of bio_fr
         *
         * @return $bio_fr
         */
        public function getBioFr() :string
        {
                return $this->bio_fr;
        }

        /**
         * Set the value of bio_fr
         *
         * @param $bio_fr
         *
         * @return self
         */
        public function setBioFr(string $bio_fr) : self
        {
                $this->bio_fr = $bio_fr;

                return $this;
        }

        /**
         * Get the value of bio_short_en
         *
         * @return $bio_short_en
         */
        public function getBioShortEn() : string
        {
                return $this->bio_short_en;
        }

        /**
         * Set the value of bio_short_en
         *
         * @param $bio_short_en 
         *
         * @return self
         */
        public function setBioShortEn(string $bio_short_en) : self
        {
                $this->bio_short_en = $bio_short_en;

                return $this;
        }

        /**
         * Get the value of bio_en
         *
         * @return $bio_en
         */
        public function getBioEn() : string 
        {
                return $this->bio_en;
        }

        /**
         * Set the value of bio_en
         *
         * @param $bio_en
         *
         * @return self
         */
        public function setBioEn(string $bio_en) : self
        {
                $this->bio_en = $bio_en;

                return $this;
        }

        /**
         * Get the value of facebook
         *
         * @return $facebook
         */
        public function getFacebook() :string
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
        public function setFacebook(string $facebook) : self
        {
                $this->facebook = $facebook;

                return $this;
        }

        /**
         * Get the value of twitter
         *
         * @return $twitter
         */
        public function getTwitter() :string
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
        public function setTwitter(string $twitter) : self
        {
                $this->twitter = $twitter;

                return $this;
        }

        /**
         * Get the value of website
         *
         * @return $website
         */
        public function getWebsite() :string
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
        public function setWebsite(string $website) : self
        {
                $this->website = $website;

                return $this;
        }

    }
?>