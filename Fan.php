<?php


class Fan
{
    private const SLOW= 1;
    private const MEDIUM=2;
    private const FAST=3;
    private $speed=self::SLOW;
    private $on=false;
    private $radius=5;
    private $color="blue";

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }
    public function setSpeedMedium(){
        return $this->speed=self::MEDIUM;
    }
    public function setSpeedFast(){
        return $this->speed=self::FAST;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param bool $on
     */
    public function setOn(bool $on): void
    {
        $this->on = $on;
    }

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->on;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    public function __construct()
    {

    }
    public function toString(){
        if (!$this->isOn()){
            echo $this->getSpeed().$this->getColor().$this->getRadius()."fan is on";
        }
        else{
            echo $this->getSpeed().$this->getColor().$this->getRadius()."fan is off";
        }
    }
}
$fan1=new Fan();
$fan1->setSpeedFast();
$fan1->setRadius(10);
$fan1->setColor('yello');
$fan1->setOn(false);
$fan1->toString();
echo "<br>";
$fan2=new Fan();
$fan2->setSpeedMedium();
$fan2->setRadius(5);
$fan2->setOn(true);
$fan2->toString();

