<?php
  class ResumeItem{
    private $iconsrc;
    private $title;
    private $list;

    public function __construct($icon, $title, $list ){
        $this->iconsrc = $icon;
        $this->title = $title;
        $this->list = $list;
    }
    public function getIconSrc(){
      return $this->iconsrc;
    }
    public function getTitle(){
      return $this->title;
    }
    public function getList(){
      return $this->list;
    }
    public function __toString(){
      return $this->iconsrc . " " . $this->title;
    }
  }
