<?php

    class Update{
        private $id;
        private $updated_date;
        private $input_name;
        private $old_content;
        private $new_content;
        private $id_artwork;
        private $is_seen;

        // transform object to a string
        function __toString()
        {
            return  "[id] :" . $this->id .
                    "[updated_date] :" . $this->updated_date .
                    "[input_name] :" . $this->input_name  .
                    "[old_content] :" . $this->old_content  .
                    "[new_content] :" . $this->new_content  .
                    "[id_artwork] :" . $this->id_artwork  .
                    "[is_seen] :" . $this->is_seen  ;
        }
        
        /**
         * Get the value of id
         */
        public function getId() :int
        {
                return $this->id;
        }        

        /**
         * Set the value of id
         *
         * @return self
         */
        public function setId(int $id) : self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of updated_date
         */
        public function getUpdatedDate() :string
        {
                return $this->updated_date;
        }

        /**
         * Set the value of updated_date
         *
         * @return self
         */
        public function setUpdatedDate(string $updated_date) : self
        {
                $this->updated_date = $updated_date;

                return $this;
        }

        /**
         * Get the value of input_name
         */
        public function getInputName() :string
        {
                return $this->input_name;
        }

        /**
         * Set the value of input_name
         *
         * @return self
         */
        public function setInputName(string $input_name) : self
        {
                $this->input_name = $input_name;

                return $this;
        }

        /**
         * Get the value of old_content
         */
        public function getOldContent() :string
        {
                return $this->old_content;
        }

        /**
         * Set the value of old_content
         *
         * @return self
         */
        public function setOldContent(string $old_content) : self
        {
                $this->old_content = $old_content;

                return $this;
        }

        /**
         * Get the value of new_content
         */
        public function getNewContent() :string
        {
                return $this->new_content;
        }

        /**
         * Set the value of new_content
         *
         * @return self
         */
        public function setNewContent(string $new_content) : self
        {
                $this->new_content = $new_content;

                return $this;
        }

        /**
         * Get the value of id_artwork
         */
        public function getIdArtwork() :int
        {
                return $this->id_artwork;
        }

        /**
         * Set the value of id_artwork
         *
         * @return self
         */
        public function setIdArtwork(int $id_artwork) : self
        {
                $this->id_artwork = $id_artwork;

                return $this;
        }

        /**
         * Get the value of is_seen
         */
        public function getIsSeen() :bool
        {
                return $this->is_seen;
        }

        /**
         * Set the value of is_seen
         *
         * @return self
         */
        public function setIsSeen(bool $is_seen) : self
        {
                $this->is_seen = $is_seen;

                return $this;
        }

    }
?>