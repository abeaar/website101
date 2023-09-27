console.log ("HAY GUYS AKU MAU COBA MAINAN JS");


let namagw = "abraar jihaad"
console.log(namagw);
 

let a = 12;
let b = 9;

console.log(a + b)
console.log(a - b)
console.log(a * b)
console.log(a / b)
console.log(a % b)


let greet = "Hello";
let moreGreet = greet + greet;
console.log(moreGreet);

/* output: HelloHello */

const myName = "ABRAAR";
console.log(`Hello, my name is ${myName}.`);

/* output: Hello, my name is Luke. */

const isRaining = true;

console.log("Persiapan sebelum berangkat kegiatan.");
if (isRaining) {
    console.log("Hari ini hujan. Bawa payung.");
}
console.log("Berangkat kegiatan.");

let x = 50;

if(x > 70) {
    console.log(x);
} else {
    console.log("Nilai kurang dari 70");
}

let language = "French";
let greeting = null;

switch (language) {
  case "English":
    greeting = "Good Morning!";
    break;
  case "French":
    greeting = "Bonjour!";
    break;
  case "Japanese":
    greeting = "Ohayou Gozaimasu!";
    break;
  default:
    greeting = "Selamat Pagi!";
}

console.log(greeting);

/* output
Bonjour!
*/