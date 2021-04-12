const criarTarefa = (event) => {
    event.preventDefault();

    const input = document.querySelector('[data-form-input]');
    const valor = input.value;
    console.log(valor);
};

const novaTarefa = document.querySelector('[data-form-buttom]');

novaTarefa.addEventListener('click', criarTarefa);