// Hamburg menu
const navLinks = document.querySelector('.nav-links')
function onToggleMenu(e) {
    e.name = e.name === 'grid-outline' ? 'close' : 'grid-outline'
    navLinks.classList.toggle('opacity-100')
    // console.log('clicked')
}

// resume download 
document.getElementById("downloadResume").addEventListener("click", function () {
    // Define the URL of your resume file
    var resumeUrl = "./images/Ranjeet - Resume.pdf"; // Replace with the actual URL

    // Create an anchor element to trigger the download
    var downloadLink = document.createElement("a");
    downloadLink.href = resumeUrl;
    downloadLink.download = "Ranjeet - Resume.pdf"; // The name your file will have when downloaded
    downloadLink.style.display = "none"; // Hide the link

    // Append the link to the document and trigger the download
    document.body.appendChild(downloadLink);
    downloadLink.click();

    // Clean up: remove the link element
    document.body.removeChild(downloadLink);
});

// comment view 
function toggleComments(postId) {
    var commentsSection = document.getElementById("comments-section-" + postId);
    if (commentsSection.style.display === "none") {
        commentsSection.style.display = "block";
    } else {
        commentsSection.style.display = "none";
    }
}

// appointment section 
document.addEventListener("DOMContentLoaded", function () {
    const appointmentForm = document.getElementById("appointmentForm");

    appointmentForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const datetime = document.getElementById("datetime").value;

        // Validate form data here if needed.

        // Send data to the backend using fetch API.
        fetch("backend.php", {
            method: "POST",
            body: JSON.stringify({ name, email, datetime }),
            headers: {
                "Content-Type": "application/json",
            },
        })
            .then(response => response.json())
            .then(data => {
                // Handle the response from the backend (e.g., display a confirmation message).
                alert(data.message);
                appointmentForm.reset();
            })
            .catch(error => {
                console.error(error);
                alert("An error occurred while booking the appointment. Please try again later.");
            });
    });
});


// delete post buttons
function createpost() {
    const createPostForm = document.getElementById("createPostForm");
    const table = document.getElementById("table");

    // Close the table if it's open
    if (table.style.display === "block") {
        table.style.display = "none";
    }

    // Toggle the createPostForm
    createPostForm.style.display = createPostForm.style.display === "none" ? "block" : "none";
}

function deletepost() {
    const createPostForm = document.getElementById("createPostForm");
    const table = document.getElementById("table");

    // Close the createPostForm if it's open
    if (createPostForm.style.display === "block") {
        createPostForm.style.display = "none";
    }

    // Toggle the table
    table.style.display = table.style.display === "none" ? "block" : "none";
}

function uploadproject() {
    const projectUploadForm = document.getElementById("project-upload");
    const table2 = document.getElementById("table2");

    // Close the project delete table if it's open
    if (table2.style.display === "block") {
        table2.style.display = "none";
    }

    // Toggle the project upload form
    projectUploadForm.style.display = projectUploadForm.style.display === "none" ? "block" : "none";
}

function deleteproject() {
    const projectUploadForm = document.getElementById("project-upload");
    const table2 = document.getElementById("table2");

    // Close the project upload form if it's open
    if (projectUploadForm.style.display === "block") {
        projectUploadForm.style.display = "none";
    }

    // Toggle the project delete table
    table2.style.display = table2.style.display === "none" ? "block" : "none";
}








