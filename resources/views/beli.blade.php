

@extends('layout.mainlayout')


<style>
    #open{
  color:#2A8271;
  cursor: pointer;
  transition: all 0.4s;
}

#open:hover{
  opacity: .8;
  letter-spacing: 1px;
}
.model{
  width: 400px;
  height: 400px;
  background-color: white;
}

.model-container{
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 100vw;
  min-height: 100vh;
  position: fixed;
  top: 0;left: 0;
  background: rgba(0, 0, 0, .3);
  text-align: center;
  transform: scale(0);


}
body{
    overflow-y:hidden; 
}

.alert{
    background: greenyellow;
    padding: 10px;
    border-radius: 20px;
    border: 1px solid white;
    text-align: center;
    margin-top:3%;
}
.display{
  background-image: url('{{asset('poto/rawr.png')}}');
  background-size: cover;
  height: 100vh;
  
  
}
</style>
<link rel="stylesheet" href="{{asset('css/beli.css')}}">
@section('title','Beli | Yasmavoca')
@section('content')


    <div class="display">


        <div class="slider">
            <div class="sliderWrapper">
                <div class="sliderItem">
                       
                    @if (Session::has('status'))
                    <div class="alert" role="alert" >
                        {{Session::get('pesan')}}
                    </div>
                        
                    @endif
                    <img src="{{asset('poto/miki.png')}}" alt="" class="sliderImg">
                    <div class="title" style="font-size: 24px; font-weight:700; color: black;">Alpukat miki</div>
                    <div class="sliderprice">100.000/kg</div>
                    <form action="#">
                        <p style="width: 500px;">Alpukat Miki merupakan varietas alpukat unggulan Indonesia. Varietas
                            Alpukat yang satu ini dikembangkan oleh Pusat Kajian Buah-Buahan Tropika. Buah alpukat miki
                            dikenal memiliki tampilan yang imut ini memang memiliki citarasa yang istimewa.</p>
                        <i class='bx bxs-star' style="color:yellow"></i><i class='bx bxs-star'
                            style="color:yellow"></i><i class='bx bxs-star' style="color:yellow"></i><i
                            class='bx bxs-star' style="color:yellow"></i><i class='bx bxs-star-half'
                            style="color:yellow"></i>
                        <div class="container">
                            <button><a href="prosesBeli" id="open"><i class='bx bxs-cart-alt' style="padding-right:10px"></i>Beli Disini</a></button>
                        </div>


                </div>


            </div>


        </div>

    </div><br>




    <script src="{{asset('js/script.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#open').click(function () {
                $('.model-container').css('transform','scale(1)');
            });
        })
    </script>

</body>

@endsection