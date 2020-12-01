    var mySwiper = new Swiper('#swiper-menus', {
        loop: true,
    })

    function agregarMenu(menu) {
        let menus;
        menus = obtenerMenusLocalStorage();
        menus.push(menu);
        localStorage.setItem('menus', JSON.stringify(menus));
    }

    function obtenerMenusLocalStorage() {
        let menusLS;

        if (localStorage.getItem('menus') === null)
            menusLS = [];
        else
            menusLS = JSON.parse(localStorage.getItem('menus'));
        return menusLS;
    }