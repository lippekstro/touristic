const links = document.querySelectorAll(".menu-global");

// Verifique se existe um item de armazenamento local chamado "activeLink"
if (localStorage.getItem("activeLink")) {
    // Se sim, obtenha o valor armazenado e adicione a classe "menu-ativo" ao link correspondente
    const activeLink = localStorage.getItem("activeLink");
    const link = document.getElementById(activeLink);
    link.classList.add("menu-ativo");
} else {
    // Se não, adicione a classe "menu-ativo" ao link que corresponde à página atual
    links.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add("menu-ativo");
            localStorage.setItem("activeLink", link.id);
        }
    });
}

links.forEach(link => {
    link.addEventListener("click", e => {
        // Remover a classe "menu-ativo" de todos os links
        links.forEach(link => link.classList.remove("menu-ativo"));

        // Adiciona a classe "menu-ativo" no link clicado
        e.target.classList.add("menu-ativo");

        // Armazena o id do link clicado em um item local chamado "activeLink"
        localStorage.setItem("activeLink", e.target.id);
    });
});
