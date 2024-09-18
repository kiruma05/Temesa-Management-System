<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#output {
background-color: rgba(255, 255, 255, 0.15);
text-align: center;
padding: 1em;
margin: 0px 30px 0px 30px;
color: #0a49c7;
font-size: 1.2em;
letter-spacing: 0.05em;
box-shadow: 0 0 20px rgba(0,139,253,0.45);
}
#output span {
color: #18f08b;
font-size: 1.4em;
font-weight: 600;
}
    </style>
</head>
<body>

        <div id=”output”>

<form action="">
    <label for="date1">start date</label>
    <input type="date" name="">
</form>

    <script>

submit.addEventListener(“click”, () => {

  //The values of the two input boxes have been collected. 

//That value is stored between a constant called ‘date1’ and ‘date2’, respectively.

  let date1 = new Date(document.getElementById(“date-1”).value);

  let date2 = new Date(document.getElementById(“date-2”).value);

  //Check if the input dates are valid

  //If valid calculate the difference

  if (date1.getTime() && date2.getTime()) {

    //Calculate difference in time using getTime function

    //getTime calculates number of years since January 1,1970

    let timeDifference = date2.getTime() – date1.getTime();

    //Since this value is in milliseconds we need to convert it into days

    //We want the difference to be a non-negative number. Hence we use Math.abs()

    let dayDifference = Math.abs(timeDifference / (1000 * 3600 * 24));

    output.innerHTML = `Difference between the two dates is <span>${dayDifference}</span> days`;

  }

  //If the above conditions are not met and you click on the submit button, you will see the following text.

  else {

    output.innerHTML = “Please select a valid date”;

  }

});

</div>

    </script>
</body>
</html>


</div>

<!-- ya kwanza -->
<div class=”container”>
* {
padding: 0;
margin: 0;
box-sizing: border-box;
font-family: “Rubik”, sans-serif;
}
body {
height: 100vh;
background: rgb(94, 169, 233);
}
.container {
width: 70vw;
max-width: 37.5em;
background-color: #f6f9fa;
padding: 3em 1em;
position: absolute;
transform: translate(-50%, -50%);
top: 50%;
left: 50%;
}





<!-- ya pili -->

<div class=”heading”>Days Between Two Dates</div>
.heading{
background: rgb(18, 128, 207);
color: white;
margin: -48px -16px 50px -16px;
font-size: 23px;
padding: 5px;
text-align: center;
}


<!-- ya tatu -->
<div class=”inp-wrapper”>
  <div class=”date-wrapper”>
    <label for=”date-1″>Start Date</label>
    <input type=”date” id=”date-1″ />
  </div>
  <div class=”date-wrapper”>
     <label for=”date-2″>End Date</label>
     <input type=”date” id=”date-2″ />
  </div>
</div>
.inp-wrapper {
display: flex;
justify-content: space-around;
gap: 1.2em;
}
label {
color: #0f1e32;
display: block;
font-weight: 600;
}
input[type=”date”] {
font-size: 16px;
padding: 1em;
color: #242831;
border: 2px solid rgb(7, 108, 147);
outline: none;
border-radius: 0.2em;
margin-top: 0.6em;
}
::-webkit-calendar-picker-indicator {
background-color: #7eceee;
padding: 0.2em;
cursor: pointer;
border-radius: 0.1em;
}



<!-- ya nne -->
<button id=”submit”>Submit</button>
button {
display: block;
background-color: #1a78db;
color: #ffffff;
font-size: 18px;
margin: 2.2em auto 2em auto;
border: none;
padding: 0.7em 2em;
border-radius: 0.3em;
font-weight: 500;
}











<!-- ya tano -->
Step 5: Create a result viewing display
Now is the time to create a display in which these calculations can be seen. The size of the display has been determined above the padding. And around this display, I have used shadows which have enhanced its beauty a lot more.

 <div id=”output”>Select the dates to get started</div>
#output {
background-color: rgba(255, 255, 255, 0.15);
text-align: center;
padding: 1em;
margin: 0px 30px 0px 30px;
color: #0a49c7;
font-size: 1.2em;
letter-spacing: 0.05em;
box-shadow: 0 0 20px rgba(0,139,253,0.45);
}
#output span {
color: #18f08b;
font-size: 1.4em;
font-weight: 600;
}

Step 6: Make the date calculator responsive
Now using some amount of code has made this day Between Two Dates javascript responsive. This means that when it is used from a smaller device, its size will become smaller.

@media screen and (max-width: 550px) {
.container {
  padding: 4em 2em;
}
.inp-wrapper {
  flex-direction: column;
}
.date-wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
}
}
Step 7: Activate Days Between Two Dates Calculator
Above I have added the necessary information using HTML and CSS. Now is the time to implement it with JavaScript.

Now the Days Between Two Dates project has been activated using JavaScript. First, we have determined the constant of two ID functions. Here the constant of display and submit button IDs are determined. Because I can’t use any HTML function directly in JavaScript.

let submit = document.getElementById(“submit”);
let output = document.getElementById(“output”);
Below I gave all the calculations and shared the information if necessary. I hope those explanations will help you understand your JavaScript code.

submit.addEventListener(“click”, () => {
  //The values of the two input boxes have been collected. 
//That value is stored between a constant called ‘date1’ and ‘date2’, respectively.
  let date1 = new Date(document.getElementById(“date-1”).value);
  let date2 = new Date(document.getElementById(“date-2”).value);
  //Check if the input dates are valid
  //If valid calculate the difference
  if (date1.getTime() && date2.getTime()) {
    //Calculate difference in time using getTime function
    //getTime calculates number of years since January 1,1970
    let timeDifference = date2.getTime() – date1.getTime();
    //Since this value is in milliseconds we need to convert it into days
    //We want the difference to be a non-negative number. Hence we use Math.abs()
    let dayDifference = Math.abs(timeDifference / (1000 * 3600 * 24));
    output.innerHTML = `Difference between the two dates is <span>${dayDifference}</span> days`;
  }
  //If the above conditions are not met and you click on the submit button, you will see the following text.
  else {
    output.innerHTML = “Please select a valid date”;
  }
});




<div id=”output”>Select the dates to get started</div>
#output {
background-color: rgba(255, 255, 255, 0.15);
text-align: center;
padding: 1em;
margin: 0px 30px 0px 30px;
color: #0a49c7;
font-size: 1.2em;
letter-spacing: 0.05em;
box-shadow: 0 0 20px rgba(0,139,253,0.45);
}
#output span {
color: #18f08b;
font-size: 1.4em;
font-weight: 600;
}




<!-- no 6 -->
@media screen and (max-width: 550px) {
.container {
  padding: 4em 2em;
}
.inp-wrapper {
  flex-direction: column;
}
.date-wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
}
}
