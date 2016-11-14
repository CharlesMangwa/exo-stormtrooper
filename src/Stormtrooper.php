<?php

namespace Empire;

class Stormtrooper
{
    //every soldier has a name and belong to the squad
    private $name;
    public static $squad = array();

    /*
     * @param string $name
     * @throws Exception if $name is undefined
     * @return $this
     */
    public function __construct(string $name)
    {
        if (empty($name)) {
            throw new \Exception('Empty squad my lord ! Oh ! no please ! AAAaaaarh...');
        }
        //define name and add him to the squad
        $this->name = $name;
        $this::$squad[] = $this;

        return $this;
    }

    /*
    * @param array $collection, list of Stormtroopers
    * @param string $salut, salutation message
    * @throws Exception if $collection is empty
    * @throws Exception if $salut is undefined
    * @return $this
    */
    public function Salute(array $collection,string $salut):string
    {
        if (count($collection) === 0) {
            throw new \Exception('Empty squad my lord ! Oh ! no please ! AAAaaaarh...');
        }

        $hello = "";

        foreach ($collection as  $spermySoldierGuy) {
            if($this->name !== $spermySoldierGuy->name) {
                $hello .= '['.$this->name. '] : '. $salut.$spermySoldierGuy->name.PHP_EOL;   
            }
        }

        return $hello;
    }

    public function __destroy()
    {
        // wilhelm scream
        echo 'Aaaaaaargh !'.PHP_EOL;
    }
}
