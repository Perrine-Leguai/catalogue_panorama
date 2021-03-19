<?php 

    class Artwork{
        private $id ;
        private $title ;
        private $subtitle ;
        private $type ;
        private $duration ;
        private $synopsis_short_fr ;
        private $synopsis_long_fr ;
        private $synopsis_short_en ;
        private $synopsis_long_en ;
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
                    "[synopsis_short_fr] :" . $this->synopsis_short_fr  .
                    "[synopsis_long_fr] :" . $this->synopsis_long_fr . 
                    "[synopsis_short_en] :" . $this->synopsis_short_en  .
                    "[synopsis_long_en] :" . $this->synopsis_long_en .
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
        public function getTitle() : string
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
        public function setTitle(string $title) : self
        {
                $this->title = $title;

                return $this;
        }

        /**
         * Get the value of subtitle
         *
         * @return $subtitle
         */
        public function getSubtitle() : string 
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
        public function setSubtitle(string $subtitle) : self
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
        public function getDuration() : string 
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
        public function setDuration(string $duration) : self
        {
                $this->duration = $duration;

                return $this;
        }

        /**
         * Get the value of synopsis_short_fr
         *
         * @return $synopsis_short_fr
         */
        public function getSynopsisShortFr() : ?string
        {
                return $this->synopsis_short_fr;
        }

        /**
         * Set the value of synopsis_short_fr
         *
         * @param string $synopsis_short_fr 
         *
         * @return self
         */
        public function setSynopsisShortFr(?string $synopsis_short_fr) : self
        {
                $this->synopsis_short_fr = $synopsis_short_fr;

                return $this;
        }

        

        /**
         * Get the value of synopsis_long_fr
         *
         * @return $synopsis_long_fr
         */
        public function getSynopsisLongFr() : ?string 
        {
                return $this->synopsis_long_fr;
        }

        /**
         * Set the value of synopsis_long_fr
         *
         * @param string $synopsis_long_fr
         *
         * @return self
         */
        public function setSynopsisLongFr(?string $synopsis_long_fr) : self
        {
                $this->synopsis_long_fr = $synopsis_long_fr;

                return $this;
        }

        /**
         * Get the value of synopsis_short_en
         *
         * @return $synopsis_short_en
         */
        public function getSynopsisShortEn() : ?string
        {
                return $this->synopsis_short_en;
        }

        /**
         * Set the value of synopsis_short_en
         *
         * @param string $synopsis_short_en 
         *
         * @return self
         */
        public function setSynopsisShortEn(?string $synopsis_short_en) : self
        {
                $this->synopsis_short_en = $synopsis_short_en;

                return $this;
        }

        

        /**
         * Get the value of synopsis_long_en
         *
         * @return $synopsis_long_en
         */
        public function getSynopsisLongEn() : ?string 
        {
                return $this->synopsis_long_en;
        }

        /**
         * Set the value of synopsis_long_en
         *
         * @param string $synopsis_long_en
         *
         * @return self
         */
        public function setSynopsisLongEn(?string $synopsis_long_en) : self
        {
                $this->synopsis_long_en = $synopsis_long_en;

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