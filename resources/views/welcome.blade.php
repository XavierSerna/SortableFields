<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <!--
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        -->
        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-16">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <livewire:things />
            </div>
        </div>

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v1.x.x/dist/livewire-sortable.js"></script>
        <!--
        <script>
            let root = document.querySelector('[drag-root]')

            root.querySelectorAll('[drag-item]').forEach(el => {
                el.addEventListener('dragstart', e => {
                    e.target.setAttribute('dragging', true)
                })

                el.addEventListener('drop', e => {
                    e.target.classList.remove('bg-yellow-100')

                    let draggingEl = root.querySelector('[dragging]')

                    e.target.before(draggingEl)

                    let component = Livewire.find(
                        e.target.closest('[wire\\:id]').getAttribute('wire id\')
                    )

                    let orderIds = Array.root.querySelectorAll('[drag-item]')
                        .map(itemEl => itemEl.getAttribute('drag-item'))

                    let method = root.getAttribute('drag-root')

                    component.call(method, orderIds)
                })

                el.addEventListener('dragenter', e => {
                    e.target.classList.add('bg-yellow-100')

                    e.preventDefault()
                })

                el.addEventListener('dragover', e => e.preventDefault())

                el.addEventListener('dragleave', e => {
                    e.target.classList.remove('bg-yellow-100')
                })

                el.addEventListener('dragend', e => {
                    e.target.removeAttribute('dragging')
                })
            })
        </script>
        -->
    </body>
</html>
