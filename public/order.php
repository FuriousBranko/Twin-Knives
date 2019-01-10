<!DOCTYPE html>
<?php require_once dirname(__DIR__) . '/config/configuration.php'; ?>
<html lang="en">

<?php
    $title = "TwinKnives";
    $keywords = "Something, very, interesting, about, this, hackaton";
	$description = "Something very interesting";
	$authors = "Radivoje Pupovac & Branko Sabo";
    require_once 'includes/headData.php';
?>

<body>
    <?php require_once 'includes/navigation.php'; ?>
    <div class="container">
        <div id="" class="">
            <br>
            <table class="table table-striped table-hover" width="100%">
                <thead>
                    <tr>
                        <th id="" class="">
                            Image 
                        </th>
                        <th id="" class="">
                            Name 
                        </th>
                        <th id="" class="">
                            Unit price 
                        </th>
                        <th id="" class="">
                            Quantity 
                        </th>
                        <th id="" class="">
                            Total price 
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="row0">
                        <td data-title="Image" class="">
                            <div class="">
                                <img class="" title="" alt="" src="">
                            </div>
                        </td>
                        <td data-title="Name" class="">
                            <p class=""><a class="" href="#"><!-- Naziv Jela--></a> </p>
                        </td>
                        <td data-title="Unit price" class="">
                            <span class=""><span class=""><!-- Cena po kom --></span> </span>
                        </td>
                        <td data-title="Quantity" class="">
                            <input id="" type="number" name="" class="" value="2" min="0">
                        </td>
                        <td data-title="Total price" class="">
                            <span class=""><span class=""><!-- Ukupna Cena --></span> </span>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class=""></td>
                        <td id="" class="">
                            Total 
                        </td>
                        <td class="" data-title="Total">
                            <span class=""><!-- Sve ukupno--></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
</body>
<?php require_once 'includes/js.php'; ?>

</html>
