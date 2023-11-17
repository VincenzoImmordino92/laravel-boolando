@php
    $menuHeader = config('menues.menuHeader');
    $menuFontAweHeader = config('menues.menuFontAweHeader');
@endphp

<header>

    <div class="menu">
        <div class="row container">
            <div class="type">
                <ul>
                    @foreach ($menuHeader as $item)
                        <li>
                            <a href="{{ $item['href'] }}">{{ $item['text']}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>

                <img src="/img/boolean-logo.png" alt="logo">

            <div class="icons">
                <ul>
                    @foreach ($menuFontAweHeader as $item)
                        <li>
                            <a href="{{$item['href']}}"><i class="{{$item['font']}}"></i></a>
                        </li>
                    @endforeach

                </ul>

            </div>

        </div>

    </div>

</header>

