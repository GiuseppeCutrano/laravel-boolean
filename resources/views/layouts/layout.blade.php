<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="top_bar"></div>
    @section('nav_menu')
    
        
            <div class="container">
                <div class="row">
                  <div class="col-sm-6 header_left">
                    <img class="logo " src="https://www.boolean.careers/images/misc/logo.png" alt="">
                  </div>
                  <div class="col-sm-6 header_right">
                        <ul>
                            @foreach (config('navbar.link') as $links)
                                <li class={{ Route::currentRouteName() == $links['id'] ? 'active' : '' }}><a href="{{ route($links['id']) }}">{{ $links['name'] }}</a></li>

                            @endforeach
                            <li><a href=""><button class='boolean__btn'>Candidati ora</button></a></li>
                        </ul>
                  </div>
                  
                </div>
                @yield('Testo','Testo home')
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam sed, expedita aspernatur in quibusdam ullam nihil repudiandae. Quibusdam quas ducimus maiores laboriosam dolorum, quidem, ut accusantium deserunt nihil quaerat aspernatur.</p>
              </div>
        
        
    
    
</body>
</html>