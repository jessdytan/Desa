<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BADAN PERMUSYAWARATAN DESA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap-grid.css") }}">
    <script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    
</head>
<body style="font-family: serif;">

    @include('navbar')<br><br><br>



    <div class="container py-5">
        <div class="row">
        <div class="col-8 ">
        
        <!-- VISI DAN MISI --> 

        <div class="d-grid gap-2" >
            <button  style="border-radius: 10px;box-shadow: 10px 1px 10px gray; background-color:#327a6d; color: white; font-size: 150%;" class="btn " type="button">
                <b>DATA PENDIDIKAN DALAM KK</b></button>
            </div><br>
        
            <!-- CONTAINER -->
            <div class="container-fluid p-5 my-5 border">

              <table class="table table-striped">
                <thead>
                  <th colspan="4" style="text-align: right;"> Jumlah </th>
                </thead>
                <thead>
                  <th>Kode</th>
                  <th>Kelompok</th>
                  <th>n</th>
                  <th>%</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>TIDAK/BELUM SEKOLAH</td>
                    <td>16</td>
                    <td>0,79%</td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>BELUM TAMAT SD/SEDERAJAT</td>
                    <td>1524</td>
                    <td>75,45%</td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>TAMAT SD/SEDERAJAT</td>
                    <td>2</td>
                    <td>0,10%</td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>SLTP/SEDERAJAT</td>
                    <td>197</td>
                    <td>9,75%</td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>SLTA/SEDERAJAT</td>
                    <td>199</td>
                    <td>9,85%</td>
                  </tr>
                  
                  <tr>
                    <td>6</td>
                    <td>DIPLOMA I/II</td>
                    <td>24</td>
                    <td>1,19%</td>
                  </tr>

                  <tr>
                    <td>7</td>
                    <td>AKADEMI/DIPLOMA III/S.MUDA</td>
                    <td>10</td>
                    <td>0,50%</td>
                  </tr>

                  <tr>
                    <td>8</td>
                    <td>DIPLOMA IV/STRATA I</td>
                    <td>47</td>
                    <td>2,33%</td>
                  </tr>

                  <tr>
                    <td>9</td>
                    <td>STRATA II</td>
                    <td>1</td>
                    <td>0,05%</td>
                  </tr>

                  <tr>
                    <td></td>
                    <td>JUMLAH</td>
                    <td>2020</td>
                    <td>100,00%</td>
                  </tr>

                  <tr>
                    <td></td>
                    <td>BELUM MENGISI</td>
                    <td>0</td>
                    <td>0,00%</td>
                  </tr>

                  <tr>
                    <td></td>
                    <td>TOTAL</td>
                    <td>2020</td>
                    <td>100,00%</td>
                  </tr>


                </tbody>
              </table>
            </div>


        
            
        
         
        
        
        
        
          </div><!--tag penutup col-8-->
    
          <div class="col-4">
            <div class="datetime">
            <div class="time"></div>
            <div class="date"></div>
            </div>
          
          
            <!---->
            </div> <!--tag penutup col-4-->
        
        </div> <!--tag penutup row-->
        </div> <!--tag penutup container-->

<script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/style.js') }}"></script>

</body>
</html>