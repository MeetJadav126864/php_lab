<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax</title>
</head>
<body>
    <div id="demo">
        <p>Hello there!</p>
        <button onclick="loadDoc()">Click</button>
    </div>


    <script>
        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.open("GET","ajax_info.txt",true);

         

            xhttp.onreadystatechange = function () {
            
                if (xhttp.readyState == 4 && xhttp.status==200) {
                    document.getElementById("demo").innerHTML = xhttp.responseText;
                }
            }

            xhttp.send();
        }
    </script>

</body>


</html>