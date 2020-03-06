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
// let callNumbers = ['PQ2246.M2 E5', 'PR2759 .P3', 'PR6056.A75 T76x', 'PS1744.G57 Y4534'];

// document.write('<ul>');
// for (var num in callNumbers){
//     document.write('<li>' + callNumbers[num] + '</li>')
// }
// document.write('</ul>');

// // Functions

// // @param name = a name to greet 
// function helloName(name){
//     document.write("Hello" + name + '<br>');
// }

// // @param hours = array of hours to iterate through
// function displayHours(hours) {
//     document.write('<ul>');
//     for (var idx in hours){
//         document.write('<li>' + hours[idx] + '</li>')
//     }
//     document.write('</ul>');
// }

// // @param library = library name
// function isPublic(library){
//     return (library.includes("Free") || library.includes("Public"))
// }

// // forEach loops

// // @param days_hours = numeral to write
// // note - it HAS to be singular, given that the iterator is external to the function. I think there's a bug in the homework instructions.
// function writeDaysHours(days_hour){
//     document.write(days_hour + '<br>');
// }
// //I had to define an array here in order to write the forEach. I hope that's fine, otherwise my code will bug out
// let hours = [3, 4, 5, 6, 7];
// hours.forEach(writeDaysHours);

///Lab 8 - Displaying hours
let hours = [
    "Monday: 9a - 9p",
    "Tuesday: 9a - 9p",
    "Wednesday: 9a - 9p",
    "Thursday: 9a - 9p",
    "Friday: 9a - 5p",
    "Saturday: 9a - 5p",
    "Sunday: closed"
];

function dailyHours(hours){
    for (var dayDetail in hours){
        try {
            let day_array = hours[dayDetail].split(":");
            let hrs_open = (day_array[1].toLowerCase().includes("closed")) ? " the library is closed" : " the hours are" + day_array[1];
            document.write("On " + day_array[0] + hrs_open + "<br>")

        } catch (err) {
            console.log(err);
        }

    }
}

dailyHours(hours)