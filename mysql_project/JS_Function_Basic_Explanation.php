<?php
/**
 * Created by PhpStorm.
 * User: thero
 * Date: 15/9/2017
 * Time: 1:00 AM
 */
var
array_of_funcs = [
    function first_func() {
        console . log('first function');
    },
    function second_func() {
        console . log('second function');
    }
];

// get access to 1st function ... func1 is first_func
var
func1 = array_of_funcs[0];
// call func1.  same as calling first_func
func1();

// same as doing all in 1 step
array_of_funcs[0]();