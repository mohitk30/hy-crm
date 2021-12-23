function showAdmin() {
    const admin_div = document.getElementById('admin-login-div');
    admin_div.classList.toggle("display-none");

    const clint_div = document.getElementById('clint-login-div');
    clint_div.classList.toggle("d-none");

    var clint_div_name = document.getElementById('admin-or-clint').innerText;
    //console.log(clint_div_name);
    if (clint_div_name == "Client") {
        document.getElementById('admin-or-clint').innerText = "Admin";
        // console.log(clint_div_name);

    } else {
        document.getElementById('admin-or-clint').innerText = "Client";
        // console.log(clint_div_name);
    }


}