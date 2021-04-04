<?php

$pattern="";
$text="";
$replaceText="";
$replacedText="";
$containString = "/\b($text)\b/";
$containEmail = "/\b([A-Za-z0-9._%+-]{2,})+@([A-Za-z0-9._]{2,})+\.[A-Za-z]{2,6}\b/";
$containPhone = "/^(\+(998))+\-([0-9]{2})+\-([0-9]{3})+\-([0-9]{4})/";
$match="Not checked yet.";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $pattern=$_POST["pattern"];
    $text=$_POST["text"];
    $replaceText=$_POST["replaceText"];

    $replacedText=preg_replace($pattern, $replaceText, $text);

    if(preg_match($pattern, $text)) {
        $match="Match!";
    } else {
        $match="Does not match!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Valid Form</title>
</head>
<body>
<h1>Validation Tests</h1>
<h3>Choose Pattern:</h3>
<select name=patOption>
    <option>OPTIONS...</option>
    <option value=<?= $containString ?>>Contain_String</option>
    <option value=<?= $containEmail ?>>Contain_Email</option>
    <option value=<?= $containPhone ?>>Contain_Phone</option>
</select>
<form action="regex_valid_form.php" method="post">
    <dl>
        <dt>Pattern</dt>
        <dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

        <dt>Text</dt>
        <dd><input type="text" name="text" value="<?= $text ?>"></dd>

        <dt>Replace Text</dt>
        <dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>

        <dt>Output Text</dt>
        <dd><?=	$match ?></dd>

        <dt>Replaced Text</dt>
        <dd> <code><?=	$replacedText ?></code></dd>

        <dt>&nbsp</dt>
        <dd><input type="submit" value="Check"></dd>
    </dl>

</form>
</body>
</html>