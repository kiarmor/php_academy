<?php

setcookie('hello', 'value', time() + 15, '/');
var_dump($_COOKIE);
