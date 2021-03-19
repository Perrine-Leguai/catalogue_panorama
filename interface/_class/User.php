<?php

class User {
    protected $id;
    protected $kart_url;
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $profil;
    

    // transform object to a string
    function __toString()
    {
        return  "[id] :" . $this->id .
                "[kart_url] :" . $this->kart_url .
                "[first_name] :" . $this->first_name  .
                "[last_name] :" . $this->last_name  .
                "[email] :" . $this->email  .
                "[profil] :" . $this->profil ;
    }

    /**
     * Get the value of id
     */
    public function getId() :int
    {
        return $this->id;
    }

    /**
     * Get the value of kart_url
     */
    public function getKartUrl() : string
    {
        return $this->kart_url;
    }

    /**
     * Set the value of kart_url
     *
     * @return self
     */
    public function setKartUrl(string $kart_url) : self
    {
        $this->kart_url = $kart_url;

        return $this;
    }

    /**
     * Get the value of first_name
     */
    public function getFirstName() :string
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return self
     */
    public function setFirstName(string $first_name) : self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastName() :string
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return self
     */
    public function setLastName(string $last_name) : self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail() :string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of profil
     */
    public function getProfil() :string
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return self
     */
    public function setProfil(string $profil) : self
    {
        $this->profil = $profil;

        return $this;
    }

}
?>