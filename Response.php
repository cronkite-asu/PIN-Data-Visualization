<?php 
class Response { 
    // "primary_city",
    //     "primary_country",
    //     "primary_county",
    //     "primary_lat",
    //     "primary_long",
    //     "primary_state",
    //     "primary_zip",
    //     "query_title",
    //     "query_uuid",
    //     "src_first_name",
    //     "src_last_name",

    public $primary_city; 
    public $primary_country;
    public $primary_county; 
    public $primary_lat; 
    public $primary_long; 
    public $primary_state; 
    public $primary_zip; 
    // private $query_title; 
    // private $query_uuid; 
    public $src_first_name; 
    public $src_last_name; 
    public $responses;

    
    
    function set_primary_city($primary_city) { 
        $this -> primary_city = $primary_city;
    }

    function set_primary_country($primary_country) { 
        $this -> primary_country = $primary_country;
    } 

    function set_primary_county($primary_county) { 
        $this -> primary_county = $primary_county;
    }  

    function set_primary_lat($primary_lat) { 
        $this -> primary_lat = $primary_lat;
    }

    function set_primary_long($primary_long) { 
        $this -> primary_long = $primary_long;
    }

    function set_primary_state($primary_state) { 
        $this -> primary_state = $primary_state;
    }

    function set_primary_zip($primary_zip) { 
        $this -> primary_zip = $primary_zip;
    }

    function set_src_first_name($src_first_name) { 
        $this -> src_first_name = $src_first_name;
    }

    function set_src_last_name($src_last_name) { 
        $this -> src_last_name = $src_last_name;
    }

    function set_responses($responses) { 
        $this -> responses = $responses;
    }
} 

?> 