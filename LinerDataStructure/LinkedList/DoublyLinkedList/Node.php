<?php

class Node
{
    public $data;
    public $next;
    public $prev;
    function __construct()
    {
        $this->data = 0;
        $this->next = null;
        $this->prev = null;
    }
}