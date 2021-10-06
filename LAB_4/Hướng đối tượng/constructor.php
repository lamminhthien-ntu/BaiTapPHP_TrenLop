<?php
class People {
    public $name;
    public $year;
    public $job;

    /**
     * @param $name
     * @param $year
     * @param $job
     */
    public function __construct($name, $year, $job)
    {
        $this->name = $name;
        $this->year = $year;
        $this->job = $job;
    }

}

interface Intro {
    function mess();
}

class About_me extends People implements Intro {
    function mess()
    {
        // TODO: Implement mess() method.
    }

}


?>