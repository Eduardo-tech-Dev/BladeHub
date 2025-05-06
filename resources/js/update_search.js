
const input = document.getElementById('searchInput');
const list = document.getElementById('barbearia-list');

let timeout = null;

input.addEventListener('input', function () {
    clearTimeout(timeout);

    timeout = setTimeout(() => {
        const query = input.value;

        fetch(`/?search=${encodeURIComponent(query)}`)
            .then(res => res.text())
            .then(html => {
                // Extrai apenas a parte dos cards da resposta HTML
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newList = doc.getElementById('barbearia-list');

                if (newList) {
                    list.innerHTML = newList.innerHTML;
                }
            });
    }, 300); // espera 300ms após digitar (evita chamadas excessivas)
});

