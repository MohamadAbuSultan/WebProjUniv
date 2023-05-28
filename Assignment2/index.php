<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        * {
            margin-left: 10px;
        }

        input[type="text"],
        textarea {
            border: 1px solid red;
        }

        .custom-control-input:checked~.custom-control-label::before {
            border-color: red;
            background-color: red;
        }

        .custom-control-input:focus~.custom-control-label::before {
            border-color: red;
            box-shadow: 0 0 0 0.2rem rgba(255, 0, 0, 0.25);
        }
    </style>
</head>

<body>
    <h1>Academic Advising Form</h1>

    <form action="display.php" method="GET">
        <label for="fname">Name:</label><br>
        <input type="text" id="fname" name="fname" placeholder="First">
        <input type="text" id="lname" name="lname" placeholder="Last"><br><br>

        <label for="Phone">Phone:</label><br>
        <input type="text" id="Phone" name="Phone" placeholder="### ### ####"><br><br>

        <label for="text">ShortText:</label>
        <label for="text" style="margin-left: 110px;">Student Id:</label> <br>

        <input type="text" id="text" name="text" placeholder="text">
        <input type="text" id="id" name="id" placeholder="id"><br><br>

        <p>Request For:</p>

        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="revision" value="revision" name="check">
            <label class="custom-control-label" for="revision">revision of load</label><br>
        </div>

        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="shifting" value="shifting" name="check">
            <label class="custom-control-label" for="shifting">shifting/transferring</label><br>
        </div>

        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="taking" value="taking" name="check">
            <label class="custom-control-label" for="taking">taking prerequisite and advanced courses
                simultaneously</label><br>
        </div>

        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="dropping" value="dropping" name="check">
            <label class="custom-control-label" for="dropping">dropping of course</label><br>
        </div>

        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="choice" value="choice" name="check">
            <label class="custom-control-label" for="choice">choice/change of specialization</label><br>
        </div>

        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="other" value="other" name="check">
            <label class="custom-control-label" for="other">other</label><br><br>
        </div>

        <label>Reasons:</label>
        <label style="margin-left:220px">Recommendation</label><br>
        <textarea id="Reason" name="Reason" rows="4" cols="35"></textarea>
        <textarea id="Recommendation" name="Recommendation" rows="4" cols="35"></textarea><br><br>

        <label>Academic Signature:</label><br>
        <canvas id="signatureCanvas" width="500" height="200" style="border: 1px solid #000;"></canvas><br>
        <button type="button" onclick="clearSignature()">Clear</button><br><br>

        <input type="submit" value="Submit" style="color: white; background-color: blue; border-color: red; border-radius: 15px; margin-left: 230px;">
    </form>

    <script>
        function clearSignature() {
            var canvas = document.getElementById("signatureCanvas");
            var context = canvas.getContext("2d");
            context.clearRect(0, 0, canvas.width, canvas.height);
        }
    </script>

</body>

</html>