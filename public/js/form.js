document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#contact-form');
    const sendBtn = document.querySelector('#send-btn');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        const csrfToken = form.querySelector('input[name="_token"]').value;
        const url = form.dataset.action;

        sendBtn.disabled = true;
        sendBtn.querySelector('span').textContent = 'Envio...';

        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
            },
            body: formData
        })
        .then(res => {
            if(!res.ok){
                return res.json().then(errorData => {
                    throw errorData;
                });
            }
            
            return res.json();
        })
        .then(data => {
            criarAlerta(data.sucesso ? 'sucesso' : 'erro', data.mensagem);
            
            if(data.sucesso){
                form.reset();
            }
        })
        .catch(error => {
            if(error.errors){
                const firstErrorArray = Object.values(error.errors)[0];
                const firstErrorMessage = firstErrorArray ? firstErrorArray[0] : 'Erro de validação.';
                criarAlerta('erro', firstErrorMessage);
            } else {
                criarAlerta('erro', error.mensagem || 'Ocorreu um erro inesperado.');
            }
            console.error('Erro:', error);
        })
        .finally(() => {
            sendBtn.disabled = false;
            sendBtn.querySelector('span').textContent = 'Enviar';
        });
    });
});