document.addEventListener("DOMContentLoaded", function (event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                // show navbar
                nav.classList.toggle('show')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
            })
        }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink() {
        if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))



    // Your code to run since DOM is loaded and ready

    // Function to handle submenu toggle
    function toggleSubmenus(clickedMenu) {
        const allMenus = document.querySelectorAll('.collapse');

        // Collapse all menus except the clicked one
        allMenus.forEach(menu => {
            const parentLink = document.querySelector(`a[href="#${menu.id}"]`);
            if (parentLink !== clickedMenu) {
                menu.classList.remove('show');
                parentLink.setAttribute('aria-expanded', 'false');
            }
        });

        // Check if the clicked menu is already expanded
        const isExpanded = clickedMenu.getAttribute('aria-expanded') === 'true';

        // Toggle the clicked menu
        if (!isExpanded) {
            const currentMenu = clickedMenu.getAttribute('href');
            document.getElementById(currentMenu.substring(1)).classList.add('show');
            clickedMenu.setAttribute('aria-expanded', 'true');
        } else {
            clickedMenu.setAttribute('aria-expanded', 'false');
            const currentMenu = clickedMenu.getAttribute('href');
            document.getElementById(currentMenu.substring(1)).classList.remove('show');
        }
    }

    // Event listener for dashboard link
    document.getElementById('dashboardLink').addEventListener('click', function () {
        toggleSubmenus(this);
    });

    // Event listener for each collapsible link
    document.querySelectorAll('.nav_link[data-bs-toggle="collapse"]').forEach(link => {
        link.addEventListener('click', function () {
            // Clicking the same menu will collapse it
            toggleSubmenus(this);
        });
    });
});