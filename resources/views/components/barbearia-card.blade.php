@props(['barbearia'])

<div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg border border-gray-800 hover:border-[#d19f68] transition-all hover-scale">
    <div class="h-48 bg-cover bg-center" style="background-image: url('{{ $barbearia->imagem_url }}')"></div>
    <div class="p-6">
        <div class="flex items-center gap-3 mb-4">
            <ion-icon name="business-outline" class="text-[#d19f68] text-2xl"></ion-icon>
            <h3 class="text-xl font-bold">{{ $barbearia->nome }}</h3>
        </div>

        <div class="space-y-3 text-gray-300">
            <div class="flex items-center gap-2">
                <ion-icon name="location-outline" class="text-[#d19f68]"></ion-icon>
                <p>{{ $barbearia->endereco }}</p>
            </div>

            <div class="flex items-center gap-2">
                <ion-icon name="call-outline" class="text-[#d19f68]"></ion-icon>
                <p>{{ $barbearia->telefone }}</p>
            </div>

            <div class="flex items-center gap-2">
                <ion-icon name="star" class="text-[#d19f68]"></ion-icon>
                <p>{{ $barbearia->avaliacao }} ({{ $barbearia->avaliacoes_count }} avaliações)</p>
            </div>
        </div>

        <div class="mt-6">
            <a href="#" class="block w-full text-center bg-[#d19f68] text-black font-semibold py-3 rounded-lg hover:bg-[#b88c5a] transition-colors">
                Agendar Horário
            </a>
        </div>
    </div>
</div>

@push('styles')
<style>
    .hover-scale:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }
</style>
@endpush