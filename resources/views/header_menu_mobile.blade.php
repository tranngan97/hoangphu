@php
$class = !isset($children)
? 'dropdown-menu-mobile'
: 'sub-menu-mobile';

@endphp
<ul class="{{$class}}">
    @foreach ($items as $item)
        @php
            $originalItem = $item;
            $listItemClass = null;
            $linkAttributes =  null;
            $styles = null;
            $icon = null;
            $caret = null;
        @endphp

        <li class="menu-item @if(!$originalItem->children->isEmpty()) menu-item-has-children has-dropdown @endif">
            @if(isset($children))<i style="color: white;" class="fa fa-caret-right"></i>@endif
            <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
                <span>{{ $item->title }}</span>
            </a>
            @if(!$originalItem->children->isEmpty())
                @include('header_menu_mobile', ['items' => $originalItem->children, 'children' => true])
            @endif
        </li>
    @endforeach
</ul>
