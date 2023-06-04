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
            background-color: #F5F5F5;
            color: black;
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

        .form-container {
            margin: 20px;
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            background-color: #b29e9e;
            color: black;
        }

        label {
            display: flex;
            align-items: center;
            width: max-content;
            color: #808080;
            border: none;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        textarea {
            width: 50%;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: blue;
            color: #808080;
            border: none;
            cursor: pointer;
            margin-left: 500px;
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


        <div class="form-container">
            <h2>Attendence Regularisation Form</h2>
            <br>
            <label for="regType">Regularization Type:</label>
            <select id="regType" name="regType">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>

            <label for="fromDate">From Date:</label>
            <input type="date" id="fromDate" name="fromDate">

            <label for="fromTime">From Time:</label>
            <input type="time" id="fromTime" name="fromTime">

            <label for="contactNumber">Contact Number:</label>
            <input type="text" id="contactNumber" name="contactNumber" placeholder="Enter your contact number">

            <label for="place">Place:</label>
            <input type="text" id="place" name="place" placeholder="Enter the place">

            <label for="reason">Reason:</label>
            <textarea id="reason" name="reason" rows="4" placeholder="Enter the reason"></textarea>

            <label for="manager">Your manager:</label>
            <input type="text" id="manager" name="manager" placeholder="Enter your manager's name">

            <input type="submit" value="Submit">
        </div>
    </div>
</body>

</html>