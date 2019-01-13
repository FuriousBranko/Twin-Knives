<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<?php
    $title = "TwinKnives";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once 'includes/headData.php';
?>
<style>
body {
    background: #252525
}
.star-rating {
    direction: rtl;
}
.star-rating input[type="radio"] {
    display: none
}
.star-rating > label {
    color: #ccc;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    cursor: pointer;
    font-size: 50px
}
.star-rating > label:hover,
.star-rating > label:hover ~ label,
.star-rating > input[type="radio"]:checked ~ label
{color: #f2b600}
</style>
</head>
<body>
    <form action="">
    <textarea id="textarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 148px;"></textarea>
<div class="star-rating">
    
    <input id="star-5" type="radio" name="rating" value="5">
    <label for="star-5" title="5 stars">
        <i class="fa fa-star fa-xs"></i>
    </label>

    <input id="star-4" type="radio" name="rating" value="4">
    <label for="star-x" title="4 stars">
        <i class="fa fa-star fa-xs"></i>
    </label>

    <input id="star-3" type="radio" name="rating" value="3">
    <label for="star-3" title="3 stars">
        <i class="fa fa-star fa-xs"></i>
    </label>

    <input id="star-2" type="radio" name="rating" value="2">
    <label for="star-2" title="2 stars">
        <i class="fa fa-star fa-xs"></i>
    </label>

    <input id="star-1" type="radio" name="rating" value="1">
    <label for="star-1" title="1 star">
        <i class="fa fa-star fa-xs"></i>
    </label>
    
</div>
</form>
</body>
</html>