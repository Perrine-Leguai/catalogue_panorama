<?php 

    class Artwork{
        private $id ;
        private $title ;
        private $subtitle = "" ;
        private $type ;
        private $duration ;
        private $synopsis_long ;
        private $thanks ;
        private $created_at ;
        private $id_student ;
        private $seen ;
       
        // transform object to a string
        function __toString()
        {
            return  "[id] :" . $this->id .
                    "[title] :" . $this->title .
                    "[subtitle] :" . $this->subtitle  .
                    "[type] :" . $this->type  .
                    "[duration] :" . $this->duration  .
                    "[synopsis_short] :" . $this->synopsis_short  .
                    "[synopsis_long] :" . $this->synopsis_long . 
                    "[thanks] :" . $this->thanks  .
                    "[created_at] :" . $this->created_at  .
                    "[id_student] :" . $this->id_student  .
                    "[seen] :" . $this->seen ;
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
         * Set the value of id
         *
         * @param $id 
         *
         * @return self
         */
        public function setId(int $id) : self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of title
         *
         * @return $title
         */
        public function getTitle() : ?string
        {
                return $this->title;
        }

        /**
         * Set the value of title
         *
         * @param $title
         *
         * @return self
         */
        public function setTitle(?string $title) : self
        {
                $this->title = $title;

                return $this;
        }

        /**
         * Get the value of subtitle
         *
         * @return $subtitle
         */
        public function getSubtitle() : ?string
        {
                return $this->subtitle;
        }

        /**
         * Set the value of subtitle
         *
         * @param $subtitle
         *
         * @return self
         */
        public function setSubtitle(?string $subtitle) : self
        {
                $this->subtitle = $subtitle;

                return $this;
        }

        /**
         * Get the value of type
         *
         * @return $type
         */
        public function getType() : string
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @param $type 
         *
         * @return self
         */
        public function setType(string $type) : self
        {
                $this->type = $type;

                return $this;
        }

        /**
         * Get the value of duration
         *
         * @return $duration
         */
        public function getDuration() : ?string 
        {
                return $this->duration;
        }

        /**
         * Set the value of duration
         *
         * @param $duration 
         *
         * @return self
         */
        public function setDuration(?string $duration) : self
        {
                $this->duration = $duration;

                return $this;
        }

        /**
         * Get the value of synopsis_long
         *
         * @return $synopsis_long
         */
        public function getSynopsisLong() : ?string 
        {
                return $this->synopsis_long;
        }

        /**
         * Set the value of synopsis_long
         *
         * @param string $synopsis_long
         *
         * @return self
         */
        public function setSynopsisLong(?string $synopsis_long) : self
        {
                $this->synopsis_long = $synopsis_long;

                return $this;
        }

        /**
         * Get the value of thanks
         *
         * @return $thanks
         */
        public function getThanks() : ?string 
        {
                return $this->thanks;
        }

        /**
         * Set the value of thanks
         *
         * @param $thanks 
         *
         * @return self
         */
        public function setThanks(?string $thanks) : self
        {
                $this->thanks = $thanks;

                return $this;
        }

        /**
         * Get the value of created_at
         *
         * @return $created_at
         */
        public function getCreatedAt() :string
        {
                return $this->created_at;
        }

        /**
         * Set the value of created_at
         *
         * @param string $created_at $created_at
         *
         * @return self
         */
        public function setCreatedAt(string $created_at) : self
        {
                $this->created_at = $created_at;

                return $this;
        }

        /**
         * Get the value of id_student
         *
         * @return $id_student
         */
        public function getIdStudent() : int 
        {
                return $this->id_student;
        }

        /**
         * Set the value of id_student
         *
         * @param int $id_student
         *
         * @return self
         */
        public function setIdStudent(int $id_student) : self
        {
                $this->id_student = $id_student;

                return $this;
        }

        /**
         * Get the value of seen
         *
         * @return $seen
         */
        public function getSeen() : bool
        {
                return $this->seen;
        }

        /**
         * Set the value of seen
         *
         * @param bool $seen
         *
         * @return self
         */
        public function setSeen(bool $seen) : self
        {
                $this->seen = $seen;

                return $this;
        }

        
    }
?>