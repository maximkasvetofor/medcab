@extends('layout.app')

@section('title', 'Справки')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="content_space">
                <div class="header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                        <path d="M5.75 19.1667C5.75 11.9385 5.75 8.32437 7.99551 6.07885C10.241 3.83334 13.8551 3.83334 21.0833 3.83334H24.9167C32.1448 3.83334 35.7591 3.83334 38.0044 6.07885C40.25 8.32437 40.25 11.9385 40.25 19.1667V26.8333C40.25 34.0615 40.25 37.6757 38.0044 39.9211C35.7591 42.1667 32.1448 42.1667 24.9167 42.1667H21.0833C13.8551 42.1667 10.241 42.1667 7.99551 39.9211C5.75 37.6757 5.75 34.0615 5.75 26.8333V19.1667Z" stroke="#1D1D1D" stroke-width="5"/>
                        <path d="M23.0001 11.5V15.3333M23.0001 15.3333V19.1667M23.0001 15.3333H19.1667M23.0001 15.3333H26.8335" stroke="#1D1D1D" stroke-opacity="0.5" stroke-width="5" stroke-linecap="round"/>
                        <path d="M15.3333 26.8333H30.6666" stroke="#1D1D1D" stroke-width="5" stroke-linecap="round"/>
                        <path d="M17.25 34.5H28.75" stroke="#1D1D1D" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                    <div class="header_title">Справки <span>(Найдено {{ $certificates->count() }})</span></div>
                </div>
                <div class="buttons_line">
                    <a href="" class="create_button">
                        <svg style="margin-right: 15px" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <g clip-path="url(#clip0_5_207)">
                                <path d="M16.0001 29.3333C23.3639 29.3333 29.3334 23.3638 29.3334 16C29.3334 8.6362 23.3639 2.66667 16.0001 2.66667C8.63628 2.66667 2.66675 8.6362 2.66675 16C2.66675 23.3638 8.63628 29.3333 16.0001 29.3333Z" stroke="#626DFF" stroke-width="5"/>
                                <path d="M20 16H16M16 16H12M16 16V12M16 16V20" stroke="#626DFF" stroke-width="5" stroke-linecap="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_5_207">
                                    <rect width="32" height="32" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        Добавить справку
                    </a>
                    <div class="search_field">
                        <label for="search" style="margin-right: 15px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_5_214)">
                                    <mask id="path-1-inside-1_5_214" fill="white">
                                        <path d="M17.6933 0C9.80475 0 3.38689 6.41786 3.38689 14.3065C3.38689 16.6358 3.94683 18.8368 4.93857 20.7823L1.29814 24.4227C-0.43304 26.1538 -0.43304 28.9706 1.29814 30.7016C2.16364 31.5672 3.30064 31.9999 4.43757 31.9999C5.57457 31.9999 6.71163 31.5672 7.57707 30.7016L11.2174 27.0612C13.1631 28.053 15.3641 28.6129 17.6933 28.6129C25.5818 28.6129 31.9997 22.195 31.9997 14.3065C31.9997 6.41793 25.5819 0 17.6933 0ZM5.4842 28.6086C4.90701 29.1858 3.9682 29.1856 3.39114 28.6086C2.81402 28.0316 2.81402 27.0926 3.39114 26.5156L6.58988 23.317C7.21382 24.0845 7.91544 24.786 8.68288 25.41L5.4842 28.6086ZM17.6933 25.653C11.4369 25.653 6.34682 20.5629 6.34682 14.3065C6.34682 8.05005 11.4369 2.95999 17.6933 2.95999C23.9497 2.95999 29.0398 8.04998 29.0398 14.3065C29.0398 20.563 23.9498 25.653 17.6933 25.653Z"/>
                                    </mask>
                                    <path d="M17.6933 0C9.80475 0 3.38689 6.41786 3.38689 14.3065C3.38689 16.6358 3.94683 18.8368 4.93857 20.7823L1.29814 24.4227C-0.43304 26.1538 -0.43304 28.9706 1.29814 30.7016C2.16364 31.5672 3.30064 31.9999 4.43757 31.9999C5.57457 31.9999 6.71163 31.5672 7.57707 30.7016L11.2174 27.0612C13.1631 28.053 15.3641 28.6129 17.6933 28.6129C25.5818 28.6129 31.9997 22.195 31.9997 14.3065C31.9997 6.41793 25.5819 0 17.6933 0ZM5.4842 28.6086C4.90701 29.1858 3.9682 29.1856 3.39114 28.6086C2.81402 28.0316 2.81402 27.0926 3.39114 26.5156L6.58988 23.317C7.21382 24.0845 7.91544 24.786 8.68288 25.41L5.4842 28.6086ZM17.6933 25.653C11.4369 25.653 6.34682 20.5629 6.34682 14.3065C6.34682 8.05005 11.4369 2.95999 17.6933 2.95999C23.9497 2.95999 29.0398 8.04998 29.0398 14.3065C29.0398 20.563 23.9498 25.653 17.6933 25.653Z" fill="#707070"/>
                                    <path d="M4.93857 20.7823L8.47411 24.3178L11.0433 21.7486L9.39317 18.5115L4.93857 20.7823ZM1.29814 24.4227L4.83355 27.9584L4.83368 27.9582L1.29814 24.4227ZM1.29814 30.7016L4.83393 27.1663L4.83355 27.166L1.29814 30.7016ZM7.57707 30.7016L4.0415 27.1661L4.04128 27.1663L7.57707 30.7016ZM11.2174 27.0612L13.4882 22.6066L10.2511 20.9565L7.68187 23.5257L11.2174 27.0612ZM5.4842 28.6086L1.9487 25.0731L1.94866 25.0731L5.4842 28.6086ZM3.39114 28.6086L6.92648 25.0729L3.39114 28.6086ZM3.39114 26.5156L6.92629 30.0516L6.9266 30.0512L3.39114 26.5156ZM6.58988 23.317L10.4695 20.1629L6.97334 15.8626L3.05442 19.7814L6.58988 23.317ZM8.68288 25.41L12.2184 28.9456L16.1372 25.0268L11.8372 21.5306L8.68288 25.41ZM17.6933 -5C7.04331 -5 -1.61311 3.65645 -1.61311 14.3065H8.38689C8.38689 9.17927 12.5662 5 17.6933 5V-5ZM-1.61311 14.3065C-1.61311 17.4457 -0.856843 20.4228 0.483975 23.0531L9.39317 18.5115C8.7505 17.2507 8.38689 15.826 8.38689 14.3065H-1.61311ZM1.40304 17.2467L-2.23739 20.8872L4.83368 27.9582L8.47411 24.3178L1.40304 17.2467ZM-2.23726 20.887C-5.92124 24.5708 -5.92124 30.5536 -2.23726 34.2373L4.83355 27.166C5.05516 27.3876 5.05516 27.7368 4.83355 27.9584L-2.23726 20.887ZM-2.23765 34.2369C-0.393432 36.0814 2.03359 36.9999 4.43757 36.9999V26.9999C4.56769 26.9999 4.72072 27.0531 4.83393 27.1663L-2.23765 34.2369ZM4.43757 36.9999C6.84164 36.9999 9.26872 36.0813 11.1129 34.2369L4.04128 27.1663C4.15455 27.0531 4.3075 26.9999 4.43757 26.9999V36.9999ZM11.1126 34.2371L14.753 30.5967L7.68187 23.5257L4.0415 27.1661L11.1126 34.2371ZM8.94669 31.5158C11.5771 32.8567 14.5542 33.6129 17.6933 33.6129V23.6129C16.1739 23.6129 14.7491 23.2493 13.4882 22.6066L8.94669 31.5158ZM17.6933 33.6129C28.3433 33.6129 36.9997 24.9564 36.9997 14.3065H26.9997C26.9997 19.4336 22.8204 23.6129 17.6933 23.6129V33.6129ZM36.9997 14.3065C36.9997 3.65654 28.3434 -5 17.6933 -5V5C22.8204 5 26.9997 9.17931 26.9997 14.3065H36.9997ZM1.94866 25.0731C3.32462 23.6971 5.55148 23.6981 6.92648 25.0729L-0.144203 32.1444C2.38492 34.6732 6.48941 34.6745 9.01973 32.1442L1.94866 25.0731ZM6.92648 25.0729C8.30213 26.4484 8.3024 28.6757 6.92629 30.0516L-0.144012 22.9797C-2.67437 25.5095 -2.6741 29.6147 -0.144203 32.1444L6.92648 25.0729ZM6.9266 30.0512L10.1253 26.8526L3.05442 19.7814L-0.144326 22.98L6.9266 30.0512ZM2.71029 26.4712C3.55062 27.5048 4.4953 28.4493 5.52852 29.2895L11.8372 21.5306C11.3356 21.1227 10.877 20.6641 10.4695 20.1629L2.71029 26.4712ZM5.14738 21.8744L1.9487 25.0731L9.0197 32.1442L12.2184 28.9456L5.14738 21.8744ZM17.6933 20.653C14.1983 20.653 11.3468 17.8015 11.3468 14.3065H1.34682C1.34682 23.3243 8.67545 30.653 17.6933 30.653V20.653ZM11.3468 14.3065C11.3468 10.8115 14.1983 7.95999 17.6933 7.95999V-2.04001C8.67545 -2.04001 1.34682 5.28862 1.34682 14.3065H11.3468ZM17.6933 7.95999C21.1883 7.95999 24.0398 10.8114 24.0398 14.3065H34.0398C34.0398 5.28854 26.7111 -2.04001 17.6933 -2.04001V7.95999ZM24.0398 14.3065C24.0398 17.8015 21.1884 20.653 17.6933 20.653V30.653C26.7112 30.653 34.0398 23.3244 34.0398 14.3065H24.0398Z" fill="#707070" mask="url(#path-1-inside-1_5_214)"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_5_214">
                                        <rect width="32" height="32" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </label>
                        <input type="text" id="search" placeholder="Найти" />
                    </div>
                </div>
                @if($certificates->isEmpty())
                    <div class="empty">В настоящее время у вас нет справок</div>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Справка</th>
                                <th>Врач</th>
                                <th>Дата</th>
                                <th>Операции</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($certificates as $certificate)
                                <tr>
                                    <td>{{ $certificate->name }}</td>
                                    <td> {{ $certificate->doctor }}</td>
                                    <td>{{ $certificate->started_at }}</td>
                                    <td style="display: flex">
                                        <div class="edit">Изменить</div>
                                        <div class="delete">Удалить</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>

    <script>
        $('#certificates').addClass('sidebar_menu_button_active');
    </script>
@endsection
