<div class='hecontainer'>
    <a class='heprimary' href="/">
        [keii.dev] $
    </a>
    <div id="helinks">

    </div>
</div>
<script>

const structureHeader = () => {
    let doc = document.getElementById("helinks");
    if(window.innerWidth < 550)
    {
        helinks.innerHTML = `
            <select id="heselect">
                <option disabled selected>
                    ≡
                </option>
                <option>
                    home
                </option>
                <option>
                    blog
                </option>
                <option>
                    projects
                </option>
            </select>   
        `;

        let select = document.getElementById("heselect")

        select.addEventListener("change", () => {
            switch(select.value)
            {
                case "home":
                    window.location.replace("/")
                    break;
                case "blog":
                    window.location.replace("/blog")
                    break;
                case "projects":
                    window.location.replace("/projects")
                    break;
            }
            select.value = "≡";
        });
    } else
    {
        helinks.innerHTML = `
            <a class='headerlink' href='/'>
                home
            </a>
            <a class='headerlink' href='/blog'>
                blog
            </a>
            <a class='headerlink' href='/projects'>
                projects
            </a>
        `;
    }
};

structureHeader();

addEventListener("resize", (event) => {
    structureHeader();
});
</script>