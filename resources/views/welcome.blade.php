<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>
<body>
    @include('components.nav_bar')
    <div id='col-1'>
        <div id="col-1-col-2">
            <h1>Biryani Teste , better then the rest</h1>
            <h2>savor the Flavors of Authentic Biryani Dishes!</h2>

        </div>
        <div id="col-1-col-3">
            <p>Explore Our Menu</p>
        </div>
    </div>
    <div id="col-2">
        <div id="col-2-row-1">
            <div id="col-2-row-1-col-1">
                <h1>We provide the best food for you</h1>
            </div>
            <div id="col-2-row-1-col-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At atque, similique nostrum natus qui voluptatum iste illum sapiente eos quibusdam voluptate possimus minus sunt enim hic consequuntur mollitia tenetur quis?</p>
            </div>
            <div id="col-2-col-3">
                <div id="menu-button">
                    Menu
                </div>
                <div id="book-button">
                    Book a table
                </div>
            </div>
        </div>
        <div id="container">
            <div id="circle"></div>
            <div id="rectangle"></div>
        </div>
    </div>
   
    {/* our special dishes  */}

    <div id="col-3">
          <div id="col-3-col-1">
            <h1>Our Special Dishes</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos facere molestias quas fuga, quia </p>
            <BiryaniCart/>
          </div>
         
    </div>
</body>
</html>
