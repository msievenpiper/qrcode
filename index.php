<?php

require_once __DIR__ . '/vendor/autoload.php';

use chillerlan\QRCode\QRCode;

// Get the data from the $_GET
$data = isset($_GET['code']) ? $_GET['code'] : 'https://www.yourmeds.net/staff';
// quick and simple:
echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />';

?>

<html>

<body>

<form action="index.php" method="get">
    <label>
        What you would like to encode
        <br />
        <textarea name="code" style="width: 500px; height: 500px;"><?php echo htmlspecialchars($data); ?></textarea>
    </label>
    <br />
    <button type="submit">Submit</button>
</form>

</body>

</html>
