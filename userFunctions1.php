<?php
class Records{

    public function searchDate($value) {
            $count = strlen($value);
            $result = 0;
            if ($count > 5) {
                $result = "Found";
            } else {
                $result = "Not Found";
            }
            return $result;
    }
}
