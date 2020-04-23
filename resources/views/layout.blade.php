<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700&display=swap"
        rel="stylesheet">
    <title>@yield('title') | LiteMailer</title>
</head>

<body class="font-custom min-h-screen">
    <header class="py-4 px-6 absolute top-0 left-0 right-0 z-10">
        <div class="container mx-auto">
            <div class="flex items-center">
                <div class="flex-1">
                    <a href="{{url('/')}}" class="text-3xl font-bold">LiteMailer</a>
                </div>
                <button class="text-secondary lg:hidden">
                    <svg class="current-fill h-6 w-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-49 141 512 512"
                        style="enable-background:new -49 141 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M413,422H1c-13.807,0-25-11.193-25-25s11.193-25,25-25h412c13.807,0,25,11.193,25,25S426.807,422,413,422z" />
                            </g>
                            <g>
                                <path
                                    d="M413,562H1c-13.807,0-25-11.193-25-25s11.193-25,25-25h412c13.807,0,25,11.193,25,25S426.807,562,413,562z" />
                            </g>
                            <g>
                                <path
                                    d="M413,282H1c-13.807,0-25-11.193-25-25s11.193-25,25-25h412c13.807,0,25,11.193,25,25S426.807,282,413,282z" />
                            </g>
                        </g>
                    </svg>

                </button>
                <nav class="hidden lg:flex items-center">
                    <a href="{{url('/')}}" class="px-6 py-3 font-bold uppercase">Home</a>
                    <a href="{{url('email/send')}}"
                        class="px-6 py-3 font-bold uppercase">
                        Send Mail
                    </a>
                    <a href="{{url('email/send')}}"
                        class="px-6 py-3 font-bold uppercase">
                        Add E-Mail
                    </a>
                </nav>
            </div>
        </div>
    </header>
    <div class="relative overflow-hidden px-6 pb-6">
        <img src="images/wave.svg" class="absolute top-0 left-2/5">
        <div class="container mx-auto relative">
            <div class="flex flex-col md:flex-row items-center pt-32 pb-16 md:pb-0">
                <div class="md:w-1/2 lg:w-1/3 mb-4 sm:mb-16 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-secondary leading-tight mb-6 md:mb-10">
                        Bulk email software for email marketing
                    </h1>
                    <p class="text-xl ">
                        LiteMailer is an email sending application. You can check how we built it by following this <a
                            class="text-teal-500 text-" href="http://stephenjude.me/series/laravel-lessons">blog
                            series</a>.
                    </p>
                </div>
                <div class="mt-16 sm:mt-0 flex-1 flex justify-end">
                    <img src="images/hero.svg">
                </div>
            </div>
        </div>
    </div>
    <footer class="pt-12">
        <div class="bg-blue-100">
            <div class="container mx-auto px-6 py-12 text-secondary-500 text-center border-t border-gray-300">
                <p>Copyright ©2019 TaildwindComponents. All rights reserved. | Illustrations by <a
                        href="https://freepik.com/" class="text-secondary-900 font-bold underline">Freepik</a> | Avatars
                    by <a href="https://uifaces.co/" class="text-secondary-900 font-bold underline">UI Faces</a></p>
            </div>
        </div>
    </footer>
</body>

</html>
