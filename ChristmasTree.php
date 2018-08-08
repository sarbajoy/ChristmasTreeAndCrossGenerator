<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Christmas Tree</title>
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
    </style>

</head>
<body>
<div id="container">
    <div class="rules">
        <a class="game" href="index.php">Back</a>
        <h1>Creating a Christmas Tree</h1>
        <p>
            Enter a number and this program will create a Christmas Tree.
        </p>
    </div>
    <div class="result">
        <form action="ChristmasTree.php" method="post">
            <input class="section_number" type="text" name="number"
            pattern= "[0-9]{1,2,3}"  title="use only numbers" />
            <input type="submit" value="Create"/>
        </form>
        <div>
            <?php
            if(isset($_POST['number']))
            {
                $num = $_POST['number'];
                if($num <= 0)
                {
                    echo '<b sid="MinErrorC" tyle="color:red;">
                    Number is too small! The minimum is 1!</b>';
                }
                elseif(is_numeric($num))
                {
                  for ($i=0;$i<=$num;$i++){
                    //print trailing space
                    for ($j=$i;$j<$num;$j++){
                      echo " ";
                    }

                    // print pyramid
                    for ($j=1;$j<=(2*$i-1);++$j){
                      echo "*";
                    }
                    echo "<br>";
                  }
                }
                else
                {
                    echo '<b id="NumErrorC" style="color:red;">
                    Number is not defined! Please try again</b>';
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
