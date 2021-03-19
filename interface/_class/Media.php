<?php

    class Media {
        private $id ;
        private $id_artwork ;
        private $title ;
        private $description ;
        private $media ;

    // transform object to a string
    function __toString()
    {
        return  "[id] :" . $this->id .
                "[id_artwork] :" . $this->id_artwork .
                "[title] :" . $this->title  .
                "[description] :" . $this->description  .
                "[media] :" . $this->media ;
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
         * Get the value of id_artwork
         *
         * @return $id_artwork
         */
        public function getIdArtwork() : int
        {
                return $this->id_artwork;
        }

        /**
         * Set the value of id_artwork
         *
         * @param $id_artwork 
         *
         * @return self
         */
        public function setIdArtwork(int $id_artwork) : self
        {
                $this->id_artwork = $id_artwork;

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
         * Get the value of description
         *
         * @return $description
         */
        public function getDescription() : ?string 
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @param $description 
         *
         * @return self
         */
        public function setDescription(?string $description) : self
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of media
         *
         * @return $media
         */
        public function getMedia() : string
        {
                return $this->media;
        }

        /**
         * Set the value of media
         *
         * @param $media 
         *
         * @return self
         */
        public function setMedia(string $media) : self
        {
                $this->media = $media;

                return $this;
        }
    }
?>