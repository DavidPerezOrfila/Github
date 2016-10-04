<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Otra</title>
</head>
<body>
<div id="header">
    <ul>
        <li><a href="index.php">Inicio</a></li>
    </ul>
    </div>
<div id="primerOperador">
    <p><?php echo $_POST['primerOperador']; ?></p>
    </div>
</div>
<div id="segundoOperador">
    <p><?php echo $_POST['segundoOperador']; ?></p>
</div>
<div id="suma">
    <h2>La suma de los dos números es: <?php echo $_POST['primerOperador'] + $_POST['segundoOperador'];?></h2>
</div>
</body>
</html>

