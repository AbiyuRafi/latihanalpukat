

@extends('layout.mainlayout')


@section('title',' Dasboard | Yasmavoca')
@section('content')


    <section class="home" style="left: 0;">
<style>
   
   body{
    overflow-x: hidden;
   }
    /* CSS */
    .button-33 {
      background-color: #c2fbd7;
      border-radius: 100px;
      box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
      color: green;
      cursor: pointer;
      
      font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
      padding: 20px 20px;
      text-align: center;
      text-decoration: none;
      transition: all 250ms;
      border: 0;
    
      font-size: 16px;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }
    
    .button-33:hover {
      box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
      transform: scale(1.2) rotate(-2deg);
    }</style>
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <div class="parallax" style=" z-index: 88;  height:100vh;  
    position: relative; align-items: center; display:flex; ">

            <img style="position: absolute; width:100%; height:100%;" src="{{ asset('poto/hill1.png') }}" alt="" class="hill1">
            <img style="position: absolute; width:100%; height:100%;" src="{{ asset('poto/hill2.png') }}" alt="" class="hill2">
            <img style="position: absolute; width:100%; height:100%;" src="{{ asset('poto/hill3.png') }}" alt="" class="hill3">
            <img style="position: absolute; width:100%; height:100%;" src="{{ asset('poto/hill4.png') }}" alt="" class="hill4">

            <button style="z-index:90;  margin-left:45%" class="button-33"><a style=" text-decoration:none;   color: green;
                font-weight: bold; font-size: 20px " href="#p">Tentang Kami</a></button>




        </div>
    </section>
    <section class="bawah" style="width:1520px;height:1450px ; z-index: 9;  background-color:#2A8271">
        <div class="p" style="margin:0px 250px">
            
            <h1 id="p" style="margin-left:400px; padding-top:130px; color:#fff"> Tentang Perushaan kami</h1>

            <img style="position: absolute; width:500px; height:500px; margin-left:760px;"
                src="{{ asset('poto/pngtree-a-slice-of-avocado-fruit-with-top-view-png-image_5722064-removebg-preview.png') }}"
                alt="" class="hill4">




            <p  style="color:white; margin-top:20px;">r, accusantium sed perspiciatis aliquam voluptas veniam sunt
                ea sint obcaecati amet at! Velit ut fuga delectus soluta consequatur aperiam aliquid ipsa qui sit
                accusamus molestias quia eum quasi, vitae officia non error nulla dicta dolorem accusantium repudiandae
                facilis eligendi. Facilis consectetur delectus quaerat alias nam. Veniam, eaque at voluptatum blanditiis
                atque explicabo nesciunt quas exercitationem vero cumque officia animi impedit ea mollitia, sint
                perspiciatis unde illum reiciendis, ullam numquam ab rerum quod. Assumenda perferendis voluptas odio
                possimus, officiis nam voluptates tempore cupiditate enim fugiat aspernatur quaerat nobis autem placeat
                eum velit excepturi minima. Sint eligendi omnis distinctio quasi animi placeat aspernatur, deserunt id
                illo fugit. Omnis doloremque veritatis error doloribus libero et cumque porro. Quisquam, tempore nemo.
                Neque corporis, sit blanditiis dolore eaque asperiores. Maiores exercitationem ducimus adipisci tenetur
                et veritatis beatae deleniti sint minus sunt? Consequuntur molestias tempore, at sapiente nobis atque
                nulla eveniet placeat harum, illum totam labore esse eaque dicta expedita excepturi minus? Nam, tempore!
                Ducimus eos sequi accusamus assumenda nam iure quo recusandae corrupti, autem laborum id eveniet. Harum
                cumque dolorem minus dolorum similique, veritatis non perferendis maiores voluptas in consectetur
                tempore quo optio repellendus! Eius, veritatis, tempora ducimus quidem cum molestiae iusto labore
                voluptate nesciunt corporis ipsam dolores fugit quas suscipit impedit vel repellat tenetur? Iusto
                provident eveniet ex, illum error tempora dolorem dignissimos reprehenderit repellendus accusamus, sequi
                ipsum atque perspiciatis laboriosam velit. Dicta aliquam sequi minima obcaecati vero a sed ut?
                Reprehenderit beatae eos unde. Provident odio quis laborum quo, animi temporibus nulla nihil veritatis
                minima dolore, autem, hic quasi at deserunt enim commodi officia ullam repellendus nemo harum a. Velit,
                delectus qui! Quam, animi libero. Qui eaque aut nisi sed nihil blanditiis sit doloremque. Dolorum
                accusantium animi alias numquam ex optio nostrum eum totam hic nisi provident dolorem a, perspiciatis
                voluptates fugiat quod similique expedita magni ab repellat! Dolores nemo sint modi laudantium nam, odit
                necessitatibus numquam in provident itaque molestiae vitae sapiente error impedit quidem culpa. Eveniet
                voluptas ratione id natus aspernatur non, rerum voluptates consectetur exercitationem repellat! Porro
                perferendis, tempora fugiat magnam libero adipisci ut deserunt eaque officiis nostrum dolor quam
                voluptate debitis, sunt praesentium numquam accusamus nisi, ducimus labore distinctio suscipit.
                Reiciendis!</p>
        </div>
        <script src="{{asset('js/script.js')}}"></script>

    </section>
    @endsection
    
