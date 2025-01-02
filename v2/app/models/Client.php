<?php


class Client
{

    public $id;
    private $firstname;
    private $lastname;
    private $email;
    private $phone;


    public function __construct(string $firstname = null, string $lastname = null, string $email = null, string $phone = null) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
    }

    
    function getId() : string {
        return $this->id;
    }

    function setFirstname(string $firstname) : void {
        $this->firstname = $firstname;
    }

    function getFirstname() : string {
        return $this->firstname;
    }

    function setLastname(string $lastname) : void {
        $this->lastname = $lastname;
    }

    function getLastname() : string {
        return $this->lastname;
    }

    function setEmail(string $email) : void {
        $this->email = $email;
    }

    function getEmail() : string {
        return $this->email;
    }


    function setPhone(string $phone) : void {
        $this->phone = $phone;
    }

    function getPhone() : string {
        return $this->phone;
    }



}
