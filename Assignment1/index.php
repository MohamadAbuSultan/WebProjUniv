<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            font-weight: bold;
            background-color: rgb(228, 255, 242);
        }

        header nav li {
            display: table;
            height: 100%;
            float: left;
            margin: 30px 40px;
        }

        header nav a:hover {
            color: blue;
        }

        nav a {
            color: black;
            background-color: #0080FF;
        }

        header {
            width: 100vw;
            height: 70px;
            border-top: solid 1px rgba(0, 0, 0, 0.897);
            border-top-right-radius: solid 1px rgba(0, 0, 0, 0.897);
            border-top-left-radius: solid 1px rgba(0, 0, 0, 0.897);
            border-bottom: solid 1px rgba(0, 0, 0, 0.897);
            background-color: rgb(0, 156, 254);
        }
    </style>
</head>

<body>
    <div>
        <header>
            <div>
                <nav>
                    <li><span><a href="">My Page</a></span></li>
                    <li><span><a href="">Employee Engagment</a></span></li>
                    <li><span><a href="">Employee Directory</a></span></li>
                    <li><span><a href="">PMS</a></span></li>
                    <li><span><a href="">ESS</a></span></li>
                    <li><span><a href="">Dashboard</a></span></li>
                    <li><span><a href="">Downloads</a></span></li>
                </nav>
            </div>
        </header>

        <div style="background-color: #00FFFF; margin: 20px;">
            Attendence Regularisation Form <br> <br>
                  <input type="radio" id="Self" name="Attendence" value="Self" style="margin-left: 500px;">
                  <label for="Self">Self</label>
                  <input type="radio" id="OnBehalf" name="Attendence" value="OnBehalf">
                  <label for="OnBehalf">On Behalf</label>
        </div>
    </div>
</body>

</html>