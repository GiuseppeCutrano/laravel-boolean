<div class="top_bar"></div>
    
    
        
            <div class="container">
                <div class="row header">
                  <div class="col-sm-4 header_left">
                    <img class="logo " src="https://www.boolean.careers/images/misc/logo.png" alt="">
                  </div>
                  <div class="col-sm-8 header_right">
                        <ul>
                            @foreach (config('navbar.link') as $links)
                                <li class={{ Route::currentRouteName() == $links['id'] ? 'active' : '' }}><a href="{{ route($links['id']) }}">{{ $links['name'] }}</a></li>

                            @endforeach
                            <li><a href=""><button class='boolean__btn'>Candidati ora</button></a></li>
                        </ul>
                  </div>
                  
                </div>