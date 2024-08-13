@php
$class = !isset($children)
? 'dropdown-menu header-nav header-nav-main nav nav-right nav-divided nav-size-large nav-spacing-xlarge nav-uppercase'
: 'sub-menu nav-dropdown nav-dropdown-bold';
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

            // With Children Attributes
            if(!$originalItem->children->isEmpty()) {
                $linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
                $caret = '<span class="caret"></span>';

                if(url($item->link()) == url()->current()){
                    $listItemClass = 'dropdown active';
                }else{
                    $listItemClass = 'dropdown';
                }
            }
        @endphp

        <li class="menu-item @if(!$originalItem->children->isEmpty()) menu-item-has-children has-dropdown @endif">
            <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes ?? '' !!}>
                {!! $icon !!}
                <span>{{ $item->title }}</span>
            </a>
            @if(!$originalItem->children->isEmpty())
                @include('header_menu', ['items' => $originalItem->children, 'children' => true])
            @endif
        </li>
    @endforeach
</ul>
<script type="text/javascript">
    var menuItems = document.querySelectorAll('.dropdown-menu .menu-item');
    menuItems.forEach(menu => {
        menu.addEventListener('mouseenter', function(event) {
            event.target.classList.add('active');
        })
        menu.addEventListener('mouseleave', function(event) {
            event.target.classList.remove('active');
        })
    })
</script>
