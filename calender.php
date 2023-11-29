<?php
function build_calendar($month, $year)
{
    // First of all, we're going to create an array for the days of the week.
    $daysOfWeek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

    // Then we'll get the first day of the month.
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

    // Then calculate how many days are in the month.
    $numberDays = date('t', $firstDayOfMonth);

    // Getting some information about the first day of the month.
    $dateComponents = getdate($firstDayOfMonth);

    // Getting the name of this month.
    $monthName = $dateComponents['month'];

    // Getting the index value (0-6) of the first day of the month.
    $dayOfWeek = $dateComponents['wday'];

    // Getting the current date.
    $dateToday = date('Y-m-d');

    // Now create the HTML calendar table.
    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2></center>";
    $calendar .= "<tr>";

    // Creating a calendar header.
    foreach ($daysOfWeek as $day) {
        $calendar .= "<th class='header'>$day</th>";
    }

    $calendar .= "</tr><tr>";

    // The variable $dayOfWeek will make sure we have 7 columns.
    if ($dayOfWeek > 0) {
        for ($k = 0; $k < $dayOfWeek; $k++) {
            $calendar .= "<td></td>";
        }
    }

    // Initiating the day counter.
    $currentDay = 1;

    // Getting the month number.
    $month = str_pad($month, 2, "0", STR_PAD_LEFT);

    while ($currentDay <= $numberDays) {
        // If the seventh column (Saturday) is reached, start a new row.
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }

        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";

        if ($dateToday == $date) {
            $calendar .= "<td class='today'><h4>$currentDay</h4></td>";
        } else {
            $calendar .= "<td><h4>$currentDay</h4></td>";
        }



        $calendar .= "</td>";

        // Increment the counter.
        $currentDay++;
        $dayOfWeek++;
    }

    // Completing the row of the last week in the month, if necessary.
    if ($dayOfWeek != 7) {
        $remainingDays = 7 - $dayOfWeek;
        for ($i = 0; $i < $remainingDays; $i++) {
            $calendar .= "<td></td>";
        }
    }

    // Starting a new row after every week.
    $calendar .= "</tr>";
    $calendar .= "</table>";

    echo $calendar;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Roboto+Slab:wght@100&display=swap"
        rel="stylesheet">


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $dateComponents = getdate();
                $month = $dateComponents['mon'];
                $year = $dateComponents['year'];
                echo build_calendar($month, $year);
                ?>
            </div>
        </div>
    </div>
</body>

</html>