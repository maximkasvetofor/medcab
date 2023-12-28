<header>
    <div class="header-logo">
        <img src="{{ asset('/images/logoh.png') }}">
        <p>МЕДКАБ</p>
    </div>
    <nav class="header-nav">
        <div class="nav-item">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.3722 8.53878C22.1332 9.24548 22.5138 9.59882 22.7152 10.0608C22.9167 10.5228 22.9167 11.0421 22.9167 12.0806V19.6396C22.9167 21.9181 22.9167 23.0573 22.2088 23.7651C21.501 24.473 20.3618 24.473 18.0833 24.473H16.875H12.0417H10.8333C8.55488 24.473 7.41565 24.473 6.70783 23.7651C6 23.0573 6 21.9181 6 19.6396V12.0806C6 11.0421 6 10.5228 6.20145 10.0608C6.40292 9.59882 6.78344 9.24548 7.54449 8.53878L10.2292 6.04587L11.1695 5.17272C12.7293 3.72424 13.5093 3 14.4583 3C15.4074 3 16.1873 3.72424 17.7472 5.17272L18.6875 6.04587L21.3722 8.53878Z" stroke="#858AD4" stroke-width="3" stroke-linejoin="round"/>
                <path d="M12.0416 24.473V19.6396C12.0416 18.3049 13.1236 17.223 14.4583 17.223C15.793 17.223 16.875 18.3049 16.875 19.6396V24.473" stroke="#858AD4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a>Главная</a>
        </div>
        <div class="nav-item">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.9675 9.71417L22.5276 9.15418C23.4553 8.22636 24.9597 8.22636 25.8875 9.15418C26.8154 10.082 26.8154 11.5863 25.8875 12.5141L25.3275 13.0741M21.9675 9.71417C21.9675 9.71417 22.0376 10.9041 23.0875 11.9541C24.1376 13.0041 25.3275 13.0741 25.3275 13.0741M21.9675 9.71417L16.8193 14.8624C16.4706 15.2111 16.2962 15.3854 16.1463 15.5777C15.9695 15.8045 15.8178 16.0499 15.6941 16.3095C15.5892 16.5296 15.5112 16.7634 15.3553 17.2313L14.856 18.7291L14.6944 19.2137M25.3275 13.0741L20.1793 18.2224C19.8306 18.5711 19.6562 18.7455 19.464 18.8954C19.2372 19.0722 18.9918 19.2238 18.7322 19.3476C18.512 19.4525 18.2782 19.5305 17.8104 19.6864L16.3125 20.1857L15.828 20.3472M14.6944 19.2137L14.5329 19.6983C14.4562 19.9285 14.5161 20.1824 14.6877 20.354C14.8593 20.5256 15.1131 20.5855 15.3433 20.5088L15.828 20.3472M14.6944 19.2137L15.828 20.3472" stroke="white" stroke-width="2"/>
                <path d="M9 15H12.0208" stroke="white" stroke-width="3" stroke-linecap="round"/>
                <path d="M9 10H16.8542" stroke="white" stroke-width="3" stroke-linecap="round"/>
                <path d="M9 20H10.8125" stroke="white" stroke-width="3" stroke-linecap="round"/>
                <path d="M23.9593 3.8323C22.5438 2.41666 20.2652 2.41666 15.7083 2.41666H13.2917C8.73475 2.41666 6.45631 2.41666 5.04065 3.8323C3.625 5.24796 3.625 7.52641 3.625 12.0833V16.9167C3.625 21.4735 3.625 23.7521 5.04065 25.1676C6.45631 26.5833 8.73475 26.5833 13.2917 26.5833H15.7083C20.2652 26.5833 22.5438 26.5833 23.9593 25.1676C25.0989 24.0281 25.3211 22.3295 25.3645 19.3333" stroke="white" stroke-width="3" stroke-linecap="round"/>
            </svg>
            <a>Записаться</a>
        </div>
        <div class="nav-item active" id="nav-item-exception">
            <svg width="25" height="25" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 13.5C17.2283 13.5 20.25 10.4783 20.25 6.75C20.25 3.02168 17.2283 0 13.5 0C9.77168 0 6.75 3.02168 6.75 6.75C6.75 10.4783 9.77168 13.5 13.5 13.5ZM18.225 15.1875H17.3443C16.1736 15.7254 14.8711 16.0312 13.5 16.0312C12.1289 16.0312 10.8316 15.7254 9.65566 15.1875H8.775C4.86211 15.1875 1.6875 18.3621 1.6875 22.275V24.4688C1.6875 25.8662 2.82129 27 4.21875 27H22.7812C24.1787 27 25.3125 25.8662 25.3125 24.4688V22.275C25.3125 18.3621 22.1379 15.1875 18.225 15.1875Z" fill="white"/>
            </svg>
            <a>Личный кабинет</a>
        </div>
    </nav>
    <div class="header-auth">
        <a>Авторизоваться</a>
        <img src="{{ asset('/images/auth-enter-icon.png') }}">
        <img style="display: none;" src="{{ asset('/images/auth-quit-icon.png') }}">
    </div>
</header>

<style>
    *, *:before, *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {

    }

    /* Header -- begin */
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        height: 80px;
        background-color: #858AD4;
        padding: 0px 48px;
        font-family: 'Roboto';
    }

    /* header logo */
    .header-logo {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .header-logo img {
        height: 45px;
        width: 45px;
    }

    .header-logo p {
        margin-left: 24px;
        font-weight: bold;
        color: white;
        font-size: 20px;
    }

    /* header auth */
    .header-auth {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .header-auth img {
        height: 32px;
        width: 32px;
    }

    .header-auth a {
        margin-right: 24px;
        font-size: 20px;
        font-weight: bold;
        color: white;
    }

    /* header nav */
    .header-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0px 20px;
    }

    .header-nav svg path {
        stroke: #fff;
    }

    .nav-item {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40px;
        margin-left: 30px;
        font-weight: bold;
        padding-left: 22px;
        padding-right: 25px;
        color: white;
        font-size: 18px;
        cursor: pointer;
    }

    .nav-item:first-child {
        margin-left: 0px;
    }

    .nav-item a {
        margin-left: 10px;
    }

    .nav-item.active {
        background-color: white;
        border-radius: 25px;
        color: #858AD4;
    }

    .nav-item.active svg path {
        stroke: #858AD4;
    }

    #nav-item-exception.active svg path {
        fill: #858AD4;
    }
    /* Header -- end */
</style>
