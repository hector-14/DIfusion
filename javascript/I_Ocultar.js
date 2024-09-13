let menu = document.getElementById('menu');
        let timer;

        function expandMenu() {
            menu.style.width = '40%';
        }

        function shrinkMenu() {

            if (!menu.matches(':hover')) {
                menu.style.width = '0%';
            }
        }

        function handleScroll() {
            clearTimeout(timer);
            menu.style.width = '80px';
            timer = setTimeout(shrinkMenu, 4000);
        }

        menu.addEventListener('mouseenter', expandMenu);
        menu.addEventListener('mouseleave', shrinkMenu);
        window.addEventListener('scroll', handleScroll);