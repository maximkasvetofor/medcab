@extends('layout.app')

@section('title', 'Запись')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/appointment.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style_base.css') }}">
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <section class="appointment">
            <div class="form-container">
                <div class="appointment-title">
                    <img src="{{ asset('/images/appointment/appointment-doctor-image.png') }}">
                    <p>Запись на <br>онлайн<br>консультацию</p>
                </div>
                <form>
                    <div id="specialist" class="form-item">
                        <label for="field-specialist">Специалист</label>
                        <input type="text" id="field-specialist" name="specialist">
                    </div>
                    <div id="problem-description" class="form-item">
                        <label for="field-problem-description">Опишите проблему</label>
                        <textarea id="field-problem-description" name="problem_description"></textarea>
                    </div>
                    <div id="communication-method" class="form-item">
                        <p>Способ связи</p>
                        <div class="radio-buttons-container">
                            <input type="radio" id="audio-method" name="method-radio-button" value="audio_method">
                            <input type="radio" id="video-method" name="method-radio-button" value="video_method">
                            <input type="radio" id="chat-method" name="method-radio-button" value="chat_method" checked="checked">
                            <label for="audio-method" id="c-m-exception-radio-button-1" class="c-m-radio-button">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8656 19.1L23.4919 18.4772L22.0376 17.0147L21.4114 17.6374L22.8656 19.1ZM25.5951 18.2164L28.2221 19.6445L29.2071 17.8325L26.5802 16.4044L25.5951 18.2164ZM28.7278 22.4828L26.7745 24.4249L28.2287 25.8875L30.182 23.9454L28.7278 22.4828ZM25.5843 25.0503C23.5907 25.2361 18.4328 25.0705 12.8483 19.5177L11.3941 20.9803C17.4881 27.0398 23.2883 27.3357 25.7757 27.1039L25.5843 25.0503ZM12.8483 19.5177C7.52517 14.2248 6.64339 9.77302 6.53363 7.84169L4.47445 7.95872C4.61259 10.3895 5.70443 15.323 11.3941 20.9803L12.8483 19.5177ZM14.7394 11.0198L15.1337 10.6277L13.6795 9.16513L13.2852 9.55725L14.7394 11.0198ZM15.4476 5.62926L13.7138 3.31321L12.0627 4.54926L13.7965 6.86532L15.4476 5.62926ZM7.88243 2.80911L5.72423 4.95506L7.17849 6.41762L9.33669 4.27167L7.88243 2.80911ZM14.0123 10.2885C13.2852 9.55725 13.2842 9.55823 13.2832 9.55922C13.2829 9.55955 13.2819 9.56055 13.2812 9.56123C13.2798 9.56259 13.2785 9.56396 13.2771 9.56538C13.2743 9.56823 13.2714 9.57118 13.2684 9.57426C13.2625 9.58044 13.2562 9.58712 13.2496 9.59432C13.2363 9.60872 13.2217 9.62519 13.2061 9.6438C13.175 9.68099 13.1396 9.72679 13.1025 9.78158C13.0281 9.89143 12.947 10.0367 12.8782 10.2193C12.7377 10.592 12.6625 11.0833 12.7568 11.6917C12.9414 12.8815 13.7608 14.453 15.8597 16.54L17.3139 15.0774C15.3497 13.1244 14.8818 11.9358 14.7949 11.3755C14.7535 11.1088 14.7964 10.9776 14.8083 10.9465C14.8154 10.9273 14.8189 10.9253 14.8101 10.9385C14.8057 10.9449 14.7984 10.9549 14.787 10.9685C14.7813 10.9753 14.7746 10.9829 14.7667 10.9915C14.7628 10.9958 14.7586 11.0003 14.754 11.005C14.7518 11.0073 14.7494 11.0097 14.7469 11.0122C14.7457 11.0135 14.7445 11.0147 14.7432 11.016C14.7427 11.0166 14.7417 11.0176 14.7413 11.0179C14.7403 11.0189 14.7394 11.0198 14.0123 10.2885ZM15.8597 16.54C17.9594 18.6277 19.5383 19.4402 20.73 19.623C21.339 19.7164 21.83 19.6419 22.2025 19.5031C22.3851 19.4351 22.5305 19.3549 22.6405 19.2812C22.6955 19.2444 22.7415 19.2093 22.7787 19.1784C22.7974 19.163 22.8139 19.1485 22.8284 19.1353C22.8357 19.1287 22.8424 19.1225 22.8486 19.1166C22.8517 19.1136 22.8546 19.1107 22.8575 19.108C22.8589 19.1066 22.8603 19.1052 22.8616 19.1038C22.8623 19.1031 22.8634 19.1022 22.8637 19.1019C22.8647 19.1009 22.8656 19.1 22.1385 18.3686C21.4114 17.6374 21.4124 17.6364 21.4134 17.6355C21.4136 17.6352 21.4146 17.6342 21.4153 17.6335C21.4165 17.6323 21.4178 17.6311 21.419 17.6298C21.4216 17.6275 21.4239 17.6252 21.4263 17.6228C21.4311 17.6183 21.4356 17.6142 21.4399 17.6102C21.4484 17.6025 21.4561 17.5957 21.463 17.5902C21.4765 17.579 21.4865 17.5718 21.4927 17.5675C21.5055 17.559 21.5029 17.5629 21.4825 17.5704C21.4488 17.5829 21.3139 17.626 21.0428 17.5843C20.4745 17.4973 19.2776 17.0298 17.3139 15.0774L15.8597 16.54ZM13.7138 3.31321C12.3123 1.44103 9.55626 1.14478 7.88243 2.80911L9.33669 4.27167C10.0677 3.54475 11.3661 3.61874 12.0627 4.54926L13.7138 3.31321ZM6.53363 7.84169C6.50658 7.36579 6.72485 6.86867 7.17849 6.41762L5.72423 4.95506C4.98542 5.68968 4.40459 6.72959 4.47445 7.95872L6.53363 7.84169ZM26.7745 24.4249C26.3966 24.8007 25.9916 25.0123 25.5843 25.0503L25.7757 27.1039C26.7858 27.0097 27.6134 26.4994 28.2287 25.8875L26.7745 24.4249ZM15.1337 10.6277C16.4874 9.28166 16.5881 7.15261 15.4476 5.62926L13.7965 6.86532C14.3514 7.60642 14.2689 8.57915 13.6795 9.16513L15.1337 10.6277ZM28.2221 19.6445C29.3466 20.2558 29.5217 21.6932 28.7278 22.4828L30.182 23.9454C32.0249 22.1129 31.4566 19.0553 29.2071 17.8325L28.2221 19.6445ZM23.4919 18.4772C24.0199 17.9523 24.8698 17.8222 25.5951 18.2164L26.5802 16.4044C25.0902 15.5944 23.2411 15.8181 22.0376 17.0147L23.4919 18.4772Z" fill="#858AD4"/>
                                </svg>
                                <span>Аудио</span>
                            </label>
                            <label for="video-method" id="c-m-exception-radio-button-2" class="c-m-radio-button">
                                <svg width="28" height="18" viewBox="0 0 28 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.5237 1.23141C26.3423 1.13834 26.1387 1.09708 25.9354 1.11215C25.7321 1.12722 25.5368 1.19804 25.3711 1.31683L19.3594 5.61011V2.21875C19.3594 1.6303 19.1256 1.06595 18.7095 0.649857C18.2934 0.23376 17.7291 0 17.1406 0H2.71875C2.1303 0 1.56595 0.23376 1.14986 0.649857C0.733761 1.06595 0.5 1.6303 0.5 2.21875L0.5 15.5312C0.5 16.1197 0.733761 16.684 1.14986 17.1001C1.56595 17.5162 2.1303 17.75 2.71875 17.75H17.1406C17.7291 17.75 18.2934 17.5162 18.7095 17.1001C19.1256 16.684 19.3594 16.1197 19.3594 15.5312V12.1399L25.3711 16.4332C25.5586 16.5686 25.7843 16.6412 26.0156 16.6406C26.1922 16.6402 26.3662 16.5984 26.5237 16.5186C26.705 16.4252 26.8571 16.2836 26.9631 16.1094C27.0692 15.9352 27.1252 15.7352 27.125 15.5312V2.21875C27.1252 2.01481 27.0692 1.81475 26.9631 1.64057C26.8571 1.46638 26.705 1.32481 26.5237 1.23141ZM2.71875 15.5312V2.21875H17.1406V15.5312H2.71875ZM24.9062 13.3757L19.3594 9.41305V8.33695L24.9062 4.37427V13.3757Z" fill="#858AD4"/>
                                </svg>
                                <span>Видео</span>
                            </label>
                            <label for="chat-method" id="c-m-exception-radio-button-3" class="c-m-radio-button">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.625 12.375H23.375M9.625 17.875H23.375M28.875 27.5L24.3041 25.2145C23.9576 25.0412 23.7843 24.9546 23.6027 24.8936C23.4415 24.8394 23.2756 24.8002 23.1072 24.7765C22.9174 24.75 22.7237 24.75 22.3363 24.75H8.525C6.98485 24.75 6.21478 24.75 5.62653 24.4502C5.10907 24.1867 4.68838 23.7659 4.42474 23.2485C4.125 22.6603 4.125 21.8901 4.125 20.35V9.9C4.125 8.35985 4.125 7.58978 4.42474 7.00153C4.68838 6.48407 5.10907 6.06338 5.62653 5.79974C6.21478 5.5 6.98486 5.5 8.525 5.5H24.475C26.0151 5.5 26.7853 5.5 27.3735 5.79974C27.8909 6.06338 28.3117 6.48407 28.5752 7.00153C28.875 7.58978 28.875 8.35986 28.875 9.9V27.5Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Чат</span>
                            </label>
                        </div>
                    </div>
                    <button class="form-send-button">Записаться</button>
                </form>
            </div>
        <div class="page_container contacts">
            <div class="page_container_content">
                <img src="{{ asset('/images/contacts.png') }}">
                <div class="page_container_content_text">
                    <h2>Контакты</h2>
                    <div>
                        <p>Телефон:</p>
                        <p>+ 7 837 263 6431</p>
                    </div>
                    <div>
                        <p>Электронная почта:</p>
                        <p>medic@mail.ru</p>
                    </div>
                    <p>г. Ижевск, ул. Ленина, д. 58</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        let specialistInputField = document.getElementById("field-specialist");
        let problemDescriptionField = document.getElementById("field-problem-description");

        // specialist field focus events
        specialistInputField.addEventListener("focus", () => {
            specialistInputField.style.border = "3px solid #858AD4";
        });

        specialistInputField.addEventListener("blur", () => {
            specialistInputField.style.border = "3px solid #58576A";
        });

        // problem description field focus events
        problemDescriptionField.addEventListener("focus", () => {
            problemDescriptionField.style.border = "3px solid #858AD4";
        });

        problemDescriptionField.addEventListener("blur", () => {
            problemDescriptionField.style.border = "3px solid #58576A";
        });
    </script>
    <script>
        active = elements = document.getElementsByClassName('nav-item');
        console.log(active);
        active[1].classList.add('active');
    </script>

    </html>

@endsection