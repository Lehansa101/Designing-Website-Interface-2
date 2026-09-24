// This function checks the pilot application
// before the form is submitted.
function validateForm() {

    // Gets the values entered into the form.
    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;
    let experience = document.getElementById("experience").value;
    let location = document.getElementById("location").value;
    let missions = document.getElementById("missions").value;
    let license = document.getElementById("license").value;
    let emergency = document.getElementById("emergency").value;

    // Checks that the required fields are not empty.
    if (name == "" || age == "" || experience == "" ||
        location == "" || missions == "" ||
        license == "" || emergency == "") {

        alert("Please complete all parts of the application.");
        return false;
    }

    // Makes sure the applicant is at least 18 years old.
    if (age < 18) {
        alert("Pilot applicants must be at least 18 years old.");
        return false;
    }

    // Makes sure the applicant has some pilot experience.
    if (experience < 1) {
        alert("Please enter at least 1 year of pilot experience.");
        return false;
    }

    // If all checks pass, the form can be submitted.
    return true;
}
