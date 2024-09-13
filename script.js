// JavaScript code for interactivity

// Add functionality to the Hire button
document.querySelector('.btn').addEventListener('click', function() {
    alert('Thank you for considering to Hire Me! If you have any Questions or would like to chat, feel free to leave a Message with your Contact Information on my Contact Me page. I’ll get back to you as soon as Possible!');
});

var menuList = document.getElementById("menuList");
var backdrop = document.createElement("div");
backdrop.className = "menu-backdrop";
document.body.appendChild(backdrop);

// Set the initial maxHeight style for mobile view
menuList.style.maxHeight = "0px";

function togglemenu() {
    if (menuList.style.maxHeight === "0px") {
        menuList.style.maxHeight = "200px"; // Adjust the height for the expanded menu
        backdrop.style.display = "block"; // Show the backdrop when menu opens
    } else {
        menuList.style.maxHeight = "0px";
        backdrop.style.display = "none"; // Hide the backdrop when menu closes
    }
}

// Add event listener to each menu item to close the menu when clicked
var menuItems = menuList.getElementsByTagName("li");
for (let i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener("click", function() {
        menuList.style.maxHeight = "0px"; // Close the menu
        backdrop.style.display = "none"; // Hide the backdrop
    });
}

// Hide backdrop when clicking on it
backdrop.addEventListener("click", function() {
    menuList.style.maxHeight = "0px"; // Close the menu
    backdrop.style.display = "none"; // Hide the backdrop
});




// Optional: Add smooth scrolling to sections when clicking on nav links
document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
