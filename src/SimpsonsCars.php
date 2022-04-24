<?php

class SimpsonsCars
{
  private int $nbWheels;
  private int $currentSpeed;
  private string $color;
  private int $nbSeats;
  private string $energy;
  private int $energyLevel;
  private bool $startEngine = true;


  public function __construct(string $color,int $nbSeats,string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
}


public function setColor($color)
{
  $this->color = $color;
  return $this;
}

public function setNbSeats($nbSeats)
{
  $this->nbSeats = $nbSeats;
  return $this;
}


public function setEnergy($energy)
{
  $this->energy = $energy;
  return $this;
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


  public function getCurrentSpeed(): int
  {
    return $this->currentSpeed;
  }


  public function setCurrentSpeed(int $currentSpeed): int 
  {
    return $this->currentSpeed = $currentSpeed;


  }



  public function getColor()
  {
    return $this->color;
  }



  public function setEnergyLevel($energyLevel)
  {
    $this->energyLevel = $energyLevel;

    return $this;
  }

  public function start(): string 
  {
      $this->startEngine;
      return "started !";
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
            $sentence .= "Brake !!!" ;
        }
        $sentence .= '</br>'."I'm stopped !".'</br>';
        return $sentence;
    }

  
}
?>