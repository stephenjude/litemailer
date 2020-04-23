<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700&display=swap"
        rel="stylesheet">
    <title>@yield('title') | LiteMailer</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="min-h-screen">
    <header x-data="{ openNav: false }" :class="{'bg-white': openNav === true }"
        class="py-4 px-6 absolute top-0 left-0 right-0 z-10 h-48">
        <div class="container mx-auto">
            <nav class="flex items-center justify-between flex-wrap">
                <div class="flex items-center flex-shrink-0 mr-6">
                    <a href="{{url('/')}}" class="text-3xl font-bold">LiteMailer</a>
                </div>
                <div class="block lg:hidden">
                    <button @click="openNav = !openNav" class="flex items-center px-3 py-2">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!openNav" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd" style="display: none;"></path>
                            <path x-show="openNav" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div :class="{'hidden': openNav === false }"
                    class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow">
                    </div>

                    <div>
                        <a href="{{url('/')}}" class="block mt-4 lg:inline-block lg:mt-0  font-bold uppercase mr-4">
                            Home
                        </a>
                        <a href="{{url('email/send')}}"
                            class="block mt-4 lg:inline-block lg:mt-0  font-bold uppercase mr-4">
                            Send Mail
                        </a>
                        <a href="{{url('email/add')}}"
                            class="block mt-4 lg:inline-block lg:mt-0  font-bold uppercase mr-4">
                            Add Mail
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="pt-12">
        <div class="bg-blue-100">
            <div class="container mx-auto px-6 py-6 text-secondary-500 text-center border-t border-gray-300">
                <p>LiteMailer {{ date('Y') }}
                    | Fork on <a href="https://github.com/stephenjude/litemailer" class="font-bold underline">Github</a>
                    | Made with <a class="font-bold underline" href="https://tailwindcss.com">TailwindCSS</a>,
                    <a class="font-bold underline" href="https://github.com/alpinejs/alpine">AlpineJs</a> &
                    <a class="font-bold underline" href="https://tailwindcomponents.com">TailwindComponents</a>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>
