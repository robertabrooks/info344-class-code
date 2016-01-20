'use strict';

var x = 1;

function doubleIt(x) {
    x = x * 2;
    
    // this.x = this.x * 2;  --->  error
}

doubleIt(x);
console.log(x);

var name = 'Bobby';

function getHello(name) {
    return function() {
        console.log(name);
    }
}

var sayHello = getHello(name);
name = 'Fred';
sayHello();