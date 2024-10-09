/*<html>
<head>
<title>Find Thrusday</title>
</head>
<body>
<form method=post>
<p>Enter Date <input type=text name=date></p>
<input type=submit name=find value="Find Thrusday">
<?php
	
	if(isset($_POST['find']))
	{
			$date=$_POST['date'];
			
			echo $day = date('l', strtotime($date));
	}
?>
</form>
</body>
</html>*/


<?php
// Function to find the day using a switch statement
function findDay($dayOfWeek) {
    switch ($dayOfWeek) {
        case 1:
            return "Monday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday"; // Target: Thursday
        case 5:
            return "Friday";
        case 6:
            return "Saturday";
        case 0:
            return "Sunday";
        default:
            return "Invalid day number.";
    }
}

// Get user input date
if (isset($_POST['date'])) {
    $inputDate = $_POST['date'];

    // Convert input date to timestamp and then get the day of the week (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
    $timestamp = strtotime($inputDate);
    $dayOfWeek = date('w', $timestamp); // 'w' gives numeric representation of the day (0 for Sunday through 6 for Saturday)

    // Call the function and determine the day
    $dayName = findDay($dayOfWeek);

    // Check if it's Thursday
    if ($dayName == "Thursday") {
        echo "The date you entered falls on a Thursday.";
    } else {
        echo "The date you entered is $dayName, not a Thursday.";
    }
}
?>

<!-- HTML form for user input -->
<!DOCTYPE html>
<html>
<head>
    <title>Find Thursday</title>
</head>
<body>
    <form method="POST">
        <label for="date">Enter a date (YYYY-MM-DD):</label>
        <input type="date" name="date" required>
        <input type="submit" value="Find Day">
    </form>
</body>
</html>
