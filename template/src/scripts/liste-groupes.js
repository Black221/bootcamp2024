const modalAddGroup = document.getElementById('modal-add-group');
const modalRemoveGroup = document.getElementById('modal-remove-group');
const modalEditGroup = document.getElementById('modal-edit-group');

function openModalAddGroup() {
    modalAddGroup.classList.add('show');
}

function closeModalAddGroup() {
    modalAddGroup.classList.remove('show');
}

function openModalRemoveGroup() {
    modalRemoveGroup.classList.add('show');
}

function closeModalRemoveGroup() {
    modalRemoveGroup.classList.remove('show');
}

function openModalEditGroup() {
    modalEditGroup.classList.add('show');
}

function closeModalEditGroup() {
    modalEditGroup.classList.remove('show');
}

window.onclick = function(event) {
    if (event.target == modalAddGroup) {
        closeModalAddGroup();
    }
    if (event.target == modalRemoveGroup) {
        closeModalRemoveGroup();
    }
    if (event.target == modalEditGroup) {
        closeModalEditGroup();
    }
}

function addGroup() {
    const btnCancel = document.getElementById('btn-cancel-add');
    const btnConfirm = document.getElementById('btn-confirm-add');
    const btnClose = document.getElementById('btn-close-add');
    const groupNameElement = document.getElementById('group-name');

    btnCancel.onclick = function() {
        closeModalAddGroup();
    }

    btnConfirm.onclick = function() {
        console.log('Group added');
        closeModalAddGroup();
    }

    btnClose.onclick = function() {
        closeModalAddGroup();
    }

    openModalAddGroup();
}

function removeGroup(groupId) {
    const btnCancel = document.getElementById('btn-cancel-remove');
    const btnConfirm = document.getElementById('btn-confirm-remove');
    const btnClose = document.getElementById('btn-close-remove');

    btnCancel.onclick = function() {
        closeModalRemoveGroup();
    }

    btnConfirm.onclick = function() {
        console.log('Group removed');
        closeModalRemoveGroup();
    }

    btnClose.onclick = function() {
        closeModalRemoveGroup();
    }

    openModalRemoveGroup();
}

function editGroup(groupId) {
    const btnCancel = document.getElementById('btn-cancel-edit');
    const btnConfirm = document.getElementById('btn-confirm-edit');
    const btnClose = document.getElementById('btn-close-edit');
    const groupNameElement = document.getElementById('group-name');

    btnCancel.onclick = function() {
        closeModalEditGroup();
    }

    btnConfirm.onclick = function() {
        console.log('Group edited');
        closeModalEditGroup();
    }

    btnClose.onclick = function() {
        closeModalEditGroup();
    }

    openModalEditGroup();
}