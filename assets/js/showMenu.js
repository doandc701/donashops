const menushow = document.querySelectorAll('.show-menu')
            const modals = document.querySelector('.navgation')
            const modalContents = document.querySelector('.javas-navgation')

            function showMenu() {
                modals.classList.add('navgation_show');
            }

            function hidenMenu() {
                modals.classList.remove('navgation_show');
            }
            for (const Menu of menushow) {

                Menu.addEventListener('click', showMenu);
            }
            modals.addEventListener('click', hidenMenu)
            modalContents.addEventListener('click', function(event) {
                event.stopPropagation()
            })