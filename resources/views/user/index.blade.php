@extends('layouts.master')
@section('seo')
<title>Richer.uz | Profil</title>
<meta property="og:title" content="Profil">
<meta property="og:url" content="{{request()->url()}}">
<meta property="og:image" content="">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:description" content="Yangiliklar, blogglar yoki ta'lim haqida so'ngi xabarlar bilan tanishing">
<meta name="description" content="Yangiliklar, blogglar yoki ta'lim haqida so'ngi xabarlar bilan tanishing">
<meta name="keywords" content="Universitetlar, Texnologiya, Onlayn Ta'lim, Onlayn Kurslar, Ingliz tili, Matematika, Tarix, Ona tili, Adabiyot, Video Kurslar">
<meta name="robots" content="index, follow">
<!--- this tags for ceo  end   -->
@endsection
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
                                                    <select name="state" id="viloyat" onchange="region()" class="form-control">
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
                                                    <select name="district" class="form-control" id="tuman">
                                                    </select>
                                                </div>
                                                <label style="display: none;" id="school_number_label" for="location"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Maktabingiz?</label>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div style="display: none;" id="school_number" class="form-group">
                                                            <input name="number" type="number" class="form-control" id="name" value="" placeholder="#">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="school" style="display:none;" class="form-group">
                                                            <select name="school" class="form-control" id="carmodel">
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
                                                            <select name="day" class="form-control" id="date_birth">
                                                                <option value="0">kun</option>
                                                                <option value="1">1 </option>
                                                                <option value="2">2 </option>
                                                                <option value="3">3 </option>
                                                                <option value="4">4 </option>
                                                                <option value="5">5 </option>
                                                                <option value="6">6 </option>
                                                                <option value="7">7 </option>
                                                                <option value="8">8 </option>
                                                                <option value="9">9 </option>
                                                                <option value="10">10 </option>
                                                                <option value="11">11 </option>
                                                                <option value="12">12 </option>
                                                                <option value="13">13 </option>
                                                                <option value="14">14 </option>
                                                                <option value="15">15 </option>
                                                                <option value="16">16 </option>
                                                                <option value="17">17 </option>
                                                                <option value="18">18 </option>
                                                                <option value="19">19 </option>
                                                                <option value="20">20 </option>
                                                                <option value="21">21 </option>
                                                                <option value="22">22 </option>
                                                                <option value="23">23 </option>
                                                                <option value="24">24 </option>
                                                                <option value="25">25 </option>
                                                                <option value="26">26 </option>
                                                                <option value="27">27 </option>
                                                                <option value="28">28 </option>
                                                                <option value="29">29 </option>
                                                                <option value="30">30 </option>
                                                                <option value="31">31 </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 ">
                                                        <div class="form-group">
                                                            <select name="month" class="form-control" id="date_birth">
                                                                <option value="not selected">Oy</option>
                                                                <option value="january">Yanvar</option>
                                                                <option value="february">Febral</option>
                                                                <option value="march">Mart</option>
                                                                <option value="april">Aprel</option>
                                                                <option value="may">May</option>
                                                                <option value="june">Iyun</option>
                                                                <option value="july">Iyul</option>
                                                                <option value="august">August</option>
                                                                <option value="september">Sentyabr</option>
                                                                <option value="october">Oktyabr</option>
                                                                <option value="november">Noyabr</option>
                                                                <option value="december">Dekabr</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 ">
                                                        <div class="form-group">
                                                            <select name="year" class="form-control" id="date_birth">

                                                                <option value="1970">1970</option>
                                                                <option value="1971">1971</option>
                                                                <option value="1972">1972</option>
                                                                <option value="1973">1973</option>
                                                                <option value="1974">1974</option>
                                                                <option value="1975">1975</option>
                                                                <option value="1976">1976</option>
                                                                <option value="1977">1977</option>
                                                                <option value="1978">1978</option>
                                                                <option value="1979">1979</option>
                                                                <option value="1980">1980</option>
                                                                <option value="1981">1981</option>
                                                                <option value="1982">1982</option>
                                                                <option value="1983">1983</option>
                                                                <option value="1984">1984</option>
                                                                <option value="1985">1985</option>
                                                                <option value="1986">1986</option>
                                                                <option value="1987">1987</option>
                                                                <option value="1988">1988</option>
                                                                <option value="1989">1989</option>
                                                                <option value="1990">1990</option>
                                                                <option value="1991">1991</option>
                                                                <option value="1992">1992</option>
                                                                <option value="1993">1993</option>
                                                                <option value="1994">1994</option>
                                                                <option value="1995">1995</option>
                                                                <option value="1996">1996</option>
                                                                <option value="1997">1997</option>
                                                                <option value="1998">1998</option>
                                                                <option value="1999">1999</option>
                                                                <option value="2000">2000</option>
                                                                <option value="2001">2001</option>
                                                                <option value="2002">2002</option>
                                                                <option value="2003">2003</option>
                                                                <option value="2004">2004</option>
                                                                <option value="2005">2005</option>
                                                                <option value="2006">2006</option>
                                                                <option value="2007">2007</option>
                                                                <option value="2008">2008</option>
                                                                <option value="2009">2009</option>
                                                                <option value="2010">2010</option>
                                                                <option value="2011">2011</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option>Yil</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="gender">Jinsingiz</label><br>
                                                <div id="gender" class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender[]" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1"><i class="fa fa-male" aria-hidden="true"></i> Erkak</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender[]" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2"><i class="fa fa-female" aria-hidden="true"></i> Ayol</label>
                                                </div><br><br>
                                                <div class="form-group">
                                                    <label style="margin-bottom:12px;" for="car"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Kasbingiz?</label>
                                                    <select name="position" onchange="ChangeCarList()" class="form-control" id="car">
                                                        <option value="another">Boshqa kasb</option>
                                                        <option value="pupil">Maktab O'quvchi</option>
                                                        <option value="teacher">Maktab O'qituvchisi</option>
                                                        <option value="school_kid">Abiturent</option>
                                                        <option value="student">Talaba</option>
                                                    </select>
                                                </div>
                                                <div style="display:none;" id="class" class="form-group">
                                                    <label for="location"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Sinfingiz?</label>
                                                    <select name="class" class="form-control " id="location">
                                                        <option value="another" class="dropdown-item ">Boshqa</option>
                                                        <option value="4-class">4-sinf</option>
                                                        <option value="5-class">5-sinf</option>
                                                        <option value="6-class">6-sinf</option>
                                                        <option value="7-class">7-sinf</option>
                                                        <option value="8-class">8-sinf</option>
                                                        <option value="9-class">9-sinf</option>
                                                        <option value="10-class">10-sinf</option>
                                                        <option value="11-class">11-sinf</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tel"><i class="fa fa-phone-square" aria-hidden="true"></i> Telefon raqamingiz</label>
                                                    <input name="phone_number" type="tel" class="form-control" id="email" value="" placeholder="991234567">
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