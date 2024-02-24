<!DOCTYPE html>

<head>
    
    <title>Selection</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>NUMERALOGY PREDICTOR</h2>

   

    <?php
function getSingleDigitSum($number) {
    while ($number > 9) {
        $number = array_sum(str_split((string)$number));
    }
    return $number;
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["option"])) {
    $selectedOption = $_POST["option"];


    switch ($selectedOption) {
        case 1:
            if (isset($_POST["userNumber"])) {
                $userNumber = $_POST["userNumber"];
                echo "<div class='result'>You entered: $userNumber<br>";

                
                switch ($userNumber) {
                    case 1:
                        echo "Characteristics for Number 1 is \n  SUN : King, Leadership Qualities, Egoistic";
                        break;
                    case 2:
                        echo "Characteristics for Number 2 is \n  MOON : Queen, Emotions";
                        break;
                    case 3:
                        echo "Characteristics for Number 3 is \n  JUPITER : Guru, Minister, Counselor, Creative, Hungry of Knowledge";
                        break;
                    case 4:
                        echo "Characteristics for Number 4 is \n  RAHU : Mischievous, Shadow of Sun, and Planner";
                        break;
                    case 5:
                        echo "Characteristics for Number 5 is \n  MERCURY : Prince, Accountant, Mental & Emotional Balance";
                        break;
                    case 6:
                        echo "Characteristics for Number 6 is \n  VENUS : Guru, Bad Minister, Strategy expert, Dancer, Luxury";
                        break;
                    case 7:
                        echo "Characteristics for Number 7 is \n  KETU : Shadow of Moon, Secretive, Cheat-facer";
                        break;
                    case 8:
                        echo "Characteristics for Number 8 is \n  SATURN : Judge, Servant, Struggle, Money Manager";
                        break;
                    case 9:
                        echo "Characteristics for Number 9 is \n  MARS : Commander, Humanity, Anger, Honorable old life";
                        break;
                    
                    default:
                        echo "please enter the number within the range";
                }

                echo "</div>";
            } else {
                echo '<form method="post" action="" autocomplete="off">
                        <label for="userNumber">Enter any number between 1 and 9:</label>
                        <input type="number" name="userNumber" id="userNumber" min="1" max="9" required>
                        <input type="hidden" name="option" value="1">
                        <input type="submit" value="Submit">
                      </form>';
            }
            break;

        case 2:
            if (isset($_POST["dob"])) {
                $dob = $_POST["dob"];
                $singleDigit = getSingleDigitSum(str_replace('-', '', $dob));

                echo "<div class='result'>Sum of the digits in your date of birth: $singleDigit<br>";

               
                switch ($singleDigit) {
                    case 1:
                        echo "Characteristics for Number 1 is \n  SUN : King, Leadership Qualities, Egoistic";
                        break;
                    case 2:
                        echo "Characteristics for Number 2 is \n  MOON : Queen, Emotions";
                        break;
                        break;
                    case 3:
                        echo "Characteristics for Number 3 is \n  JUPITER : Guru, Minister, Counselor, Creative, Hungry of Knowledge";
                        break;
                    case 4:
                        echo "Characteristics for Number 4 is \n  RAHU : Mischievous, Shadow of Sun, and Planner";
                        break;
                    case 5:
                        echo "Characteristics for Number 5 is \n  MERCURY : Prince, Accountant, Mental & Emotional Balance";
                        break;
                    case 6:
                        echo "Characteristics for Number 6 is \n  VENUS : Guru, Bad Minister, Strategy expert, Dancer, Luxury";
                        break;
                    case 7:
                        echo "Characteristics for Number 7 is \n  KETU : Shadow of Moon, Secretive, Cheat-facer";
                        break;
                    case 8:
                        echo "Characteristics for Number 8 is \n  SATURN : Judge, Servant, Struggle, Money Manager";
                        break;
                    case 9:
                        echo "Characteristics for Number 9 is \n  MARS : Commander, Humanity, Anger, Honorable old life";
                        break;
                    
                    default:
                        echo "Please enter the corrent format.";
                }

                echo "</div>";
            } else {
      


                echo '<form method="post" action="" autocomplete="off">
                        <label for="dob">Select your date of birth:</label>
                        <input type="date" name="dob" id="dob" required>
                        <input type="hidden" name="option" value="2">
                        <input type="submit" value="Submit">
                      </form>';
            }
            break;

        default:
            echo "<div class='result'>Invalid option selected.</div>";
    }
} else {
   
    echo '<form method="post" action="" autocomplete="off">
            <label for="option">Select an option:</label>
            <select name="option" id="option" required>
                <option value="" disabled selected>Select an option</option>
                <option value="1">Choose a number</option>
                <option value="2">Enter your DOB</option>
               
                
            </select>
            <input type="submit" value="Submit">
          </form>';
}

?>

</body>
</html>


