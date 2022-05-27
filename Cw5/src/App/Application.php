<?php
namespace MyApp\App;

class Application
{
    public function run()
    {
        for($i = 0; $i < 200; $i++) {
            $generator = new \Nubs\RandomNameGenerator\Vgng();
            echo ($i+1) .". " .$generator->getName() ."<br>";
        }
    }
}


