window.addEventListener('load', loadedPage);

function loadedPage() {
    var select = document.getElementById('select'),
        input = document.querySelector('.select-input'),
        inputTel = document.querySelector('.select-input-telegram'),
        inputInst = document.querySelector('.select-input-inst'),
        buttonOpenPopUp = document.querySelector('.open-pop'),
        buttonClosePopUp = document.querySelector('.close-forms__button'),
        popupWindow = document.querySelector('.popup');

    buttonOpenPopUp.addEventListener('click', openPop);
    buttonClosePopUp.addEventListener('click', closePop)

    function openPop(e) {
        popupWindow.classList.add('active');
        e.preventDefault()
    }

    function closePop(e) {
        popupWindow.classList.remove('active');
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