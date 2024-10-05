const modalAddGroup = document.getElementById("modal-add-group");
const modalRemove = document.getElementById("modal-remove-user");
const modalTransfer = document.getElementById("modal-transfer-user");

function openModalAddGroup() {
    modalAddGroup.classList.add("show");
}

function closeModalAddGroup() {
    modalAddGroup.classList.remove("show");
}

function openModalRemove() {
    modalRemove.classList.add("show");
}

function closeModalRemove() {
    modalRemove.classList.remove("show");
}

function openModalTransfer() {
    modalTransfer.classList.add("show");
}

function closeModalTransfer() {
    modalTransfer.classList.remove("show");
}

window.onclick = function(event) {
    if (event.target == modalAddGroup) {
        closeModalAddGroup();
    }
    if (event.target == modalRemove) {
        closeModalRemove();
    }
    if (event.target == modalTransfer) {
        closeModalTransfer();
    }
}

function addGroup() {
    const btnCancel = document.getElementById("btn-cancel-add");
    const btnConfirm = document.getElementById("btn-confirm-add");
    const btnClose = document.getElementById("btn-close-add");
    const groupNameElement = document.getElementById("group-name");
    
    btnCancel.onclick = function() {
        closeModalAddGroup();
    }

    btnConfirm.onclick = function() {
        console.log("Group added");
        closeModalAddGroup();
    }

    btnClose.onclick = function() {
        closeModalAddGroup();
    }

    openModalAddGroup();
}

function removeUser(userId) {
    const btnCancel = document.getElementById("btn-cancel-remove");
    const btnConfirm = document.getElementById("btn-confirm-remove");
    const btnClose = document.getElementById("btn-close-remove");
    const usernameElement = document.getElementById(`remove-username`);
    usernameElement.textContent = userId;
    
    btnCancel.onclick = function() {
        closeModalRemove();
    }

    btnConfirm.onclick = function() {
        console.log("User removed");
        closeModalRemove();
    }

    btnClose.onclick = function() {
        closeModalRemove();
    }

    openModalRemove();
}

function transferUser(userId) {
    const btnCancel = document.getElementById("btn-cancel-transfer");
    const btnConfirm = document.getElementById("btn-confirm-transfer");
    const btnClose = document.getElementById("btn-close-transfer");
    const usernameElement = document.getElementById(`transfer-username`);
    usernameElement.textContent = userId;
    
    btnCancel.onclick = function() {
        closeModalTransfer();
    }

    btnConfirm.onclick = function() {
        console.log("User transferred");
        closeModalTransfer();
    }

    btnClose.onclick = function() {
        closeModalTransfer();
    }

    openModalTransfer();
}
