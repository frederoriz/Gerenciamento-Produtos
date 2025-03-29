<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Criar Produto</h1>

    <form wire:submit.prevent="save" class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto">
        <div class="mb-4">
            <label class="block font-semibold mb-1">Nome</label>
            <input type="text" wire:model="name" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Preço</label>
            <input type="text" wire:model="price" class="w-full p-2 border rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Salvar
        </button>
    </form>
</div>
