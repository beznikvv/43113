<?php
namespace MyApp\Model;


class Brand
{
    public string $name;
    public Producer $producer;

    function __construct(string $name,Producer $producer) {
        $this->name = $name;
        $this->producer = $producer;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getProducer(): Producer
    {
        return $this->producer;
    }
    public function setName($name)
    {
        $this->name=$name;
    }

}

