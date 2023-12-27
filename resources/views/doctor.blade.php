@extends('layout.app')

@section('title', 'Запись')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')

    <div class="wrapper">
        <div class="container">
            @foreach($doctors as $doctor)
            <div class="content_space">
                <div class="header">
                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4678 18.0337C10.6907 18.3566 9.03922 19.2137 7.74388 20.5091C6.06672 22.1862 5.125 24.4604 5.125 26.832V32.007C5.125 34.13 6.84572 35.8508 8.96875 35.8508C14.3295 35.8508 26.6705 35.8508 32.0312 35.8508C34.1543 35.8508 35.875 34.13 35.875 32.007V26.832C35.875 24.4604 34.9333 22.1862 33.2561 20.5091C31.9608 19.2137 30.3092 18.3566 28.5322 18.0337C29.1318 16.8306 29.4688 15.475 29.4688 14.04C29.4688 9.09057 25.4495 5.07129 20.5 5.07129C15.5505 5.07129 11.5312 9.09057 11.5312 14.04C11.5312 15.475 11.8682 16.8306 12.4678 18.0337ZM26.7781 20.4424C25.1612 22.0299 22.9433 23.0088 20.5 23.0088C18.0567 23.0088 15.8388 22.0299 14.2219 20.4424C14.1706 20.4489 14.1194 20.4514 14.0681 20.4514C12.3756 20.4514 10.7523 21.1241 9.55684 22.3208C8.36016 23.5174 7.6875 25.1408 7.6875 26.832V32.007C7.6875 32.7143 8.2615 33.2883 8.96875 33.2883H32.0312C32.7385 33.2883 33.3125 32.7143 33.3125 32.007V26.832C33.3125 25.1408 32.6398 23.5174 31.4432 22.3208C30.2478 21.1241 28.6244 20.4514 26.9319 20.4514C26.8806 20.4514 26.8294 20.4489 26.7781 20.4424ZM20.5 7.63379C24.0362 7.63379 26.9062 10.5051 26.9062 14.04C26.9062 17.5763 24.0362 20.4463 20.5 20.4463C16.9638 20.4463 14.0938 17.5763 14.0938 14.04C14.0938 10.5051 16.9638 7.63379 20.5 7.63379Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.625 25.6353H24.3438C23.6365 25.6353 23.0625 26.2093 23.0625 26.9165C23.0625 27.6238 23.6365 28.1978 24.3438 28.1978H25.625V29.479C25.625 30.1863 26.199 30.7603 26.9062 30.7603C27.6135 30.7603 28.1875 30.1863 28.1875 29.479V28.1978H29.4688C30.176 28.1978 30.75 27.6238 30.75 26.9165C30.75 26.2093 30.176 25.6353 29.4688 25.6353H28.1875V24.354C28.1875 23.6468 27.6135 23.0728 26.9062 23.0728C26.199 23.0728 25.625 23.6468 25.625 24.354V25.6353Z" fill="black"/>
                    </svg>

                    <div class="header_title">{{ $doctor->name }} <span style="color: #858AD4">{{ $doctor->specialization }}</span></div>


                </div>
                <div class="buttons_line">

                    <a href="{{ route('appointmspecialist') }}" class="create_button">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" style="padding-right: 10px">
                            <g clip-path="url(#clip0_94_391)">
                                <path d="M10 15H30C30.2652 15 30.5196 15.1054 30.7071 15.2929C30.8946 15.4804 31 15.7348 31 16C31 16.2652 30.8946 16.5196 30.7071 16.7071C30.5196 16.8946 30.2652 17 30 17H10C9.73478 17 9.48043 16.8946 9.29289 16.7071C9.10536 16.5196 9 16.2652 9 16C9 15.7348 9.10536 15.4804 9.29289 15.2929C9.48043 15.1054 9.73478 15 10 15Z" fill="#858AD4"/>
                                <path d="M10.4138 16L18.7078 24.292C18.8956 24.4798 19.0011 24.7345 19.0011 25C19.0011 25.2656 18.8956 25.5203 18.7078 25.708C18.5201 25.8958 18.2654 26.0013 17.9998 26.0013C17.7343 26.0013 17.4796 25.8958 17.2918 25.708L8.29183 16.708C8.19871 16.6152 8.12482 16.5048 8.07441 16.3833C8.024 16.2618 7.99805 16.1316 7.99805 16C7.99805 15.8685 8.024 15.7383 8.07441 15.6168C8.12482 15.4953 8.19871 15.3849 8.29183 15.292L17.2918 6.29204C17.4796 6.10427 17.7343 5.99878 17.9998 5.99878C18.2654 5.99878 18.5201 6.10427 18.7078 6.29204C18.8956 6.47982 19.0011 6.73449 19.0011 7.00004C19.0011 7.26559 18.8956 7.52027 18.7078 7.70804L10.4138 16Z" fill="#858AD4"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_94_391">
                                    <rect width="32" height="32" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        Вернуться
                    </a>

                    </div>
                <div class="doctor_info">

                    <div class="doctor_block_info">
                        <b>Достижения</b>
                        <div class="doctor_info_achviements">
                            <p>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.9998 21.3334C21.1545 21.3334 25.3332 17.1547 25.3332 12.0001C25.3332 6.84542 21.1545 2.66675 15.9998 2.66675C10.8452 2.66675 6.6665 6.84542 6.6665 12.0001C6.6665 17.1547 10.8452 21.3334 15.9998 21.3334Z" stroke="#1C274C" stroke-width="5"/>
                                <path opacity="0.5" d="M9.80148 20L8.95232 23.0973C8.11453 26.1531 7.69564 27.6809 8.25463 28.5175C8.45053 28.8105 8.71333 29.0459 9.01829 29.2011C9.88847 29.6441 11.232 28.9441 13.9191 27.544C14.8132 27.0781 15.2603 26.8452 15.7352 26.7945C15.9113 26.7757 16.0887 26.7757 16.2648 26.7945C16.7397 26.8452 17.1868 27.0781 18.0809 27.544C20.768 28.9441 22.1116 29.6441 22.9817 29.2011C23.2867 29.0459 23.5495 28.8105 23.7453 28.5175C24.3044 27.6809 23.8855 26.1531 23.0477 23.0973L22.1985 20" stroke="#1C274C" stroke-width="5" stroke-linecap="round"/>
                            </svg>
                            {{ $doctor->achive }}
                            </p>
                        </div>
                    </div>
                    @if($doctor->gender == 'male')
                        <img src="{{ asset('/images/doctor_image1.PNG') }}">
                    @else
                        <img src="{{ asset('/images/doctor_imagew1.PNG') }}">
                    @endif

                </div>
                @endforeach
                <div class="doctor_order">
                    <div style="max-width: 500px;width: 100%;">
                        <div class="doctor_order_text">
                            <p>Описание проблемы</p>
                            <textarea></textarea>
                        </div>
                        <div class="prikrepka_field">
                            <button class="prikrepka">
                                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_103_249)">
                                        <path d="M10.3464 28.5065C9.21538 28.5065 8.11267 28.2918 7.06877 27.8683C5.98723 27.4296 5.01738 26.7858 4.186 25.9547C3.35461 25.1237 2.71085 24.1535 2.27244 23.072C1.84897 22.0281 1.63428 20.9254 1.63428 19.7943C1.63428 18.6633 1.84897 17.5603 2.27244 16.5164C2.71085 15.4349 3.35492 14.465 4.186 13.6336L4.18817 13.6315L15.6679 2.20675C16.2598 1.61526 16.9505 1.15663 17.7209 0.844234C18.4642 0.542733 19.2493 0.389648 20.0545 0.389648C20.8594 0.389648 21.6445 0.542733 22.3881 0.844234C23.1585 1.15663 23.8489 1.61526 24.4411 2.20675C25.0329 2.79855 25.4912 3.4893 25.8039 4.2597C26.1054 5.00334 26.2582 5.78836 26.2582 6.59361C26.2582 7.39886 26.1054 8.18389 25.8039 8.92753C25.4912 9.69793 25.0329 10.3884 24.4411 10.9805L12.9865 22.4344C12.6302 22.7907 12.2148 23.0664 11.7506 23.2549C11.3032 23.4363 10.8305 23.5284 10.3461 23.5284C9.86163 23.5284 9.38931 23.4363 8.94157 23.2549C8.47765 23.0667 8.06196 22.7907 7.70569 22.4344C7.34943 22.0785 7.07375 21.6628 6.88551 21.1989C6.70473 20.7511 6.61263 20.2788 6.61263 19.7943C6.61263 19.3099 6.70473 18.8373 6.88613 18.3898C7.07406 17.9259 7.35005 17.5099 7.70631 17.1536L18.267 6.5933C18.753 6.10729 19.5411 6.10729 20.0271 6.5933C20.5131 7.07931 20.5131 7.86745 20.0271 8.35346L9.46647 18.9138C9.23125 19.1493 9.10181 19.462 9.10181 19.7943C9.10181 20.1266 9.23125 20.439 9.46647 20.6743C9.70139 20.9095 10.0141 21.0389 10.3464 21.0389C10.6787 21.0389 10.9914 20.9095 11.2263 20.6743L22.6809 9.22001C23.3825 8.51837 23.769 7.58555 23.769 6.59361C23.769 5.60168 23.3825 4.66854 22.6809 3.96722C21.9796 3.26527 21.0468 2.87883 20.0545 2.87883C19.0623 2.87883 18.1291 3.26527 17.4281 3.96691L17.4259 3.96909L5.94522 15.3947C5.35124 15.989 4.89137 16.6813 4.57866 17.452C4.27685 18.1972 4.12345 18.9857 4.12345 19.7943C4.12345 20.603 4.27685 21.3912 4.57897 22.1363C4.89199 22.9077 5.35155 23.6 5.94647 24.1943C6.54076 24.7886 7.23337 25.2488 8.00408 25.5615C8.74959 25.8639 9.53773 26.0173 10.3464 26.0173C11.1551 26.0173 11.9435 25.8639 12.6887 25.5615C13.46 25.2488 14.152 24.7889 14.7466 24.1943L26.1875 12.7534C26.6735 12.2674 27.4617 12.2674 27.9474 12.7534C28.4334 13.2394 28.4334 14.0275 27.9474 14.5136L16.5065 25.9544C15.6754 26.7855 14.7056 27.4293 13.6237 27.868C12.5804 28.2918 11.4774 28.5065 10.3464 28.5065Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_103_249">
                                            <rect width="29.8701" height="29.8701" fill="white" transform="translate(0.389648 0.389648)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                            <p>Прикрепить файлы</p>
                        </div>
                    </div>
                    <div class="doctor_order_menu">
                        <p>Предпочитаемый способ связи</p>
                        <div class="doctor_order_menu_buttons">
                            <button>
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" style="padding-right:10px">
                                    <g clip-path="url(#clip0_103_265)">
                                        <path d="M36.4785 9.94676C36.4049 9.84803 36.3125 9.76478 36.2067 9.70176C36.1009 9.63874 35.9837 9.59719 35.8618 9.57949C35.7399 9.56179 35.6157 9.56828 35.4963 9.59859C35.377 9.6289 35.2647 9.68243 35.166 9.75614L20.0442 21.0436C19.9901 21.0842 19.9243 21.1061 19.8567 21.1061C19.7891 21.1061 19.7233 21.0842 19.6692 21.0436L4.84417 9.70614C4.7463 9.63145 4.63467 9.57677 4.51566 9.54522C4.39665 9.51367 4.2726 9.50587 4.15057 9.52227C4.02855 9.53866 3.91095 9.57893 3.8045 9.64077C3.69804 9.70262 3.6048 9.78482 3.53011 9.8827C3.45542 9.98057 3.40074 10.0922 3.36919 10.2112C3.33764 10.3302 3.32985 10.4543 3.34624 10.5763C3.36264 10.6983 3.4029 10.8159 3.46475 10.9224C3.52659 11.0288 3.6088 11.1221 3.70667 11.1968L15.3629 20.1124L3.8348 28.7999C3.73549 28.874 3.65174 28.9669 3.58833 29.0733C3.52492 29.1798 3.4831 29.2976 3.46526 29.4202C3.44741 29.5428 3.45389 29.6678 3.48432 29.7879C3.51475 29.908 3.56854 30.0209 3.64261 30.1202C3.71668 30.2195 3.80959 30.3033 3.91603 30.3667C4.02247 30.4301 4.14036 30.4719 4.26296 30.4897C4.38557 30.5076 4.51048 30.5011 4.63058 30.4707C4.75068 30.4402 4.86361 30.3865 4.96292 30.3124L16.9098 21.2936L18.5285 22.5436C18.906 22.8326 19.3673 22.9907 19.8426 22.9941C20.3179 22.9974 20.7814 22.8459 21.1629 22.5624L22.8629 21.2936L34.9504 30.3124C35.0491 30.3861 35.1614 30.4396 35.2807 30.4698C35.4001 30.5001 35.5243 30.5066 35.6462 30.4889C35.768 30.4712 35.8852 30.4297 35.9911 30.3667C36.0969 30.3037 36.1893 30.2205 36.2629 30.1218C36.3366 30.0231 36.3901 29.9108 36.4204 29.7915C36.4507 29.6721 36.4571 29.5479 36.4394 29.426C36.4217 29.3042 36.3802 29.187 36.3172 29.0811C36.2542 28.9753 36.171 28.8829 36.0723 28.8093L24.4285 20.1093L36.2879 11.2499C36.4846 11.1013 36.6149 10.8813 36.6506 10.6374C36.6863 10.3935 36.6245 10.1454 36.4785 9.94676Z" fill="#858AD4"/>
                                        <path d="M35.3125 5.9375H4.6875C3.4443 5.9375 2.25201 6.43136 1.37294 7.31044C0.49386 8.18951 0 9.3818 0 10.625L0 29.375C0 30.6182 0.49386 31.8105 1.37294 32.6896C2.25201 33.5686 3.4443 34.0625 4.6875 34.0625H35.3125C36.5557 34.0625 37.748 33.5686 38.6271 32.6896C39.5061 31.8105 40 30.6182 40 29.375V10.625C40 9.3818 39.5061 8.18951 38.6271 7.31044C37.748 6.43136 36.5557 5.9375 35.3125 5.9375ZM38.125 29.375C38.125 30.1209 37.8287 30.8363 37.3012 31.3637C36.7738 31.8912 36.0584 32.1875 35.3125 32.1875H4.6875C3.94158 32.1875 3.22621 31.8912 2.69876 31.3637C2.17132 30.8363 1.875 30.1209 1.875 29.375V10.625C1.875 9.87908 2.17132 9.16371 2.69876 8.63626C3.22621 8.10882 3.94158 7.8125 4.6875 7.8125H35.3125C36.0584 7.8125 36.7738 8.10882 37.3012 8.63626C37.8287 9.16371 38.125 9.87908 38.125 10.625V29.375Z" fill="#858AD4"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_103_265">
                                            <rect width="40" height="40" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>

                                Чат
                            </button>
                            <button>
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" style="padding-right:10px">
                                    <path d="M24.5561 33.3314C23.7857 33.3309 23.0203 33.2062 22.2896 32.962C17.1868 31.2526 12.549 28.3855 8.73917 24.5854C4.9382 20.7772 2.0709 16.1408 0.36198 11.0394C-0.0901903 9.69672 -0.129706 8.2494 0.248527 6.88407C0.62676 5.51873 1.4054 4.29796 2.48405 3.37917L5.12276 1.11873C5.59712 0.712172 6.14848 0.40524 6.74399 0.216226C7.33951 0.0272113 7.96699 -0.0400172 8.58904 0.0185461C9.21109 0.0771094 9.81499 0.260266 10.3647 0.557102C10.9145 0.853938 11.3989 1.25838 11.789 1.74632L15.1373 5.93535C15.6724 6.60678 15.9875 7.42668 16.04 8.28354C16.0924 9.14039 15.8795 9.99259 15.4304 10.7242L13.9027 13.2026C13.7384 13.4685 13.6687 13.782 13.7047 14.0924C13.7407 14.4029 13.8805 14.6921 14.1013 14.9132L18.4066 19.2175C18.6275 19.4382 18.9164 19.5779 19.2266 19.6142C19.5368 19.6505 19.8502 19.5812 20.1162 19.4175L22.5965 17.8901C23.3281 17.4403 24.1806 17.227 25.0378 17.2794C25.8951 17.3319 26.7153 17.6474 27.3865 18.1831L31.5765 21.5349C32.0644 21.925 32.4687 22.4093 32.7655 22.9589C33.0623 23.5086 33.2455 24.1123 33.304 24.7341C33.3626 25.356 33.2954 25.9833 33.1065 26.5786C32.9175 27.174 32.6107 27.7252 32.2042 28.1996L29.9433 30.8377C29.2789 31.6179 28.4533 32.2449 27.5233 32.6754C26.5933 33.1059 25.581 33.3297 24.5561 33.3314ZM8.15033 2.77657C7.70296 2.77627 7.27032 2.93638 6.93097 3.22783L4.29087 5.48827C3.63288 6.04862 3.15781 6.79313 2.92687 7.62586C2.69593 8.45859 2.7197 9.34139 2.99513 10.1605C4.56829 14.8533 7.20638 19.1184 10.7029 22.6221C14.2079 26.1175 18.4745 28.7545 23.1687 30.3267C23.9879 30.6022 24.8708 30.6262 25.7037 30.3956C26.5366 30.1649 27.2814 29.6903 27.842 29.0327L30.1016 26.3946C30.2655 26.2033 30.3892 25.9811 30.4654 25.741C30.5415 25.5009 30.5686 25.248 30.5448 24.9973C30.5211 24.7465 30.4471 24.5032 30.3273 24.2816C30.2075 24.0601 30.0443 23.865 29.8474 23.7079L25.6574 20.3561C25.4338 20.1772 25.1602 20.0718 24.8743 20.0544C24.5884 20.037 24.3041 20.1084 24.0603 20.2589L21.5813 21.7862C20.7842 22.2812 19.8428 22.4914 18.9107 22.3825C17.9787 22.2735 17.1111 21.8519 16.4497 21.1864L12.1445 16.8821C11.4778 16.22 11.0555 15.3514 10.9465 14.4182C10.8375 13.4851 11.0484 12.5426 11.5445 11.7447L13.0722 9.26631C13.2227 9.02263 13.2941 8.73839 13.2767 8.45253C13.2593 8.16668 13.1539 7.8932 12.975 7.66956L9.61689 3.48192C9.4415 3.26135 9.21846 3.08332 8.96448 2.96117C8.7105 2.83902 8.43217 2.77591 8.15033 2.77657Z" fill="#858AD4"/>
                                </svg>

                                Аудио
                            </button>
                            <button>
                                <svg width="36" height="24" viewBox="0 0 36 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="padding-right:10px">
                                    <path d="M34.6983 1.64188C34.4564 1.51779 34.185 1.46278 33.9139 1.48287C33.6427 1.50296 33.3824 1.59739 33.1614 1.75577L25.1458 7.48015V2.95833C25.1458 2.17373 24.8342 1.42127 24.2794 0.866476C23.7246 0.311681 22.9721 0 22.1875 0H2.95833C2.17373 0 1.42127 0.311681 0.866476 0.866476C0.311681 1.42127 0 2.17373 0 2.95833L0 20.7083C0 21.4929 0.311681 22.2454 0.866476 22.8002C1.42127 23.355 2.17373 23.6667 2.95833 23.6667H22.1875C22.9721 23.6667 23.7246 23.355 24.2794 22.8002C24.8342 22.2454 25.1458 21.4929 25.1458 20.7083V16.1865L33.1614 21.9109C33.4115 22.0915 33.7124 22.1883 34.0208 22.1875C34.2563 22.1869 34.4883 22.1312 34.6983 22.0248C34.94 21.9002 35.1427 21.7115 35.2842 21.4792C35.4256 21.247 35.5003 20.9803 35.5 20.7083V2.95833C35.5003 2.68641 35.4256 2.41967 35.2842 2.18743C35.1427 1.95518 34.94 1.76642 34.6983 1.64188ZM2.95833 20.7083V2.95833H22.1875V20.7083H2.95833ZM32.5417 17.8343L25.1458 12.5507V11.1159L32.5417 5.83235V17.8343Z" fill="#858AD4"/>
                                </svg>
                                Видео
                            </button>
                        </div>
                        <a class="doctor_order_button">
                            Записаться
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#consultations').addClass('sidebar_menu_button_active');
    </script>
    <style>
        .doctor_order_button{
            margin-top: 20px;
            text-decoration: none;
            max-width: 340px;
            width: 100%;
            outline: none;
            height: 61px;
            border-radius: 30px;
            font-size: 24px;
            font-family: Roboto;
            text-align: center;
            background: #858AD4;
            border: none;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: white;
            margin-bottom: 30px;
        }

        .doctor_order_menu{
            width: 60%;
            display: flex;
            flex-direction: column;
            align-items: self-end;
            text-align: end;
        }
        .doctor_order_menu_buttons{
            margin-top: 20px;
            display: flex;
            max-width: 430px;
            width: 100%;
            justify-content: space-between;
        }
        .doctor_order_menu p {
            font-size: 24px;
            color: black;
            width: 100%;
        }
        .doctor_order_menu button{
            cursor: pointer;
            max-width: 130px;
            width: 100%;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;

            background: #FFFFFF;
            border: 1px solid #858AD4;
            border-radius: 20px;

            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 28px;

            color: #858AD4;


        }
        .doctor_order {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .prikrepka_field{
            margin-top: 10px;
            display: flex;
            align-items: center;
            font-size: 24px;
            color: black;
        }
        .prikrepka_field p {
            margin-left: 20px;
        }
        .prikrepka{
            border: none;
            outline: none;
            border-radius: 360px;
            height: 50px;
            width: 50px;
            background: #858AD4;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .doctor_order textarea{
            border-radius: 30px;
            max-width: 500px;
            width: 100%;
            height: 135px;
            padding: 15px;
        }
        .doctor_order{
            margin-top: 40px;
        }
        .doctor_order_text p {
            color: gray;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .doctor_block_info{
            width: 100%;
            font-size: 24px;
            color: black;
        }
        .doctor_info img{
            width: 390px;
            height: 290px;
            border-radius: 360px;
        }
        .doctor_info{
            display: flex;
            flex-direction: row;
        }
        .doctor_info_achviements{
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 30px;
            width: 100%;
            height: 230px;
            display: flex;
            justify-content: inherit;
            align-items: flex-start;
            margin-top: 20px;
        }
        .doctor_info_achviements p {
            display: flex;
            justify-content: center;
            padding: 30px;
        }
        .doctor_info {
            margin-top: 40px;
        }
        .doctor_info b {
            font-size: 32px;
        }
    </style>
@endsection
