const inputFilter = document.querySelector("header input");
const conteudo = document.querySelectorAll('.linha .conteudo');


inputFilter.addEventListener('input', filterFoto);


function filterFoto() {
    if (inputFilter.value != '') {
        for (let produtos of conteudo) {

            let info = produtos.querySelector('p');
            info = info.textContent.toLowerCase();
            let filterText = inputFilter.value.toLowerCase();
            console.log(info);



            if (!info.includes(filterText)) {
                produtos.style.display = 'none';
            } else {
                produtos.style.display = 'block';
            }
        };
    } else {
        for (let produtos of conteudo) {
            produtos.style.display = 'block'
        }
    }
}





