window.onload = function() {
    const id_customer_select = document.getElementById("customer_id");
    const find_button = document.getElementById("find");
    const reset_button = document.getElementById("reset");

    find_button.onclick = () => find(id_customer_select);
    reset_button.onclick = () => reset();
};

const rows = document.getElementsByTagName("tr");
const contracts_table = document.getElementById("contracts_table");
const alert_div = document.getElementById("alert_div");

const find = (customer) => {
    console.log("Searching " + customer.value);
    reset();

    let hided = 1;
    for ( var i = 1; i < rows.length; i++ ) {
        if (rows[i].childNodes[5].innerText != customer.value){
            rows[i].style.display = "none"
            hided = hided + 1;
        }
    }

    if(hided == rows.length){
        no_contracts_alert();
    }
};

const no_contracts_alert = () => {
    console.log("No contracts found.")
    let contracts_table = document.getElementById("contracts_table");
    contracts_table.style.display = "none";

    let contracts_div = document.getElementById("contracts_div");
    let new_div = document.createElement("div");
    new_div.setAttribute("id", "alert_div");
    new_div.setAttribute("class", "alert alert-danger");
    let message = document.createTextNode("Data not found");
    new_div.appendChild(message);
    contracts_div.appendChild(new_div);
}

const reset = () => {
    console.log("Reset table");
    let contracts_table = document.getElementById("contracts_table");
    for ( var i = 1; i < rows.length; i++ ) {
        rows[i].style.display = "";
    }
    contracts_table.style.display  = "";

    if(document.getElementById("alert_div") != null){
        document.getElementById("alert_div").remove();
    }
};
