<!doctype html>
<html>
    <head>
        <script type="text/javascript" src="Cell_Phones_and_Accessories_5.json"></script>
             <script type="text/javascript" >
                function load() {
                     var mydata = JSON.parse(data);
                     alert(mydata.length);

                     var div = document.getElementById('data');

                     for(var i = 0;i < mydata.length; i++)
                     {
                        div.innerHTML = div.innerHTML + "<p class='inner' id="+i+">"+ mydata[i].name +"</p>" + "<br>";
                     }
                 }
        </script>
    </head>
    <body onload="load()">
    <div id= "data">

    </div>
    </body>
</html>