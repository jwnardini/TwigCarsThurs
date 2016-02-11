<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;
        private $status;
        private $image;

        function __construct($car_image, $car_model, $car_price, $car_miles, $car_status="new")
        {
          $this->make_model = $car_model;
          $this->price = $car_price;
          $this->miles = $car_miles;
          $this->image = $car_image;
          $this->status = $car_status;
        }

        function getModel()
        {
            return $this->make_model;
        }

        function getImage()
        {
            return $this->image;
        }

        function getPrice()
        {
            return $this->price;
        }

        function getMiles()
        {
            return $this->miles;
        }


        function getStatus()
        {
            return $this->status;
        }

        function worthBuying($max_price)
        {
            return ($this->price <= ($max_price));
        }

        function save()
        {
        array_push($_SESSION['list_of_cars'], $this);
        }

        static function getAll()
        {
        return $_SESSION['list_of_cars'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_cars'] = array();
        }


    }



?>
