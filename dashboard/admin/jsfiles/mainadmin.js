function openTodayNoti() {
    const element = document.querySelector('#open-todays-notifications');

    element.classList.toggle("d-none");
}

function openUpconingNoti() {
    const element = document.querySelector('#open-upcoming-notifications');

    element.classList.toggle("d-none");
}

function openNotCloseNoti() {
    const element = document.querySelector('#open-notclose-notifications');

    element.classList.toggle("d-none");
}


function openArchivesNoti() {
    const element = document.querySelector('#open-Archives-notifications');

    element.classList.toggle("d-none");
}

// Team Settings

function searchNameInTeam() {
    const nameInputSearch = document.querySelector('#searchInputName');
    //console.log(nameInputSearch.value)




    var input, filter, table, tr, td, i, txtValue;
    // input = 4;
    input = nameInputSearch.value
        // filter = input.value;
    table = document.getElementById("teamSettingTableBody");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            // if (txtValue == input) {
            if (txtValue.includes(input)) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    if (input == "") {

        for (i = 0; i < tr.length; i++) {

            tr[i].style.display = "";

        }

    }




}



function searchEmailInTeam() {
    const nameInputSearch = document.querySelector('#searchInputEmail');
    //console.log(nameInputSearch.value)




    var input, filter, table, tr, td, i, txtValue;
    // input = 4;
    input = nameInputSearch.value
        // filter = input.value;
    table = document.getElementById("teamSettingTableBody");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            // if (txtValue == input) {
            if (txtValue.includes(input)) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    if (input == "") {

        for (i = 0; i < tr.length; i++) {

            tr[i].style.display = "";

        }

    }




}


function searchPhoneInTeam() {
    const nameInputSearch = document.querySelector('#searchInputPhone');
    //console.log(nameInputSearch.value)




    var input, filter, table, tr, td, i, txtValue;
    // input = 4;
    input = nameInputSearch.value
        // filter = input.value;
    table = document.getElementById("teamSettingTableBody");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            txtValue = td.textContent || td.innerText;
            // if (txtValue == input) {
            if (txtValue.includes(input)) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    if (input == "") {

        for (i = 0; i < tr.length; i++) {

            tr[i].style.display = "";

        }

    }




}


function searchRoleInTeam() {
    const nameInputSearch = document.querySelector('#searchInputRole');
    //console.log(nameInputSearch.value)




    var input, filter, table, tr, td, i, txtValue;
    // input = 4;
    input = nameInputSearch.value
        // filter = input.value;
    table = document.getElementById("teamSettingTableBody");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[6];
        if (td) {
            txtValue = td.textContent || td.innerText;
            // if (txtValue == input) {
            if (txtValue.includes(input)) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    if (input == "") {

        for (i = 0; i < tr.length; i++) {

            tr[i].style.display = "";

        }

    }




}

function showEmailConformationMondel() {
    const element = document.querySelector('#mondel-for-email-notification');
    element.style.display = "block"

}

function hideEmailConformationMondel() {
    const element = document.querySelector('#mondel-for-email-notification');
    element.style.display = "none"

}

function toogleFilterMondel() {
    const element = document.querySelector('#mondelInTrash');


    element.classList.toggle("fade");

}