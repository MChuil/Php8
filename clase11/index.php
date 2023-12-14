<?php 

class Reloj{
    public $hour;
    public $minute;
    public $seconds;

    /**
     * Get the value of hour
     */ 
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set the value of hour
     *
     * @return  self
     */ 
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get the value of minute
     */ 
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * Set the value of minute
     *
     * @return  self
     */ 
    public function setMinute($minute)
    {
        $this->minute = $minute;

        return $this;
    }

    /**
     * Get the value of seconds
     */ 
    public function getSeconds()
    {
        return $this->seconds;
    }

    /**
     * Set the value of seconds
     *
     * @return  self
     */ 
    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;

        return $this;
    }
}



class Cuenta{

    
}