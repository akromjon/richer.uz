 var carsAndModels = {};
        carsAndModels['pupil'] = ['Maktab', 'Maktab', 'Maktab'];
        carsAndModels['teacher'] = ['Maktab', 'Maktab', 'Maktab'];

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
                    document.getElementById("school_number_label").setAttribute("style", "display:block;");
                    document.getElementById("school_number").setAttribute("style", "display:block;");
                    document.getElementById("class").setAttribute("style", "display:block;");
                }
            } else {
                document.getElementById("school_number").setAttribute("style", "display:none;");
                document.getElementById("school_number_label").setAttribute("style", "display:none;");
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
       
