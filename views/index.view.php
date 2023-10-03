<?php require('partials/head.php'); ?>

<body class="prose">
    <h1>Server is running...</h1>

    <?php  
        $newSquare = new Square(4);
        $sides_displayed = ($newSquare->width * 20) . "px";
        echo "<div class='h-[$sides_displayed] w-[$sides_displayed] border-black border-[1px] bg-cyan-500' ></div>";
        echo "Side Length: " . $newSquare->width . "<br>";
        echo "Area: " . $newSquare->area() . "<br>";
        echo "Perimeter: " . $newSquare->perimeter() . "<br>";
        echo "Diagonal: " . $newSquare->diagonal() . "<br>";
        $newSquare->echo_height();

?>
<br/>
<br/>
<?php
        $newRectangle = new Rectangle(3,4);
        $height_displayed = ($newRectangle->height * 20) . "px";
        $width_displayed = ($newRectangle->width * 20) . "px";
        echo "<div class='h-[$height_displayed] w-[$width_displayed] border-black border-[1px] bg-green-500' ></div>";
        echo "Width: " . $newRectangle->width . "<br>";
        echo "Height: " . $newRectangle->height . "<br>";
        echo "Area: " . $newRectangle->area() . "<br>";
        echo "Perimeter: " . $newRectangle->perimeter() . "<br>";
        echo "Diagonal: " . $newRectangle->diagonal() . "<br>";
    
    ?>
</body>
</html>