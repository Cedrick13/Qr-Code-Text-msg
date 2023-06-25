<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>SMS Online</title>
        <link rel="stylesheet" href="text.css">
    </head>
<body>    
<div class="sms-container">

<form action="send_sms.php" method="POST">
    <label for="recipient">Number</label>
    <input type="text" name="recipient" id="recipient">
    <label for="sms">Write SMS</label>
    <textarea name="sms" id="sms" cols="30" rows="10"></textarea>
    <input type="submit" value="Send SMS" name="submit">
</form>
</body>
</html>