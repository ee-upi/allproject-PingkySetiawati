<div
    wire:ignore
    x-data
    {{ $attributes }}
>
    @php
        $model = $attributes->wire('model')->value();
    @endphp
    <script src='https://cdn.tiny.cloud/1/d2eyrcjk5emsow4ou6uvrn3bwn2y91axba4csr8wlm940lzj/tinymce/5/tinymce.min.js'
            referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea{{$model}}',
            license_key: 'gpl',

            // All your init stuff here, then the super important part at the bottom
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });

                // This section says that when you leave the text edit area, it will set whatever livewire variable you like to the currnt contents
                editor.on('blur', function (e) {
                    @this.set( '{{ $model }}', editor.getContent());
                });
            },



        });
    </script>
    <textarea class="h-screen p-2"
              id="mytextarea{{$model}}"
              name="mytextarea"
    > </textarea>
</div>
