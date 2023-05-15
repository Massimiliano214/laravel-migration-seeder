<?php

    namespace App\Functions;

    class Helpers {
        public static function getCsvContent(string $path) {

            $data = [];
            $file = fopen($path, "r");

            if ($file === false) {
                exit("Invalid file selected");
            }
            
            while (($row = fgetcsv($file)) !== FALSE) {
                $data[] = $row;
            }
            return $data;
        }
    }