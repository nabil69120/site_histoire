<?php

class CouvertureIndex
{
    private $id;
    private $title;
    private $description;
    private $image_url;

    function __construct($id_p, $title_p, $description_p, $image_url_p) 
    {
        $this->id = $id_p;
        $this->title = $title_p;
        $this->description = $description_p;
        $this->image_url = $image_url_p;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImageUrl()
    {
        return $this->image_url;
    }
}

?>