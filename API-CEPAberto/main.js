'use strict'

// let myHeaders = new Headers({
//     'Authorization': 'Token token=a191993838e081e390a42646852b566a'
// })

// let myInit = {
//     method: 'get',
//     mode: 'cors',
//     cache: 'default',
//     headers: {
//         'Authorization': 'Token token=a191993838e081e390a42646852b566a'
//     }
// }

const cleanImput = () => {
    document.querySelector('#endereco').value = ''
    document.querySelector('#bairro').value = ''
    document.querySelector('#cidade').value = ''
    document.querySelector('#estado').value = ''

}

const preencherDados = (data) => {
    document.querySelector('#endereco').value = data.logradouro
    document.querySelector('#bairro').value = data.bairro
    document.querySelector('#cidade').value = data.cidade
    document.querySelector('#estado').value = data.estado

}

const isNumber = (number) => /^[0-9]+$/.test(number)

const validarCep = (cep) => cep.length == 8 && isNumber(cep)

const getCep = async () => {
    cleanImput()

    const token = "a191993838e081e390a42646852b566a"
    const headers = {
        'Authorization': 'Token token=a191993838e081e390a42646852b566a'
    }

    const cep = document.querySelector('#cep').value
    const url = `https://www.cepaberto.com/api/v3/cep?cep=${cep}`

    if (validarCep(cep)) {

        // const dados = await fetch(url, myInit)

        const dados = await fetch(url, {
            method: 'GET',
            mode: 'cors',
            cache: 'default',
            headers: {
                'Authorization': 'Token token=a191993838e081e390a42646852b566a'
            }
        });

        const data = await dados.json()

        if (data.hasOwnProperty('erro')) {
            document.querySelector('#endereco').value = "CEP não encontrado!"
        } else {
            preencherDados(data)
        }
    } else {
        document.querySelector('#endereco').value = "CEP incorreto!"
    }

}

document.querySelector('#cep').addEventListener('focusout', getCep)