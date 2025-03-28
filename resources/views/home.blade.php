<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hello World</h1>
    @livewire('product-component')
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/livewire@2.x.x/dist/livewire.js" defer></script>
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('productAdded', () => {
                alert('Produto adicionado com sucesso!');
            });
        });
    </script>
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('productUpdated', () => {
                alert('Produto atualizado com sucesso!');
            });
        });
        document.addEventListener('livewire:load', function () {
            Livewire.on('productDeleted', () => {
                alert('Produto excluído com sucesso!');
            });
        });
    </script> --}}
</body>
</html>