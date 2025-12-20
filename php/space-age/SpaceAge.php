<?php

declare(strict_types=1);

class SpaceAge
{
    const AGES = [
        "Mercury" => 0.2408467,
        "Venus" => 0.61519726,
        "Earth" => 1.0,
        "Mars" => 1.8808158,
        "Jupiter" => 11.862615,
        "Saturn" => 29.447498,
        "Uranus" => 84.016846,
        "Neptune" => 164.79132,
    ];

    const EARTH_YEAR = 31_557_600;

    private $years;
    
    public function __construct(
        private int $seconds
        ) {
            $this->years = $this->seconds / static::EARTH_YEAR;
    }

    public function earth(): float
    {
        return $this->years;
    }

    public function mercury(): float
    {
        return $this->years / $this::AGES["Mercury"];
    }
    
    public function venus(): float
    {
        return $this->years / $this::AGES["Venus"];
    }
    
    public function mars(): float
    {
        return $this->years / $this::AGES["Mars"];
    }
    
    public function jupiter(): float
    {
        return $this->years / $this::AGES["Jupiter"];
    }
    
    public function saturn(): float
    {
        return $this->years / $this::AGES["Saturn"];
    }
    
    public function uranus(): float
    {
        return $this->years / $this::AGES["Uranus"];
    }
    
    public function neptune(): float
    {
        return $this->years / $this::AGES["Neptune"];
    }
}
