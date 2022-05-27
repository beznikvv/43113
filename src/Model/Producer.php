<?php
namespace MyApp\Model;
class Producer
{

    private string $name;
    private string $website;

    public function __construct(string $name, string $website)
    {

        $this->name = $name;
        $this->website = $website;
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getWebsite(): string
    {
        return $this->website;
    }






}
