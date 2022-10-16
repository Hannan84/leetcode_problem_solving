<?php

//    1108. Defanging an IP Address

function defangIPaddr($address) {

    return str_replace('.','[.]',$address);
}

echo defangIPaddr("1.1.1.1");