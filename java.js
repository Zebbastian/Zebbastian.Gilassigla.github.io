document.addEventListener("DOMContentLoaded", function () {
    // Initialize the list of patients
    loadPatients();
});

function addPatient() {
    // Get values from the form
    const name = document.getElementById("patientName").value;
    const age = document.getElementById("patientAge").value;

    // Validate input
    if (name === "" || age === "") {
        alert("Please enter both name and age.");
        return;
    }

    // Create a new patient object
    const patient = {
        name: name,
        age: age,
    };

    // Get the existing patients from local storage
    let patients = JSON.parse(localStorage.getItem("patients")) || [];

    // Add the new patient to the list
    patients.push(patient);

    // Save the updated list to local storage
    localStorage.setItem("patients", JSON.stringify(patients));

    // Clear the form fields
    document.getElementById("patientName").value = "";
    document.getElementById("patientAge").value = "";

    // Reload the patient list
    loadPatients();
}

function deletePatient(index) {
    // Get the existing patients from local storage
    let patients = JSON.parse(localStorage.getItem("patients")) || [];

    // Remove the patient at the specified index
    patients.splice(index, 1);

    // Save the updated list to local storage
    localStorage.setItem("patients", JSON.stringify(patients));

    // Reload the patient list
    loadPatients();
}

function loadPatients() {
    // Get the existing patients from local storage
    let patients = JSON.parse(localStorage.getItem("patients")) || [];

    // Get the patient list element
    const patientList = document.getElementById("patientList");

    // Clear the previous list
    patientList.innerHTML = "";

    // Populate the patient list
    patients.forEach((patient, index) => {
        const li = document.createElement("li");
        li.innerHTML = `<span>${patient.name}, ${patient.age} years old</span><button onclick="deletePatient(${index})">Delete</button>`;
        patientList.appendChild(li);
    });
}
