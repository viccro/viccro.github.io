// If/Else if/Else
// var my_name = prompt("What is your name?");
// if (my_name.length == 6){
//     document.write("Are you Naresh?");
// } else if (my_name.length == 4){
//     document.write("Are you Jane?");
// } else {
//     document.write("Who are you?");
// }

// For loops
let callNumbers = ['PQ2246.M2 E5', 'PR2759 .P3', 'PR6056.A75 T76x', 'PS1744.G57 Y4534'];

document.write('<ul>');
for (var num in callNumbers){
    document.write('<li>' + callNumbers[num] + '</li>')
}
document.write('</ul>');

// Functions

// @param name = a name to greet 
function helloName(name){
    document.write("Hello" + name + '<br>');
}

// @param hours = array of hours to iterate through
function displayHours(hours) {
    document.write('<ul>');
    for (var idx in hours){
        document.write('<li>' + hours[idx] + '</li>')
    }
    document.write('</ul>');
}

// @param library = library name
function isPublic(library){
    return (library.includes("Free") || library.includes("Public"))
}

// forEach loops

// @param days_hours = numeral to write
// note - it HAS to be singular, given that the iterator is external to the function. I think there's a bug in the homework instructions.
function writeDaysHours(days_hour){
    document.write(days_hour + '<br>');
}
//I had to define an array here in order to write the forEach. I hope that's fine, otherwise my code will bug out
let hours = [3, 4, 5, 6, 7];
hours.forEach(writeDaysHours);