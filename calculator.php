<?php
$cookie_name1 = "number";
$cookie_value1 = "";
$cookie_name2 = "operator";
$cookie_value2 = "";

if (isset($_POST['number'])) {
  $number = $_POST['result'] . $_POST['number'];
} else {
  $number = "";
}
if (isset($_POST['operator'])) {
  $cookie_value1 = $_POST['result'];
  setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

  $cookie_value2 = $_POST['operator'];
  setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
  $number = "";
}
if (isset($_POST['equal'])) {
  $number = $_POST['result'];
  switch ($_COOKIE['operator']) {
    case "+":
      $result = $_COOKIE['number'] + $number;
      break;
    case "-":
      $result = $_COOKIE['number'] - $number;
      break;
    case "*":
      $result = $_COOKIE['number'] * $number;
      break;
    case "/":
      if ($number == 0) {
        $result = "Error! Can't divide by zero!";
      } else
        $result = $_COOKIE['number'] / $number;
      break;
    case "c":
      $result = "";
      break;
  }
  $number = $result;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kalkulator Krisna Santosa</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>

<body>
  <div class="flex flex-col items-center justify-center h-screen bg-gray-100 dark:bg-gray-900">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 w-full max-w-md">
      <form action="" method="post">
        <div class="mb-6">
          <p class="text-gray-700 font-bold dark:text-white text-center text-2xl">CALCULATOR </p>
        </div>
        <div class="mb-6">
          <input type="text" readonly name="result" value="<?php echo @$number ?>" class="w-full px-4 py-3 text-2xl font-medium bg-gray-100 dark:bg-gray-700 dark:text-white rounded-md border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="0" type="text" />
        </div>

        <div class="grid grid-cols-4 gap-4">
          <!-- First Row -->
          <input type="submit" name="number" value="7" class="bg-gray-200 dark:bg-gray-700 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="number" value="8" class="bg-gray-200 dark:bg-gray-700 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="number" value="9" class="bg-gray-200 dark:bg-gray-700 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="operator" value="/" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />

          <!-- Second Row -->
          <input type="submit" name="number" value="4" class="bg-gray-200 dark:bg-gray-700 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="number" value="5" class="bg-gray-200 dark:bg-gray-700 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="number" value="6" class="bg-gray-200 dark:bg-gray-700 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="operator" value="*" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />

          <!-- Third Row -->
          <input type="submit" name="number" value="1" class="bg-gray-200 dark:bg-gray-700 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="number" value="2" class="bg-gray-200 dark:bg-gray-700 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="number" value="3" class="bg-gray-200 dark:bg-gray-700 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="operator" value="-" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />

          <!-- Fourth Row -->
          <input type="submit" name="operator" value="C" class="bg-red-500 hover:bg-red-600 text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="number" value="0" class="bg-gray-200 dark:bg-gray-700 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="equal" value="=" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
          <input type="submit" name="operator" value="+" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-3 px-4 rounded-md transition-colors duration-300" />
        </div>
        <div class="mt-6">
          <p class="text-center font-bold text-gray-700 dark:text-slate-400">CODE BY: KRISNA SANTOSA</p>
        </div>
      </form>
    </div>
  </div>
</body>

</html>