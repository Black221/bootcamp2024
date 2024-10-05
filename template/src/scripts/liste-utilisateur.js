const modalAddUser = document.getElementById('modal-add-user');
const modalRemove = document.getElementById('modal-remove-user');
const modalTransfer = document.getElementById('modal-transfer-user');
const modalEdit = document.getElementById('modal-edit-user');

function openModalAddUser() {
    modalAddUser.classList.add('show');
}

function closeModalAddUser() {
    modalAddUser.classList.remove('show');
}

function openModalRemove() {
    modalRemove.classList.add('show');
}

function closeModalRemove() {
    modalRemove.classList.remove('show');
}

function openModalTransfer() {
    modalTransfer.classList.add('show');
}

function closeModalTransfer() {
    modalTransfer.classList.remove('show');
}

function openModalEdit() {
    modalEdit.classList.add('show');
}

function closeModalEdit() {
    modalEdit.classList.remove('show');
}

window.onclick = function(event) {
    if (event.target == modalAddUser) {
        closeModalAddUser();
    }
    if (event.target == modalRemove) {
        closeModalRemove();
    }
    if (event.target == modalTransfer) {
        closeModalTransfer();
    }
    if (event.target == modalEdit) {
        closeModalEdit();
    }
}

function addUser() {
    const btnCancel = document.getElementById('btn-cancel-add');
    const btnConfirm = document.getElementById('btn-confirm-add');
    const btnClose = document.getElementById('btn-close-add');
    const userNameElement = document.getElementById('user-name');

    btnCancel.onclick = function() {
        closeModalAddUser();
    }

    btnConfirm.onclick = function() {
        console.log('User added');
        closeModalAddUser();
    }

    btnClose.onclick = function() {
        closeModalAddUser();
    }

    openModalAddUser();
}

function removeUser() {
    const btnCancel = document.getElementById('btn-cancel-remove');
    const btnConfirm = document.getElementById('btn-confirm-remove');
    const btnClose = document.getElementById('btn-close-remove');

    btnCancel.onclick = function() {
        closeModalRemove();
    }

    btnConfirm.onclick = function() {
        console.log('User removed');
        closeModalRemove();
    }

    btnClose.onclick = function() {
        closeModalRemove();
    }

    openModalRemove();
}

function transferUser() {
    const btnCancel = document.getElementById('btn-cancel-transfer');
    const btnConfirm = document.getElementById('btn-confirm-transfer');
    const btnClose = document.getElementById('btn-close-transfer');

    btnCancel.onclick = function() {
        closeModalTransfer();
    }

    btnConfirm.onclick = function() {
        console.log('User transferred');
        closeModalTransfer();
    }

    btnClose.onclick = function() {
        closeModalTransfer();
    }

    openModalTransfer();
}

function editUser() {
    const btnCancel = document.getElementById('btn-cancel-edit');
    const btnConfirm = document.getElementById('btn-confirm-edit');
    const btnClose = document.getElementById('btn-close-edit');

    btnCancel.onclick = function() {
        closeModalEdit();
    }

    btnConfirm.onclick = function() {
        console.log('User edited');
        closeModalEdit();
    }

    btnClose.onclick = function() {
        closeModalEdit();
    }

    openModalEdit();
}