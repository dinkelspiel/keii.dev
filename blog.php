<?php

require_once "parsedown/Parsedown.php";

$Parsedown = new Parsedown();

foreach(scandir("./posts/") as $file)
{
    if($file == "." || $file == "..")
    {
        continue;
    }

    echo "<div class='main'>";

    echo $Parsedown->text(join(" ", file("./posts/" . $file)));

    echo "</div>";
}

?>

<script>

if(window.location.hash) {
    var aTags = document.querySelectorAll('a[id]');

    for (var i = 0; i < aTags.length; i++) {
        var aTag = aTags[i];
        aTag.href = "/blog#" + aTag.id;
    }
}

</script>