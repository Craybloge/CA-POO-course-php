<?php
include_once("model.php");

class Film extends Model
{

    public function __construct($fields)
    {
        parent::__construct($fields);
    }
    public function linkPK($people, $transport, $planets, $species, $vehicles)
    {
        foreach ($this->characters as $key => $value) {
            $this->characters[$key] = $people[$value];
        }
        foreach ($this->starships as $key => $value) {
            $this->starships[$key] = $transport[$value];
        }
        foreach ($this->planets as $key => $value) {
            $this->planets[$key] = $planets[$value];
        }
        foreach ($this->species as $key => $value) {
            $this->species[$key] = $species[$value];
        }
        foreach ($this->vehicles as $key => $value) {
            $this->vehicles[$key] = $vehicles[$value];
        }
    }
    public function __toString()
    {
        return $this->title;
    }
}
