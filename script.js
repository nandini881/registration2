$(document).ready(function() {
    $("#registrationForm").on("submit", function(e) {
        let isValid = true;

        // Validate each field
        $("input, select").each(function() {
            if ($(this).val() === "") {
                alert(`${$(this).attr("name")} is required.`);
                isValid = false;
                return false; // Break loop
            }
        });

        if (!isValid) {
            e.preventDefault();
        }
    });
});
