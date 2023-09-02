<?php
$kon = mysqli_connect("localhost", "root", "", "phpdasar");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .display{
  background-image: url('{{asset('poto/rawr.png')}}');
  background-size: cover;
  height: 100vh;
  
  
}
        #open {
            color: #2A8271;
            cursor: pointer;
            transition: all 0.4s;
        }

        #open:hover {
            opacity: .8;
            letter-spacing: 1px;
        }

        .model {
            width: 400px;
            height: 400px;
            background-color: var(--sidebar-color);
            border-radius: 10px;
        }

        .model button {
            cursor: pointer;
        }

        .model-container {
            display: flex;
          
            align-items: center;
            justify-content: center;
            min-width: 100vw;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, .3);
            text-align: center;
            transform: scale(1);


        }

        .model-container input {
            background-color: var(--sidebar-color);
            background-color: grey 0.3;
            border: 0;
            margin-top: 20px;
            padding-bottom: 40px;
        }

        .model-container button{
            margin:20px;
          
        }
    </style>
    @extends('layout.mainlayout')
    <link rel="stylesheet" href="{{asset('css/beli.css')}}">
    @section('title','Chekout | yasmavoca')

    @section('content')

    <div class="display">


        <div class="slider">
            <div class="sliderWrapper">
                <div class="sliderItem">

                    <img src="{{asset('poto/miki.png')}}" alt="" class="sliderImg">
                    <div class="title" style="font-size: 24px; font-weight:700; color: black;">Alpukat miki</div>
                    <div class="sliderprice">100.000/kg</div>
                    
                        <p style="width: 500px;">Alpukat Miki merupakan varietas alpukat unggulan Indonesia. Varietas
                            Alpukat yang satu ini dikembangkan oleh Pusat Kajian Buah-Buahan Tropika. Buah alpukat miki
                            dikenal memiliki tampilan yang imut ini memang memiliki citarasa yang istimewa.</p>
                        <i class='bx bxs-star' style="color:yellow"></i><i class='bx bxs-star'
                            style="color:yellow"></i><i class='bx bxs-star' style="color:yellow"></i><i
                            class='bx bxs-star' style="color:yellow"></i><i class='bx bxs-star-half'
                            style="color:yellow"></i>
                        <div class="container">
                            <button><a href="" id="open">Beli Disini</a></button>
                        </div>
                        <div class="model-container">
                            <div class="model">
                                <h3>Check out</h3>
                                <form action="prosesBeli_cekout" method="post">
                                    @csrf
                                    <input name="pesanan" type="number" placeholder="pesanan" required><br>
                                    <input name="alamat" type="text" placeholder="alamat" required><br>
                                    <input name="deskripsi" type="text" placeholder="deskripsi">
                                    <p style="margin-bottom:30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, quod?</p>
                                    <button>Beli</button>
                                    <button ><a href="/beli" style="color:#2A8271">cancel</a></button>
                                </form>
                            </div>
                        </div>

                </div>


            </div>


        </div>

    </div>




    <script src="beli.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#open').click(function () {
                $('.model-container').css('transform', 'scale(1)');
            });
        })
    </script>
</body>


