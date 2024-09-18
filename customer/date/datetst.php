<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    starting date: <input type="date" name="date1" id="date-1"><br><br>
    End date: <input type="date" name="date2" id="date-2"><br><br>
    <button id="submit" onclick= "" >submit</button>
    <div id="output">
       select date 
    </div>
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

let submit = document.getElementById(“submit”);
let output = document.getElementById(“output”);
    </script>
</body>
</html>