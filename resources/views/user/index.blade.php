@extends('layouts.master')
@section('content')
<section class="blog_post_container mb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9" style="background-color: #dadada;">
                <div style="background:#ffffff;" class="main_blog_post_content">
                    <div class="mbp_thumb_post">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="details" style="padding:25px; width: 100%;">
                                    <img style="border-radius:50%;width:110px; height:110px;" src="{{asset('assets/images/team/6.png')}}" class="mr-3 mx-auto d-block" alt="review1.png"><br>
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
                                                        <option selected>Viloyat Tanlang</option>
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
                                                <label style="display: none;" id="school_number_label" for="location"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Maktabingiz?</label>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div style="display: none;" id="school_number" class="form-group">
                                                            <input type="number" class="form-control" id="name" value="" placeholder="#">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="school" style="display:none;" class="form-group">
                                                            <select class="form-control" id="carmodel">
                                                            </select>
                                                        </div>
                                                    </div>
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
            @include('layouts.user_menu')
        </div>

    </div>
</section>
@endsection