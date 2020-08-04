<!DOCTYPE html>
<html dir="ltr" lang="uz" class=" js no-touch csstransitions">

<head>
    @include('layouts.head')
</head>

<body style="background-color: #bebebe8f;">
    @include('layouts.mobile_menu')
    <div class="wrapper mm-page mm-slideout" id="mm-0">
        <div class="preloader" style="display: none;"></div>
        @include('layouts.logo')
        <!-- Inner Page Breadcrumb -->
        <section class="inner_page_breadcrumb">
            <!-- Main Header Nav -->
            @include('layouts.sign_up ')
            @include('layouts.menu')
        </section>
        <section class="blog_post_container mb-3 mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-9" style="background-color: #dadada;">
                        <div style="background:#ffffff;" class="main_blog_post_content">
                            <div class="mbp_thumb_post">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="details" style="padding:25px; width: 100%;">
                                            <img style="border-radius:50%;width:110px; height:110px;" src="http://127.0.0.1:8000/assets/images/team/6.png" class="mr-3 mx-auto d-block" alt="review1.png"><br>
                                            <h3 style="text-align:center;" class="">Alisher Ergashev, Sizning Ma'lumotlaringiz</h3>
                                            <form>
                                                <div style="border-radius: .25rem;" class="custom-file">
                                                    <input type="file" value="" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Rasm Tanlang</label>
                                                </div><br><br>
                                            </form>
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="name"><i class="fa fa-address-card" aria-hidden="true"></i> Ism Va Familyangiz</label>
                                                            <input type="text" class="form-control" id="name" value="Alisher Ergashev" placeholder="Alisher Ergashev">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="viloyat"><i class="fa fa-map-marker" aria-hidden="true"></i> Qayerdansiz?</label>
                                                            <select id="viloyat" onchange="region()" class="form-control">
                                                                <option>Viloyat Tanlang</option>
                                                                <option value="Andijon">Andijon viloyati</option>
                                                                <option value="Buxoro">Buxoro viloyati</option>
                                                                <option value="Fargona">Fargʻona viloyati</option>
                                                                <option value="Xorazm">Xorazm viloyati</option>
                                                                <option value="Namangan">Namangan viloyati</option>
                                                                <option value="Navoiy">Navoiy viloyati</option>
                                                                <option value="Qashqadaryo">Qashqadaryo viloyati</option>
                                                                <option value="Qoraqalpogiston">Qoraqalpogʻiston Respublikasi</option>
                                                                <option value="Samarqand">Samarqand viloyati</option>
                                                                <option value="Sirdaryo">Sirdaryo viloyati</option>
                                                                <option value="Surxondaryo">Surxondaryo viloyati</option>
                                                                <option value="Toshkent">Toshkent viloyati</option>
                                                                <option value="capital">Toshkent Shahri</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tuman"><i class="fa fa-map-marker" aria-hidden="true"></i> Tumaningiz?</label>
                                                            <select class="form-control" id="tuman">
                                                            </select>
                                                        </div>

                                                        <div id="school" style="display:none;" class="form-group">
                                                            <label for="location"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Maktabingiz?</label>
                                                            <select class="form-control" id="carmodel">
                                                                <!-- <option>Boshqa</option>
                                                                <option>1-Maktab</option>
                                                                <option>2-Maktab</option> -->
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email"><i class="fa fa-at" aria-hidden="true"></i> Pochta Manzilingiz</label>
                                                            <input type="email" class="form-control" id="email" value="alisher2002@gmail.com" placeholder="alisher2002@gmail.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="date"><i class="fa fa-calendar" aria-hidden="true"></i> Tug'ilgan kun</label>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="date_birth">
                                                                        <option>kun</option>
                                                                        <option>1 </option>
                                                                        <option>2 </option>
                                                                        <option>3 </option>
                                                                        <option>4 </option>
                                                                        <option>5 </option>
                                                                        <option>6 </option>
                                                                        <option>7 </option>
                                                                        <option>8 </option>
                                                                        <option>9 </option>
                                                                        <option>10 </option>
                                                                        <option>11 </option>
                                                                        <option>12 </option>
                                                                        <option>13 </option>
                                                                        <option>14 </option>
                                                                        <option>15 </option>
                                                                        <option>16 </option>
                                                                        <option>17 </option>
                                                                        <option>18 </option>
                                                                        <option>19 </option>
                                                                        <option>20 </option>
                                                                        <option>21 </option>
                                                                        <option>22 </option>
                                                                        <option>23 </option>
                                                                        <option>24 </option>
                                                                        <option>25 </option>
                                                                        <option>26 </option>
                                                                        <option>27 </option>
                                                                        <option>28 </option>
                                                                        <option>29 </option>
                                                                        <option>30 </option>
                                                                        <option>31 </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 ">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="date_birth">
                                                                        <option>Oy</option>
                                                                        <option>Yanvar</option>
                                                                        <option>Febral</option>
                                                                        <option>Mart</option>
                                                                        <option>Aprel</option>
                                                                        <option>May</option>
                                                                        <option>Iyun</option>
                                                                        <option>Iyul</option>
                                                                        <option>August</option>
                                                                        <option>Sentyabr</option>
                                                                        <option>Oktyabr</option>
                                                                        <option>Noyabr</option>
                                                                        <option>Dekabr</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 ">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="date_birth">

                                                                        <option>1970</option>
                                                                        <option>1971</option>
                                                                        <option>1972</option>
                                                                        <option>1973</option>
                                                                        <option>1974</option>
                                                                        <option>1975</option>
                                                                        <option>1976</option>
                                                                        <option>1977</option>
                                                                        <option>1978</option>
                                                                        <option>1979</option>
                                                                        <option>1980</option>
                                                                        <option>1981</option>
                                                                        <option>1982</option>
                                                                        <option>1983</option>
                                                                        <option>1984</option>
                                                                        <option>1985</option>
                                                                        <option>1986</option>
                                                                        <option>1987</option>
                                                                        <option>1988</option>
                                                                        <option>1989</option>
                                                                        <option>1990</option>
                                                                        <option>1991</option>
                                                                        <option>1992</option>
                                                                        <option>1993</option>
                                                                        <option>1994</option>
                                                                        <option>1995</option>
                                                                        <option>1996</option>
                                                                        <option>1997</option>
                                                                        <option>1998</option>
                                                                        <option>1999</option>
                                                                        <option>2000</option>
                                                                        <option>2001</option>
                                                                        <option>2002</option>
                                                                        <option>2003</option>
                                                                        <option>2004</option>
                                                                        <option>2005</option>
                                                                        <option>2006</option>
                                                                        <option>2007</option>
                                                                        <option>2008</option>
                                                                        <option>2009</option>
                                                                        <option>2010</option>
                                                                        <option>2011</option>
                                                                        <option>2012</option>
                                                                        <option>2013</option>
                                                                        <option>2014</option>
                                                                        <option>2015</option>
                                                                        <option>2016</option>
                                                                        <option>2017</option>
                                                                        <option selected>Yil</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="gender">Jinsingiz</label><br>
                                                        <div id="gender" class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1"><i class="fa fa-male" aria-hidden="true"></i> Erkak</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2"><i class="fa fa-female" aria-hidden="true"></i> Ayol</label>
                                                        </div><br><br>
                                                        <div class="form-group">
                                                            <label style="margin-bottom:12px;" for="car"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Kasbingiz?</label>
                                                            <select onchange="ChangeCarList()" class="form-control" id="car">
                                                                <option>Boshqa kasb</option>
                                                                <option value="pupil">Maktab O'quvchi</option>
                                                                <option value="teacher">Maktab O'qituvchisi</option>
                                                                <option>Abiturent</option>
                                                                <option>Talaba</option>
                                                            </select>
                                                        </div>
                                                        <div style="display:none;" id="class" class="form-group">
                                                            <label for="location"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Sinfingiz?</label>
                                                            <select class="form-control " id="location">
                                                                <option class="dropdown-item ">Boshqa</option>
                                                                <option>4-sinf</option>
                                                                <option>5-sinf</option>
                                                                <option>6-sinf</option>
                                                                <option>7-sinf</option>
                                                                <option>8-sinf</option>
                                                                <option>9-sinf</option>
                                                                <option>10-sinf</option>
                                                                <option>11-sinf</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tel"><i class="fa fa-phone-square" aria-hidden="true"></i> Telefon raqamingiz</label>
                                                            <input type="tel" class="form-control" id="email" value="991234567" placeholder="991234567">
                                                        </div>
                                                        <button type="submit" style="border-radius: 3px;" class="btn btn-log btn-block  btn-success">Saqlash</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 pl10 pr10">
                        <div class="main_blog_post_widget_list">
                            <div class="blog_category_widget">
                                <ul class="list-group">
                                    <a href="http://127.0.0.1:8000/blog/category/Universitetlar">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <i class="fa fa-home" aria-hidden="true"> Bosh saxifa</i></span>
                                        </li>
                                    </a>
                                    <a href="http://127.0.0.1:8000/blog/category/Universitetlar">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"> Mening kurslarim</i></span>
                                        </li>
                                    </a>
                                    <a href="http://127.0.0.1:8000/blog/category/Universitetlar">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <i class="fa fa-question-circle-o" aria-hidden="true"> Mening quizlarim</i></span>
                                        </li>
                                    </a>
                                    <a href="http://127.0.0.1:8000/blog/category/Universitetlar">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <i class="fa fa-cog" aria-hidden="true"> Sozlamalar</i></span>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>


    @include('layouts.footer')

    
    <script>
          var carsAndModels = {};
        carsAndModels['pupil'] = ['1-Maktab', '2-Maktab', '3-Maktab'];
        carsAndModels['teacher'] = ['1-Maktab', '2-Maktab', '3-Maktab'];

        function ChangeCarList() {
            var carList = document.getElementById("car");
            var modelList = document.getElementById("carmodel");
            var selCar = carList.options[carList.selectedIndex].value;
            while (modelList.options.length) {
                modelList.remove(0);
            }
            var cars = carsAndModels[selCar];
            if (cars) {

                var i;
                for (i = 0; i < cars.length; i++) {
                    var car = new Option(cars[i], i);
                    modelList.options.add(car);
                    document.getElementById("school").setAttribute("style", "display:block;");
                    document.getElementById("class").setAttribute("style", "display:block;");
                }
            } else {
                document.getElementById("school").setAttribute("style", "display:none;");
                document.getElementById("class").setAttribute("style", "display:none;");
            }
        }
        var regions = {};
        regions['Andijon'] = [
            'Qaysi tumandansiz',
            'Andijon tumani',
            'Asaka tumani',
            'Baliqchi tumani',
            'Boʻz tumani',
            'Buloqboshi tumani',
            'Izboskan tumani',
            'Jalaquduq tumani',
            'Xoʻjaobod tumani',
            'Qo\'g\'ontepa tumani',
            'Marhamat tumani',
            'Oltinkoʻl tumani',
            'Paxtaobod tumani',
            'Shahrixon tumani',
            'Ulugʻnor tumani'
        ];
        regions['Buxoro'] = [
            'Qaysi tumandansiz',
            'Olot tumani',
            'Buxoro tumani',
            'Gʻijduvon tumani',
            'Jondor tumani',
            'Kogon tumani',
            'Qorakoʻl tumani',
            'Qorovulbozor tumani',
            'Peshku tumani',
            'Romitan tumani',
            'Shofirkon tumani',
            'Vobkent tumani'
        ];
        regions['Fargona'] = [
            'Qaysi tumandansiz',
            'Oltiariq tumani ',
            'Bagʻdod tumani',
            'Beshariq tumani',
            'Buvayda tumani',
            'Dangʻara tumani',
            'Fargʻona tumani',
            'Furqat tumani ',
            'Qoʻshtepa tumani',
            'Quva tumani ',
            'Rishton tumani',
            'Soʻx tumani',
            'Toshloq tumani',
            'Uchkoʻprik tumani',
            'Oʻzbekiston tumani',
            'Yozyovon tumani'
        ];
        regions['Xorazm'] = [
            'Qaysi tumandansiz',
            'Bogʻot tumani',
            'Gurlan tumani',
            'Xonqa tumani',
            'Hazorasp tumani',
            'Xiva tumani',
            'Qoʻshkoʻpir tumani',
            'Shovot tumani',
            'Urganch tumani',
            'Yangiariq tumani',
            'Yangibozor tumani'
        ];
        regions['Namangan'] = [
            'Qaysi tumandansiz',
            'Chortoq tumani',
            'Chust tumani',
            'Kosonsoy tumani',
            'Mingbuloq tumani',
            'Namangan tumani',
            'Norin tumani ',
            'Pop tumani',
            'Toʻraqoʻrgʻon tumani',
            'Uchqoʻrgʻon tumani',
            'Uychi tumani',
            'Yangiqoʻrgʻon tumani'
        ];
        regions['Navoiy'] = [
            'Qaysi tumandansiz',
            'Konimex tumani',
            'Karmana tumani',
            'Qiziltepa tumani',
            'Xatirchi tumani ',
            'Navbahor tumani ',
            'Nurota tumani ',
            'Tomdi tumani',
            'Uchquduq tumani'


        ];
        regions['Qashqadaryo'] = [
            'Qaysi tumandansiz',
            'Chiroqchi tumani',
            'Dehqonobod tumani',
            'Gʻuzor tumani',
            'Qamashi tumani',
            'Qarshi tumani',
            'Koson tumani',
            'Kasbi tumani',
            'Kitob tumani',
            'Mirishkor tumani',
            'Muborak tumani',
            'Nishon tumani',
            'Shahrisabz tumani',
            'Yakkabogʻ tumani'

        ];
        regions['Qoraqalpogiston'] = [
            'Qaysi tumandansiz',
            'Amudaryo tumani',
            'Beruniy tumani',
            'Chimboy tumani',
            'Ellikqalʼa tumani',
            'Kegeyli tumani',
            'Moʻynoq tumani',
            'Nukus tumani',
            'Qanlikoʻl tumani',
            'Qoʻngʻirot tumani',
            'Qoraoʻzak tumani',
            'Shumanay tumani',
            'Taxtakoʻpir tumani',
            'Toʻrtkoʻl tumani',
            'Xoʻjayli tumani'
        ];

        regions['Samarqand'] = [
            'Qaysi tumandansiz',
            'Bulungʻur tumani',
            'Ishtixon tumani',
            'Jomboy tumani',
            'Kattaqoʻrgʻon tumani ',
            'Qoʻshrabot tumani ',
            'Narpay tumani',
            'Nurobod tumani  ',
            'Oqdaryo tumani  ',
            'Paxtachi tumani ',
            'Payariq tumani',
            'Pastdargʻom tumani',
            'Samarqand tumani',
            'Toyloq tumani',
            'Urgut tumani'



        ];
        regions['Sirdaryo'] = [
            'Qaysi tumandansiz',
            'Oqoltin tumani',
            'Boyovut tumani',
            'Guliston tumani',
            'Xovos tumani',
            'Mirzaobod tumani',
            'Sayxunobod tumani',
            'Sardoba tumani',
            'Sirdaryo tumani ',


        ];
        regions['Surxondaryo'] = [
            'Qaysi tumandansiz',
            'Angor tumani',
            'Boysun tumani',
            'Denov tumani',
            'Jarqoʻrgʻon tumani',
            'Qiziriq tumani',
            'Qumqoʻrgʻon tumani',
            'Muzrabot tumani',
            'Oltinsoy tumani',
            'Sariosiyo tumani',
            'Sherobod tumani',
            'Shoʻrchi tumani',
            'Termiz tumani',
            'Uzun tumani '

        ];
        regions['Toshkent'] = [
            'Qaysi tumandansiz',
            'Bekobod tumani',
            'Boʻstonliq tumani',
            'Boʻka tumani',
            'Chinoz tumani',
            'Qibray tumani',
            'Ohangaron tumani',
            'Oqqoʻrgʻon tumani',
            'Parkent tumani',
            'Piskent tumani',
            'Quyi chirchiq tumani',
            'Oʻrta Chirchiq tumani',
            'Yangiyoʻl tumani',
            'Yuqori Chirchiq tumani',
            'Zangiota tumani'

        ];
        regions['capital'] = [
            'Qaysi tumandansiz',
            ' Bektemir tumani',
            'Chilonzor tumani',
            ' Hamza tumani',
            ' Mirobod tumani',
            ' Mirzo Ulugʻbek tumani ',
            ' Sergeli tumani',
            ' Shayxontohur tumani',
            ' Olmazor tumani',
            ' Uchtepa tumani',
            ' Yakkasaroy tumani',
            'Yunusobod tumani'
        ];

        function region() {
            var region = document.getElementById("viloyat");
            var district = document.getElementById("tuman");
            var item = region.options[region.selectedIndex].value;
            while (district.options.length) {
                district.remove(0);
            }
            var single = regions[item];
            if (single) {
                var i;
                for (i = 0; i < single.length; i++) {
                    var one = new Option(single[i], i);
                    district.options.add(one);
                }
            }
        }
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>


</body>

</html>