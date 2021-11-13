require('./bootstrap');

let callbackForm = document.forms.callback
callbackForm.addEventListener('submit', (e) => {
    e.preventDefault()
    let formData = new FormData(callbackForm),
        url = callbackForm.getAttribute('action'),
        data = formData,
        options = {
            method: 'POST',
            body: data,
            redirect: 'follow'
        },
        redirected = false
    fetch(url, options)
        .then((response) => {
            if(response.redirected){
                redirected = true
            }
            return response.text()
        })
        .then((data) => {
            let errorsContainer = document.querySelector('#callback_errors'),
                successContainer = document.querySelector('#callback_success')
            if(redirected){
                let container = document.implementation.createHTMLDocument().documentElement;
                container.innerHTML = data;

                let errors = container.querySelector('#errors'),
                    success = container.querySelector('#success')
                if(errors){
                    errorsContainer.innerHTML = errors.innerHTML
                    errorsContainer.classList.remove('d-none')
                    successContainer.classList.add('d-none')
                }else if(success){
                    successContainer.innerHTML = success.innerHTML
                    successContainer.classList.remove('d-none')
                    errorsContainer.classList.add('d-none')
                    callbackForm.classList.add('d-none')
                }
            }else{
                errorsContainer.classList.add('d-none')
                console.log(data);
            }

        })
        .catch(function(error) {
            console.log(error)
        });
});
