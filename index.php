<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Home Page</title>
    <style type="text/css">
        body{
            margin:0;
            padding:0;
            color:#000;
            background:#efefef url('') repeat center top;
            font:normal 0.9em/150% 'Arimo', "Trebuchet MS", arial, verdana, sans-serif;
            text-shadow: 0px 0px 1px transparent;
        }
        #container{
            width:960px;
            min-height: 300px;
            background:#FFFFFF;
            margin:30px auto 30px auto;
            padding:0;
            border:1px solid #ccc;
        }
        .result, .rules{
            text-align: center;
            font-size: 18px;
            -webkit-perspective:800;
        }
        input[type="submit"]{
            background-color: #82B900;
            width: 90px;
            height: 40px;
            border-radius: 5px;
            margin: 20px 420px;
            border: 1px solid #008000;
            font-family: "Trebuchet Ms", arial, verdana, sans-serif;
            color: #FFFFFF;
        }
        b{
            color: #339966;
        }
        .game{
            color: white;
            background: #3366FF;
            text-decoration: none;
            width: 70px;
            height: 30px;
            display:block;
            text-align: center;
            border-radius: 20px;
        }
        .game:hover{
            -webkit-transition:all 1s linear;
            /*-webkit-transform: rotate3d(100,100,100,360deg);*/
            text-shadow:5px 5px 10px black;
            box-shadow:2px 2px 2px 2px black;
        }
        a.button1{
         display:inline-block;
         padding:0.35em 1.2em;
         border:0.1em solid #000000;
         margin:0 0.3em 0.3em 0;
         border-radius:0.12em;
         box-sizing: border-box;
         text-decoration:none;
         font-family:'Roboto',sans-serif;
         font-weight:300;
         color:#000000;
         text-align:center;
         transition: all 0.2s;
        }
        a.button1:hover{
         color:#000000;
         background-color:#FFFFFF;
        }
        @media all and (max-width:30em){
         a.button1{
          display:block;
          margin:0.4em auto;
         }
        }
    </style>

</head>
<body>
<div id="container">
    <div class="rules">
        <a class="game" href="index.php">Back</a>
        <h1>Part of Scope AR Technical Test</h1>
        <p>
          Welcome to the Christmas Tree generator and the Cross Generator. Click
          on either option to test out one of the features.
        </p>
        <p>
            <a href="ChristmasTree.php" class="button1"> Christmas Tree </a>
            <br>
            <a href="XGen.php" class="button1"> Cross Creator </a>
        </p>
    </div>
</div>
</body>
</html>
