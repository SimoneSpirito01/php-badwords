<?php 

$testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati aliquid labore delectus. Non, ea, nihil dolorum voluptas quo aliquid voluptate optio tempora temporibus eligendi quae pariatur porro blanditiis. Perspiciatis, vitae?
Perferendis repellendus quisquam ipsam dicta officia, eos culpa eveniet, commodi incidunt beatae hic magnam error dolore quo aliquid quaerat velit voluptates! Laborum, mollitia suscipit fugiat rem nostrum dolore cupiditate atque.
Laborum in doloremque officia ab dolorum, dolore eveniet totam. Reiciendis sunt labore ab voluptates est eveniet velit dolor temporibus quia, deserunt vel a beatae asperiores, animi ea, aliquid provident officia.
Tempore placeat beatae ullam, minus alias perferendis debitis commodi velit eius cum! Amet cupiditate maiores incidunt. Doloribus quis iste quidem dolor obcaecati necessitatibus dicta repellat corporis ea, nam maxime facilis?
Autem assumenda ipsum possimus, nemo ducimus tempore voluptate pariatur praesentium dolorem incidunt et sit facilis deleniti quisquam aut ea accusantium, odio itaque numquam ut blanditiis dolorum eum ipsa. Vel, laboriosam.";

$testoCensurato = str_replace($_GET["parola"], "***", $testo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>

<h3>Lunghezza paragrafo: <?php echo strlen($testoCensurato); ?></h3>
<p><?php echo $testoCensurato; ?></p>
    
</body>
</html>