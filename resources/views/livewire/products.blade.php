<div class="container mx-auto p-4 mt-10">
    <h1 class="text-2xl font-bold mt-10 mb-4">Lista de Produtos</h1>

    <a href="{{ route('filament.admin.resources.products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
        Criar Produto
    </a>

    <table class="min-w-full bg-white border border-gray-200 mt-5 rounded-lg overflow-hidden shadow-md">
        <thead class="bg-gray-100 border-b">
            <tr>
                <th class="py-2 px-4 border text-left">ID</th>
                <th class="py-2 px-4 border text-left">Nome</th>
                <th class="py-2 px-4 border text-left">Preço</th>
                <th class="py-2 px-4 border text-left">Descrição</th>
                <th class="py-2 px-4 border text-left">Status</th>
                <th class="py-2 px-4 border text-left">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-2 px-4 border">{{ $product['id'] }}</td>
                    <td class="py-2 px-4 border">{{ $product['name'] }}</td>
                    <td class="py-2 px-4 border">R$ {{ $product['price'] }}</td>
                    <td class="py-2 px-4 border">{{ $product['description'] }}</td>
                    <td class="py-2 px-4 border">{{ $statusOptions[$product['status']] }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('filament.admin.resources.products.edit', $product['id']) }}" class="text-blue-500 hover:underline">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>