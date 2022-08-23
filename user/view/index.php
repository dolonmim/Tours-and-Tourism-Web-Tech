<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <style type="text/css">

        .temp
        {
            width:70%;
            margin:1% auto;
            padding: 20px;
            font-family:verdana;
        }

        .temp h1
        {
            text-align:center;
            text-transform:capitalize;
            margin-bottom:3%;
        }

        

        .temp input
        {
            display:block;
            width:60%;
            margin:2% auto;
            height:34px;

            border:1px solid #ddd;
            border-radius:3px;
            padding: 1px 7px;
            text-transform:capitalize;
            color:#ccc;
            font-size:20px;
        }

        #content
        {
            width:60%;
            margin:2% auto;
            border:1px solid #ddd;
            border-radius:3px;
            padding: 1px 7px;
            text-transform:capitalize;
            color:#ccc;
            font-size:18px;
        }

        </style>
</head>
<body>

    <div class="temp">
    <h1>Search</h1>

    <input type="text" onkeyup="imu(this.value)" placeholder="live search">
    <div id="content">
        result...
        </div>
</div>
<div>
<center><a href="../view/loginview.php" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;">BACK</a></center>
    </div>





<script >
   let content= document.getElementById('content');
   function imu(x)
   {
    if(x.length==0)
    {
        content.innerHTML='empty'
    }
    else
    {
        var XML = new XMLHttpRequest();
        XML.onreadystatechange = function()
        {
            if(XML.readyState==4 && XML.status==200)
            {
                content.innerHTML=XML.responseText;
            }
        };
        XML.open('GET','search.php?data='+x,true);
        XML.send();
    }
   }

    </script>



</body>


    </html>
