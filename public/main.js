const menuButton = document.getElementById('menu-button');
const menuMobile = document.getElementById('menu-mobile');
let isOpen = false;  // Use `let` since we need to modify the value

function MenuBox() {
    isOpen = !isOpen;  // Toggle the isOpen state
    console.log(isOpen);  // Log the state to check

    if (isOpen) {
        menuMobile.classList.add('active');  // Add the 'active' class when the menu is open
    } else {
        menuMobile.classList.remove('active');  // Remove the 'active' class when the menu is closed
    }
}

if (menuButton) {
    menuButton.addEventListener('click', MenuBox);  // Pass the function reference without calling it
}



// Dropdown toggle
const locationElement = document.querySelector('.location');
const locationLabal  = document.querySelector('.location-change')
const dropdown = document.querySelector('.dropdown');

locationElement.addEventListener('click', () => {
    dropdown.classList.toggle('active');
});

// Selecting a location
const dropdownItems = document.querySelectorAll('.dropdown li');
dropdownItems.forEach(item => {
    item.addEventListener('click', () => {
        locationLabal.textContent = item.textContent; // Update location text
        dropdown.classList.remove('active'); // Close dropdown
    });
});

// Close dropdown if clicked outside
document.addEventListener('click', (e) => {
    if (!e.target.closest('.location-wrapper')) {
        dropdown.classList.remove('active');
    }
});
