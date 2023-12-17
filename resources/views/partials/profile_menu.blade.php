@extends('layout.profile')

@section('path')
    <div class="profile_path"><a href="{{ route('profile') }}">Профиль</a> / </div>
@endsection

@section('profile_content')
    <div class="profile_menu">
        <a href="{{ route('certificates') }}">
            <div class="profile_menu_item">
                <div class="profile_line">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" fill="none">
                        <path d="M25 83.3333C25 51.9063 25 36.1929 34.7631 26.4298C44.5262 16.6667 60.2397 16.6667 91.6667 16.6667H108.333C139.76 16.6667 155.474 16.6667 165.237 26.4298C175 36.1929 175 51.9063 175 83.3333V116.667C175 148.093 175 163.807 165.237 173.57C155.474 183.333 139.76 183.333 108.333 183.333H91.6667C60.2397 183.333 44.5262 183.333 34.7631 173.57C25 163.807 25 148.093 25 116.667V83.3333Z" stroke="#626DFF" stroke-width="15"/>
                        <path d="M100 50V66.6667M100 66.6667V83.3333M100 66.6667H83.3332M100 66.6667H116.667" stroke="#626DFF" stroke-opacity="0.5" stroke-width="15" stroke-linecap="round"/>
                        <path d="M66.6667 116.667H133.333" stroke="#626DFF" stroke-width="15" stroke-linecap="round"/>
                        <path d="M75 150H125" stroke="#626DFF" stroke-width="15" stroke-linecap="round"/>
                    </svg>
                    <div class="profile_menu_item_label">Мои справки</div>
                </div>
            </div>
        </a>
        <a href="{{ route('recommendations') }}">
            <div class="profile_menu_item">
                <div class="profile_line">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" fill="none">
                        <path d="M100 16.6667H183.333V100H100V16.6667ZM137.167 73L160.833 49.4167L154.167 42.75L137.5 59.4167L129.167 51.0833L122.5 57.75L137.167 73Z" fill="#626DFF" fill-opacity="0.5"/>
                        <path d="M16.6667 116.667V183.333H83.3334V116.667H16.6667ZM66.6667 166.667H33.3334V133.333H66.6667V166.667Z" fill="#626DFF"/>
                        <path d="M100 100H183.333V83.5833L116.667 83.3333L100 100Z" fill="#626DFF"/>
                        <path d="M166.667 33.3333V83.5L183.333 100V16.6667L166.667 33.3333Z" fill="#626DFF" fill-opacity="0.75"/>
                        <path d="M83.3334 183.333L66.6667 166.667V133.333L83.3334 116.667V183.333Z" fill="#626DFF" fill-opacity="0.5"/>
                        <path d="M16.6667 183.333L33.3334 166.667H66.6667L83.3334 183.333H16.6667Z" fill="#626DFF" fill-opacity="0.75"/>
                        <path d="M16.6667 33.3333V100H83.3334V33.3333H16.6667ZM66.6667 83.3333H33.3334V50H66.6667V83.3333Z" fill="#626DFF"/>
                        <path d="M83.3334 100L66.6667 83.3333V50L83.3334 33.3333V100Z" fill="#626DFF" fill-opacity="0.5"/>
                        <path d="M16.6667 100L33.3334 83.3333H66.6667L83.3334 100H16.6667Z" fill="#626DFF" fill-opacity="0.75"/>
                        <path d="M100 116.667V183.333H166.667V116.667H100ZM150 166.667H116.667V133.333H150V166.667Z" fill="#626DFF"/>
                        <path d="M166.667 183.333L150 166.667V133.333L166.667 116.667V183.333Z" fill="#626DFF" fill-opacity="0.5"/>
                        <path d="M100 183.333L116.667 166.667H150L166.667 183.333H100Z" fill="#626DFF" fill-opacity="0.75"/>
                    </svg>
                    <div class="profile_menu_item_label">Рекомендации врачей</div>
                </div>
            </div>
        </a>
        <a href="{{ route('consultations') }}">
            <div class="profile_menu_item">
                <div class="profile_line">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" fill="none">
                        <path d="M100 183.333C146.023 183.333 183.333 146.023 183.333 100C183.333 53.9763 146.023 16.6667 100 16.6667C53.9762 16.6667 16.6667 53.9763 16.6667 100C16.6667 113.331 19.7968 125.93 25.3622 137.104C26.8412 140.073 27.3334 143.467 26.476 146.672L21.5126 165.222C19.3579 173.275 26.7251 180.642 34.7779 178.488L53.3283 173.524C56.5328 172.667 59.9267 173.159 62.8961 174.637C74.0697 180.203 86.6692 183.333 100 183.333Z" stroke="#626DFF" stroke-width="15"/>
                        <path d="M66.6667 100H66.7417M99.925 100H100M133.258 100H133.333" stroke="#626DFF" stroke-opacity="0.5" stroke-width="15" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="profile_menu_item_label">Консультация</div>
                </div>
            </div>
        </a>
        <a href="{{ route('settings') }}" class="async">
            <div class="profile_menu_item">
                <div class="profile_line">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" fill="none">
                        <path d="M100 125C113.807 125 125 113.807 125 100C125 86.1929 113.807 75 100 75C86.1929 75 75 86.1929 75 100C75 113.807 86.1929 125 100 125Z" stroke="#626DFF" stroke-width="15"/>
                        <path d="M30.5102 88.66C34.4481 91.1342 36.9819 95.3492 36.9819 99.9992C36.9818 104.65 34.448 108.865 30.5102 111.339C27.8305 113.022 26.104 114.368 24.8757 115.969C22.1848 119.477 20.9972 123.908 21.5742 128.291C22.0069 131.577 23.9483 134.94 27.8311 141.666C31.714 148.391 33.6554 151.753 36.2855 153.772C39.7924 156.462 44.2245 157.65 48.607 157.073C50.6073 156.81 52.6357 155.987 55.433 154.509C59.5453 152.336 64.4632 152.249 68.4913 154.575C72.5189 156.901 74.9023 161.202 75.076 165.85C75.1943 169.012 75.4965 171.181 76.2687 173.045C77.9603 177.128 81.2048 180.373 85.2883 182.065C88.3517 183.333 92.2342 183.333 100 183.333C107.766 183.333 111.648 183.333 114.712 182.065C118.795 180.373 122.04 177.128 123.732 173.045C124.503 171.181 124.806 169.012 124.924 165.851C125.098 161.202 127.481 156.901 131.509 154.575C135.537 152.25 140.454 152.337 144.566 154.51C147.364 155.988 149.393 156.811 151.393 157.074C155.775 157.652 160.208 156.463 163.714 153.772C166.344 151.755 168.286 148.392 172.169 141.667C173.898 138.672 175.242 136.345 176.238 134.393M169.489 111.34C165.552 108.866 163.018 104.651 163.018 100.001C163.018 95.35 165.552 91.1342 169.489 88.66C172.169 86.9767 173.895 85.6308 175.123 84.03C177.814 80.5232 179.002 76.091 178.425 71.7085C177.993 68.4217 176.051 65.059 172.168 58.3337C168.285 51.6084 166.343 48.2458 163.713 46.2277C160.207 43.5367 155.774 42.3492 151.392 42.9261C149.392 43.1895 147.363 44.0117 144.566 45.4902C140.453 47.6637 135.536 47.7503 131.508 45.4247C127.481 43.0992 125.098 38.7975 124.924 34.1502C124.806 30.9877 124.503 28.8196 123.732 26.9552C122.04 22.8715 118.795 19.6269 114.712 17.9353C111.648 16.6667 107.766 16.6667 100 16.6667C92.2342 16.6667 88.3517 16.6667 85.2883 17.9353C81.2048 19.6269 77.9603 22.8715 76.2687 26.9552C75.4965 28.8194 75.1943 30.9873 75.076 34.1495C74.9022 38.7972 72.5188 43.0992 68.4909 45.4247C64.4631 47.7502 59.5457 47.6632 55.4338 45.49C52.6361 44.0113 50.6075 43.1891 48.6071 42.9257C44.2246 42.3487 39.7924 43.5363 36.2856 46.2272C33.6555 48.2454 31.7141 51.6081 27.8312 58.3333C26.1026 61.3274 24.7588 63.6549 23.7615 65.6061" stroke="#626DFF" stroke-width="15" stroke-linecap="round"/>
                    </svg>
                    <div class="profile_menu_item_label">Настройки</div>
                </div>
            </div>
        </a>
    </div>
@endsection
