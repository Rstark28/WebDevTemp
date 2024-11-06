<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Hours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            margin: 0;
            padding: 20px;
        }
        .hours {
            max-width: 600px;
            margin: 0 auto;
            background: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .hours h2 {
            text-align: center;
            color: #ffb74d;
            margin-bottom: 20px;
        }
        .hours p {
            font-size: 18px;
            color: #add8e6;
            margin: 10px 0;
            transition: color 0.3s;
        }
        .hours p:hover {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="hours">
        <h2>Office Hours</h2>
        <?php
            $office_hours = array(
                "Monday" => "9am - 4pm",
                "Tuesday" => "9am - 4pm",
                "Wednesday" => "9am - 4pm",
                "Thursday" => "9am - 4pm",
                "Friday" => "9am - 4pm",
                "Saturday" => "Closed",
                "Sunday" => "Closed"
            );

            foreach ($office_hours as $day => $hours) {
                echo "<p>$day: $hours</p>";
            }
        ?>
    </div>
</body>
</html>