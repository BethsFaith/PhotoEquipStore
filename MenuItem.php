<?php

class MenuItem
{
    public function __construct($begin, $end, $content, $name) {
        $this->content = $content;
        $this->end = $end;
        $this->begin = $begin;
        $this->name = $name;
    }

    public function extract() : string
    {
        return $this->begin . $this->content . $this->name . $this->end;
    }

    /**
     * @param string $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @param string $begin
     */
    public function setBegin($begin): void
    {
        $this->begin = $begin;
    }

    /**
     * @param string $end
     */
    public function setEnd($end): void
    {
        $this->end = $end;
    }

    private $content;
    private $begin;
    private $end;
    private $name;
}