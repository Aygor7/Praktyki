const addButton = document.getElementById('dodaj');
const container = document.getElementById('container');

addButton.addEventListener('click', () => {
    const vaporeon = document.createElement('img');
    vaporeon.src = 'Vaporeon.jpg'; 
    vaporeon.alt = 'Vaporeon';
    vaporeon.classList.add('vaporeon');

    container.appendChild(vaporeon);
});
