<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>

        function calcFibo () {

            //reference - https://www.javatpoint.com/fibonacci-series-in-javascript

            //to erase the prev generated calFi div para dili messy. char
            document.getElementById("output").innerHTML = "";

            let inputNum = document.getElementById('limit').value;
            let n1 = 0,
            n2 = 1,
            nextSequence;
            
            for (let i = 0; i < inputNum; i++) {
                console.log(n1);
                nextSequence = n1 + n2;
                n1 = n2;
                n2 = nextSequence;

                document.getElementById("output").innerHTML += i + " = " + n1 + "<br>";
            }      
            
            if (inputNum < 0){
                document.getElementById("output").innerHTML = "Please number a real number";
            }
        }

        function checkQuarantine () {
            let inputAge = document.getElementById('age').value;

            if(inputAge == ''){
                document.getElementById("output_age").innerHTML = "Please input your age. You are not an alien";
            } 
            else if(inputAge < 0){
                document.getElementById("output_age").innerHTML = "Enter your real age please.";
            }
            else if(inputAge < 21){
                 document.getElementById("output_age").innerHTML = "Bata ka pa. Puyo balay";
            }
            else if(inputAge > 65){
                document.getElementById("output_age").innerHTML = "Tigulang ka na. PAGPUYO!";
            }
            else if(inputAge >=21 && inputAge <= 65){
                document.getElementById("output_age").innerHTML = "CGE GO! LAAG!";
            }
            else {
                alert("Please input a real number!");
            }
        }
    </script>
</head>
<body>

    <h3>Fibonacci Excercise</h3>
    <input type="number" id="limit" placeholder="Enter Numbers Only">
    <button onclick="calcFibo()">calculate range</button>
    <div id="output"></div>

    <h3>Quarantine Excercise</h3>
        Age (from 1 to 100): <input type="number" id="age" placeholder="Enter Numbers Only">
        <button onclick="checkQuarantine()">Can I go out?</button>
        <div id="output_age"></div>
</body>
</html>