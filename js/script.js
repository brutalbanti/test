window.addEventListener('load', loadedPage);

function loadedPage() {
    var select = document.getElementById('select'),
        input = document.querySelector('.select-input'),
        inputTel = document.querySelector('.select-input-telegram'),
        inputInst = document.querySelector('.select-input-inst'),
        buttonOpenPopUp = document.querySelector('.open-pop'),
        popupWindow = document.querySelector('.popup');

    buttonOpenPopUp.addEventListener('click', openPop);

    function openPop(e) {
        popupWindow.classList.add('active');
        e.preventDefault()
    }

    select.onchange = function () {
        index = select.selectedIndex;
        addInput()
    }

    function addInput() {
        if (index === 0) {
            inputInst.style.display = "none";
            inputTel.style.display = "grid";
            inputTel.required = true;
            inputInst.required = false;

        } else if (index === 1) {
            inputInst.style.display = "grid";
            inputTel.style.display = "none";
            inputTel.required = false;
            inputInst.required = true;
        }
    }

}