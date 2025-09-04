function criarAlerta(tipo, mensagem) {
    const alertContainer = document.querySelector('.alert-container');

    const alert = document.createElement('div');
    const icon = document.createElement('div');
    const text = document.createElement('span');
    const img = document.createElement('img');

    const successIconUrl = alertContainer.dataset.successIcon;
    const errorIconUrl = alertContainer.dataset.errorIcon;

    alert.className = 'alert';
    icon.className = 'icon';

    text.textContent = mensagem;

    if(tipo === 'sucesso'){
        img.src = successIconUrl;
    } else {
        img.src = errorIconUrl;
    }

    icon.appendChild(img);

    alert.appendChild(icon);
    alert.appendChild(text);

    alertContainer.appendChild(alert);

    setTimeout(() => {
        alert.remove();
    }, 10000);
}