function scrollToAnchor(id) {
    const element = document.getElementById(id);
    const offset = 80; // Ajuste para a altura da navbar fixa
    const elementPosition = element.getBoundingClientRect().top;
    const offsetPosition = elementPosition + window.pageYOffset - offset;

    window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
    });
}

// Exporta a função para ser usada globalmente
window.scrollToAnchor = scrollToAnchor;