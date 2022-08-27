<?php

//    2299. Strong Password Checker II


function strongPasswordCheckerII($password) {

    return preg_match('/^(?!.*(.)\1)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()+-]).{8,}$/s',$password);
}

echo strongPasswordCheckerII("Me+You--IsMyDream");