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
        }

        function checkQuarantine () {
            let inputAge = document.getElementById('age').value;

            // if(inputAge < 21){
            //     document.getElementById("output_age").innerHTML = "Bata ka pa. Puyo balay";
            // }
            // else if(inputAge > 65){
            //     document.getElementById("output_age").innerHTML = "Tigulang ka na. PAGPUYO!";
            // }
            // else if(inputAge >=21 && inputAge <= 65){
            //     document.getElementById("output_age").innerHTML = "CGE GO! LAAG!";
            // }
            // else if(inputAge = null){
            //     console.log("nganu ni?");
            // }
            // else{
            //     alert("ERROR!");
            // }
            

            if(inputAge == ''){
                document.getElementById("output_age").innerHTML = "Please input your age. You are not an alien";
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
    <input type="text" id="limit" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">
    <button onclick="calcFibo()">calculate range</button>
    <div id="output"></div>

    <h3>Quarantine Excercise</h3>
        Age (from 1 to 100): <input type="text" id="age" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">
        <button onclick="checkQuarantine()">Can I go out?</button>
        <div id="output_age"></div>
</body>
</html>