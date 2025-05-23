<?php

// ORM - Migrations

class Task {
    private int $id;
    private string $name;
    private string $email;
    private string $phone;
    private string $address;
    private DateTime $create_at;

    public function __construct($name) {
        $this->name = $name;
        $this->create_at = new DateTime();
    }

    public function create($dados)
    {
        return $this->create($dados);
    }    
     
    public function update($dados)
    {
        return $this->update($dados);
    }
    
    public function delete()
    {
        return $this->delete();
    }
    
    public function findById($id)
    {
        return $this->findById($id);
    }
    
    public function findAll()
    {
        return $this->findAll();
    }
}