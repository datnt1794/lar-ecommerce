<div class="left main-sidebar">
 <div class="sidebar-inner leftscroll">
    <div id="sidebar-menu">
        <ul>
            @if(config_menu_merge())
                @foreach(config_menu_merge() as $menu)
                <?php $group = (count($menu['group']) > 0) ? TRUE : FALSE;?>
                    @if($group)
                        @if(!empty($menu['middleware']))
                            @permission($menu['middleware'])
                                <li class="submenu">
                                   <a href="#" class="@yield($menu['active'])"><i class="fa fa-fw {{ $menu['icon'] ?? '' }}"></i> <span> {{ $menu['name'] ?? '' }} </span> <span class="menu-arrow"></span></a>
                                   <ul class="list-unstyled">
                                      @foreach($menu['group'] as $k => $children)
                                        @if(!empty($children['middleware']))
                                            @permission($children['middleware'])
                                                <li><a href="{{ $children['route'] ? $children['route'] : '#' }}">{{ $children['name'] }}</a></li>
                                            @endpermission   
                                        @else
                                            <li><a href="{{ $children['route'] ? $children['route'] : '#' }}">{{ $children['name'] }}</a></li>
                                        @endif
                                      @endforeach
                                   </ul>
                                </li>
                            @endpermission
                        @else
                            <li class="submenu">
                               <a href="#" class=" @yield($menu['active'])"><i class="fa fa-fw {{ $menu['icon'] ?? '' }}"></i> <span> {{ $menu['name'] ?? '' }} </span> <span class="menu-arrow"></span></a>
                               <ul class="list-unstyled">
                                  @foreach($menu['group'] as $k => $children)
                                      <li class="@yield($children['active'])">
                                        <a href="{{ $children['route'] ? $children['route'] : '#' }}">{{ $children['name'] }}</a>
                                      </li>
                                  @endforeach
                               </ul>
                            </li>
                        @endif
                    @else
                        @if(!empty($menu['middleware']))
                            @permission($menu['middleware'])
                                <li class="@yield($menu['active'])">
                                   <a href="{{ $menu['route'] ? $menu['route'] : '#' }}"><i class="fa fa-fw {{ $menu['icon'] ?? '' }}"></i> <span> {{ $menu['name'] ?? '' }} </span></a>
                                </li>
                            @endpermission
                        @else
                            <li class="@yield($menu['active'])">
                               <li class="@yield($menu['active'])">
                                   <a href="{{ $menu['route'] ? $menu['route'] : '#' }}"><i class="fa fa-fw {{ $menu['icon'] ?? '' }}"></i> <span> {{ $menu['name'] ?? '' }} </span></a>
                                </li>
                            </li>
                        @endif
                    @endif
                @endforeach
            @endif
         </ul>
       <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
 </div>
</div>