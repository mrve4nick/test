<?php

    abstract class Controller {
        public $route;

        function __construct($route) {
            $this->route = $route;
        }
    }