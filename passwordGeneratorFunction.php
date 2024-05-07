<?php

        # ------------------------------------------------------------ #
        # ************* Password Generator Version V1.0 *************  #
        /*
            The function generates passwords with :
            - 3 characters of uppercase letters.
            - 3 characters of lowercase letters.
            - 3 digits.
            - and 3 symbols.
        */
        # ************* Password Generator Version V1.0 *************  #
        # ------------------------------------------------------------ #  


function generate_password() {

    $upperCaseLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowerCaseLetters = "abcdefghijklmnopqrstuvwxyz";
    $digits = "0123456789";
    $symbols = "!@#$%^&*~";

    $upperCaseLetters = str_shuffle($upperCaseLetters);
    $lowerCaseLetters = str_shuffle($lowerCaseLetters);
    $digits = str_shuffle($digits);
    $symbols = str_shuffle($symbols);

    $randomCharacter = 3;

    $randomPassword = substr($upperCaseLetters, 0, $randomCharacter);
    $randomPassword .= substr($lowerCaseLetters, 0, $randomCharacter);
    $randomPassword .= substr($digits, 0, $randomCharacter);
    $randomPassword .= substr($symbols, 0, $randomCharacter);

    return str_shuffle($randomPassword);

}

