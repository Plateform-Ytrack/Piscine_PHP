<?php

function sayHello(): string
{
    return "Hello";
}

function sayHelloTo($name): string
{
    return "Hello $name";
}

sayHello();
sayHelloTo('John');

?>