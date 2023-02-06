<?php class Character 
{
    public int $id;
    public string $name;
    public int $puissance;
    public string $type;
    private int $health = 100;

    public function __construct(int $id,string $name,int $puissance,string $type)
    {
        $this->id = $id;
        $this->puissance = $puissance;
        $this->name = $name;
        $this->type = $type;
       
    }

    public function getHealth(){
        return $this->health;
    }

    public function getCharacterInfos():string{

        return "{$this->id} {$this->name} {$this->type} ";
    }

    
}

?>