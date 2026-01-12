<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Candy Store String Functions</title>
    <link rel="stylesheet" href="css/styles.css">
<style>
h1 { 
    text-align: center; 
    font-family: sans-serif; 
    color: #5b6f95;
}

nav { 
    text-align: center; 
    margin-bottom: 20px; 
}

nav a {
    text-decoration: none;
    font-family: sans-serif;
    color: #d16c9a;
    font-weight: bold;
}

h2 {
    text-align: center;
    font-family: sans-serif;
    color: #6fb7a5;
}

table { 
    width: 80%; 
    border-collapse: collapse; 
    margin: 20px auto; 
    font-family: sans-serif;
    background-color: #e8f6f3;
    color: #444;
}

th, td { 
    border: 1px solid #cfdede; 
    padding: 12px; 
    text-align: left; 
}

th {
    background-color: #cfe9f6;
}

tr:nth-child(even) { 
    background-color: #fde2ee;
}

footer {
    text-align: center;
    font-family: sans-serif;
    margin: 20px 0;
    color: #5b6f95;
}

code { 
    background: #f2f2f2; 
    padding: 2px 4px; 
    border-radius: 4px; 
}
</style>

</head>
<body>

<h1>Candy Store — PHP String Functions</h1>

<nav>
    <a href="#">Hands-On Mod 5</a>
</nav>

<?php
$store = "SWEET TOOTH CANDY SHOP";
$owner = "Michaela Jean Venzon";
$sample = "   Welcome to the Candy Store!   ";
?>

<h2>Changing the Case of Characters</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Lowercase</td>
        <td><?php echo strtolower($store); ?></td>
    </tr>
    <tr>
        <td>Uppercase</td>
        <td><?php echo strtoupper($store); ?></td>
    </tr>
    <tr>
        <td>Capitalize</td>
        <td><?php echo ucwords(strtolower($store)); ?></td>
    </tr>
</table>

<h2>Counting Characters and Words</h2>
<table>
    <tr>
        <th>Description</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Number of Characters (no spaces)</td>
        <td><?php echo strlen(str_replace(" ", "", $owner)); ?></td>
    </tr>
    <tr>
        <td>Number of Words</td>
        <td><?php echo str_word_count($owner); ?></td>
    </tr>
</table>

<h2>Removing and Replacing Characters</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Remove whitespaces from left</td>
        <td><?php echo ltrim($sample); ?></td>
    </tr>
    <tr>
        <td>Remove whitespaces from right</td>
        <td><?php echo rtrim($sample); ?></td>
    </tr>
    <tr>
        <td>Remove whitespace from left and right</td>
        <td><?php echo trim($sample); ?></td>
    </tr>
    <tr>
        <td>String replace</td>
        <td><?php echo str_replace("Candy", "Sweet Candy", $sample); ?></td>
    </tr>
    <tr>
        <td>String ireplace</td>
        <td><?php echo str_ireplace("welcome", "Enjoy", $sample); ?></td>
    </tr>
    <tr>
        <td>String Repeat</td>
        <td><?php echo str_repeat(" Yum! ", 3); ?></td>
    </tr>
</table>

<h2>Other Built-in Functions</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Substring</td>
        <td><?php echo substr($store, 0, 10); ?></td>
    </tr>
    <tr>
        <td>String Position</td>
        <td><?php echo strpos($store, "CANDY"); ?></td>
    </tr>
    <tr>
        <td>String Reverse</td>
        <td><?php echo strrev($store); ?></td>
    </tr>
    <tr>
        <td>String Shuffle</td>
        <td><?php echo str_shuffle($store); ?></td>
    </tr>
    <tr>
        <td>First Character Uppercase</td>
        <td><?php echo ucfirst(strtolower($store)); ?></td>
    </tr>
    <tr>
        <td>HTML Special Characters</td>
        <td><?php echo htmlspecialchars("<b>CANDY</b>"); ?></td>
    </tr>
    <tr>
        <td>Word Wrap</td>
        <td><?php echo wordwrap($store, 8, "<br>"); ?></td>
    </tr>
    <tr>
        <td>String Comparison</td>
        <td><?php echo strcmp("Sweet", "sweet"); ?></td>
    </tr>
    <tr>
        <td>Explode String</td>
        <td>
            <?php 
                $words = explode(" ", $store);
                echo $words[0];
            ?>
        </td>
    </tr>
</table>

<footer>
    <p>Michaela Jean Venzon | Mod 5</p>
</footer>

</body>
</html>

