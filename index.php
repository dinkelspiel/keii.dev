<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>keii</title>
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/home.css">
        <link rel="stylesheet" href="styles/globals.css">
    </head>
    <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>

    <?php include "header.php"; ?>

    <div class='container'>
        <?php 
            require_once "parsedown/Parsedown.php";
        
            function renderStatic(string $page)
            {
                $Parsedown = new Parsedown();
        
                echo "<div class='main'>";

                echo $Parsedown->text(join(" ", file("./pages/" . $page . ".md")));

                echo "</div>";
            }

            switch($_SERVER['REQUEST_URI'])
            {
                case "/":
                    renderStatic("home");
                    break;
                case "/blog":
                    include "blog.php";
                    break;
                case "/projects":
                    renderStatic("projects");
                    break;
                // case "/info":
                //     echo phpinfo();
                //     break;
                default:
                    renderStatic("invalidroute");
                    break;

            }
        ?>
        <footer>
            &copy; 2023 keii <br/>
        </footer>
    </div>
    <script src="./colors.js"></script>
    <script>
        var paragraphs = Array.prototype.slice.call(document.getElementsByTagName("p"));

        paragraphs.forEach(paragraph => {
            if(paragraph.innerHTML.startsWith("languages="))
            {
                // const url = `https://api.github.com/repos/${paragraph.innerHTML.split("=")[1]}/languages`;
                const url = `https://gitlab.com/api/v4/projects/${paragraph.innerHTML.split("=")[1].replace("/", "%2F")}/languages`

                fetch(url, {
                    method: 'GET'
                })
                .then(response => {
                    if (response.status === 200) {
                        return response.json();
                    } else {
                        throw new Error('Failed to fetch data from GitHub API');
                    }
                })
                .then(languages => {
                    paragraph.innerHTML = "";
                    paragraph.classList = "languages";
                    Object.keys(languages).forEach(e => {
                        paragraph.innerHTML += `<div style="flex: ${languages[e]}% 1; background-color: ${colors[e]['color']};" class="language">${languages[e] > 18 || window.innerWidth > 750 ? `<span class="tooltip">${e}</span>` : ""}</div>`
                    });

                    // console.log(languages);
                })
                .catch(error => {
                    console.error('Error:', error.message);
                });
            } else if(paragraph.innerHTML.startsWith("images="))
            {
                let images = paragraph.innerHTML.substring(7, paragraph.innerHTML.length).split(',');
                // console.log(images);

                paragraph.innerHTML = "";
                images.forEach(e => {
                    paragraph.innerHTML += `<img src="/images/${e}" width="100%" style="cursor: pointer; margin-bottom: 8px"></img>`
                })
            }
        });
    </script>
</html>
