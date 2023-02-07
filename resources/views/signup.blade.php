<!DOCTYPE html>
<html>
    <head>
        
        <title>Signup form</title>
        <style>
            button{
                padding: 20px;
                padding-left: 40px;
                padding-right: 40px;
                font-size: 30px;
            }
            body{
                color: white;
            }
            label{
               font-size: 20px;
            }
            input {
          margin: 7px;
          padding: 10px;
          width:300px;
        }
            h1{
            color:white;
        }
        #leftbox {
            margin: 10%;
            text-align: center;
                float:left;
                background:Tomato;
                width:35%;
                height: 500px;;
                
            }
        #rightbox{
            margin-right: 10%;
            margin-top: 10%;
            text-align: center;
                float:right;
                background:MediumSeaGreen;
                width:35%;
                height: 500px;;
         }
         

        </style>
    </head>
    <body>
        <div id="leftbox">
        <h1> Signup Form </h1>
        <div class="form">
            <form action="registerForm" method="POST" >
                <label>Enter your name</label><br>
                <input type="text" name="name" placeholder="Please Enter Your full name"><br><br>

                <label>Enter your Email</label><br>
                <input type="text" name="email" placeholder="Please Enter Your full email"><br><br>

                <label>Enter your Mobile number</label><br>
                <input type="text" name="mobileno" placeholder="Please Enter Mobile number"><br><br>

                <label>Enter your Password</label><br>
                <input type="text" name="name" placeholder="Please Enter strong password"><br><br>

                <button type="submit" value="submit">SUBMIT</button>
            </form>
        </div>
        </div>

        <div id="rightbox">
        <h1> Login Form </h1>
        <div class="form">
            <form action="" method="POST" id="form">
            
                <label>Enter your Email</label><br>
                <input type="text" name="email" placeholder="Please Enter Your full email"><br><br>

               
                <label>Enter your Password</label><br>
                <input type="text" name="name" placeholder="Please Enter strong password"><br><br>

                <button type="submit" value="submit">SUBMIT</button>
            </form>
        </div>
        </div>
    </body>
</html>