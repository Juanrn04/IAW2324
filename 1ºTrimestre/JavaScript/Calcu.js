    function sumar()
        {
            var x = parseFloat(document.getElementById("num1").value);
            var y = parseFloat(document.getElementById("num2").value);
            document.getElementById("resultado").innerHTML= x + y ;
        }
        function restar()
        {
            var x = parseFloat(document.getElementById("num1").value);
            var y = parseFloat(document.getElementById("num2").value);
            document.getElementById("resultado").innerHTML= x - y ;
        }
        function dividir()
        {
            var x = parseFloat(document.getElementById("num1").value);
            var y = parseFloat(document.getElementById("num2").value);
            document.getElementById("resultado").innerHTML= x / y ;
            if( y == 0 ) 
            {
             
                document.getElementById("resultado").innerHTML= "No es posible realizar la división"

            }
        }
        function multiplicar()
        {
            var x = parseFloat(document.getElementById("num1").value);
            var y = parseFloat(document.getElementById("num2").value);
            document.getElementById("resultado").innerHTML= x * y ;
        }