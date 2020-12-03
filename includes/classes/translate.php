<?php


class translate
{

    private $page;

    protected static $instanceTranslate;

    private function __construct($index)
    {
        $this->page = $index;
    }

    public static function build($config)
    {
        self::$instanceTranslate = new translate($config);
    }

    public static function load()
    {
        return self::$instanceTranslate;
    }

    public function setLang(string $lang){
        $this->lang = $lang;
    }

    public function getLang(){
        return $this->lang;
    }

    public function getPageLink(string $lang, string $name){
        return $this->page[$lang][$name]['path'];
    }

    public function getPageName(string $lang, string $name){
        return $this->page[$lang][$name]['title'];
    }
}
