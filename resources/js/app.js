import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
document.addEventListener("DOMContentLoaded", function() {
        const roleSelect = document.getElementById("role");
        const categoryContainer = document.getElementById("category-container");

        function toggleCategory() {
            let selectedRole = roleSelect.options[roleSelect.selectedIndex].text.toLowerCase();

            if (selectedRole === "client") {
                categoryContainer.style.display = "none";
            } else {
                categoryContainer.style.display = "block";
            }
        }

       
        toggleCategory();

     
        roleSelect.addEventListener("change", toggleCategory);
    });