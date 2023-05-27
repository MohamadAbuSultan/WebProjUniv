<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        *{
            margin: 10px 10px;
        }
    </style>
</head>

<body>
    <h1>Display Academic Advising Form</h1>

    <div>
        <h3>Entered Details:</h3>
        <p>Name: <?php echo $_GET['fname']; ?> <?php echo $_GET['lname']; ?></p>
        <p>Phone: <?php echo $_GET['Phone']; ?></p>
        <p>ShortText: <?php echo $_GET['text']; ?></p>
        <p>Student ID: <?php echo $_GET['id']; ?></p>
        <p>Request For: <?php echo $_GET['check']; ?></p>
        <p>Reasons: <?php echo $_GET['Reason']; ?></p>
        <p>Recommendation: <?php echo $_GET['Recommendation']; ?></p>
    </div>
</body>

</html>