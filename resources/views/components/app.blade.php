<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-bg text-text">
    <div class="w-screen lg:w-[1024px] mx-auto sm:grid sm:grid-cols-[1fr,240px] gap-3 mt-3 font-mono">
        <nav class="col-span-2 flex flex-row flex-wrap px-3 items-center gap-5">
            <a class="bg-prompt px-2 py-1 !text-bg" href="/">
                [keiidev] $
            </a>
            <a class="headerlink" href="/">
                home
            </a>
            <a class="headerlink" href="/blog">
                blog
            </a>
            <a class="headerlink" href="/projects">
                projects
            </a>
        </nav>
        <div class="mt-3 sm:mt-0">
            {{ $slot }}
        </div>
        <div class="p-3 sm:p-0 mb-16 lg:mb-0">
            <img src="/images/logo.png" class="w-full aspect-square">
            <div class="grid grid-cols-3 h-8 py-3">
                <a href="https://gitlab.com/keiidev">
                    <img src="/images/gitlab.svg" class="h-6 py-1 w-full mx-auto cursor-pointer hover:bg-card">
                </a>
                <button onclick="updateDiscord()" id="discord" class="h-6 w-full cursor-pointer hover:bg-card">
                    <img src="/images/discord.svg" class="h-6 py-1 mx-auto">
                </button>
                <a href="https://www.youtube.com/@keiidev">
                    <img src="/images/youtube.svg" class="h-6 py-1 w-full mx-auto cursor-pointer hover:bg-card">
                </a>
            </div>
        </div>
    </div>
    <script>
function updateDiscord()
{
    let doc = document.getElementById('discord');
    doc.innerHTML = 'Copied';

    navigator.clipboard.writeText('keiidev');
}
    </script>
</body>
</html>
