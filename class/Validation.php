<?php
    class Validation
    {
        public function __construct()
        {
            
        }

        public function Emailvalidation($email)
        {
            $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

            if (preg_match($pattern, $email)) {
                return true;
            } else {
                return false;
            }
        }

        public function Passwordvalidation($pass, $minlength = 8, $maxlength = 20)
        {
            if (strlen($pass) < $minlength || strlen($pass) > $maxlength) {
                return false;
            }

            if (!preg_match('/[A-Z]/', $pass) && !preg_match('/[a-z]/', $pass) && !preg_match('/\d/', $pass) && !preg_match('/[^a-zA-Z0-9]/', $pass)) {
                return false;
            }else {
                return true;
            }
        }
    }

?>