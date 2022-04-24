<?php 
class Bicycle
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;



    public function getColor():string
    {
        return $this->color;
    }

     
    public function setColor($color):void 
    {
        $this->color = $color;

    }

    
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    
    public function setCurrentSpeed(int $currentSpeed): int
    {
        return $this->currentSpeed = $currentSpeed;
    }


    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    
    public function setNbSeats(int $nbSeats): int
    {
         return $this->nbSeats = $nbSeats;
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }


    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }

    public function forward(): string 
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function break(): string
    {
        $sentence ="";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= '</br>'."I'm stopped !".'</br>';
        return $sentence;
    }
    

  

}

