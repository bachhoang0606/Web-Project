<!DOCTYPE html>
<html lang="vn">
<head>
    <title>Sign up</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        div {
            margin:10px;
        }
        input[type="text"] , input[type="password"] {
            width:92%;
            height:30px;
            border-radius:5px;
            border-width:1px;
            padding-left: 12px;
        }

        input[type="radio"]{
            margin:0;
        }
        a {
          text-decoration: none;  
        }
        a:hover {
            text-decoration: underline;  
        }
        select {
            width:115px;
            height:30px;
            border-radius: 5px;
        }
        .sex-option {
            border-style: groove;
            border-radius: 5px;
            height:30px;
            margin:5px;
        }
        .lang a, .linkref a{
            margin:0;
            margin-top:5px;
            margin-bottom:5px;
            padding-right:10px;
            display:inline-block;
        }
        .ancho-no-underline:hover {
            text-decoration: none;
        }
        i {
            font-size: 12px;
            position: relative;
        }

        #birthday-help, #sex-help {
            display:none;
            width:300px;
            height:100px;
            margin:0;
            background-color: white;
            box-shadow: 0px 0px 5px gray;
            position: absolute;
            border-radius: 5px;  
        }
        .text-arley {
            margin: 10px;
            font-weight: 400;
        }
        #sex label, #sex input{
            margin-top:auto;
            margin-bottom:auto;
        }
        #sex input{
            margin-right:5px;
        }
        #sex label{
            margin-left:5px;
        }
        #sex div {
            display: flex;
        }
        #confirm-email, #confirm-sex{
            display: none;
        }
        .text-prosess{
            border-style: solid;
            border-color: red;
        }
        ul {
            font-size:14px;
            padding-left:0px;
            list-style-type:none;
            padding-top:8px;
            margin:0;
        }
        li {
            display: inline;
        }
        #lang-add {
            padding:0 10px;
            border-radius:3px;
            border: 1px inset #ccd0d5;;
            background-color: #f5f6f7;
        }
        #lang-add:hover {
            background-color: rgb(187 190 195);
        }
        .recomand-lang {
            margin:0;
            padding-left:10px;
        }
        .recomand-lang a{
            width:97px;
            margin-top: 5px;
            display: inline-block;
        }
        #close-show-more-lang {
            margin:10px 10px; 
            height:30px;
            border-radius:5px;
            border:2px;
            background-color:#7878e9;
        }
        #close-show-more-lang:hover {
            background-color:#5f5ff0;
        }
    </style>
</head>
<body style="background-color:rgb(240, 240, 240);margin:0;position:relative;">
<div style="width:auto;height:auto;">
    <h1 style="color:blue;text-align:center;font-size:60px;margin:0;padding-top:40px;padding-bottom:40px;"><span>facebook</span></h1>
    <div style="width:432px;text-align:center;border:outset;margin:auto;margin-bottom:100px;background-color:white;border-radius:10px;">
        <div style="margin:0;">
            <h2 style="margin:0;">T???o t??i kho???n m???i</h2>
            <h3 style="margin:0;font-weight:100;">Nhanh ch??ng v?? d??? d??ng.</h3>
            
            <form action="#" method="get">
                <hr>
                <div>
                    <input type="text" class="text-prosess" placeholder="H???" name="first name" style="width:180px;">
                    <input type="text" class="text-prosess" placeholder="T??n" name="last name" style="width:180px;">
                </div>
                <div>
                    <input type="text" class="text-prosess" placeholder="email or phone" name="email or phone" id="email">
                </div>
                <div id="confirm-email">
                    <input type="text" class="text-prosess" placeholder="x??c nh???n email ho???c ??i???n tho???i" name="confirm email or phone">
                </div>
                <div>
                    <input type="password" class="text-prosess" placeholder="m???t kh???u" name="password">
                </div>
                <div style="text-align:left;">
                    <label for="birthday" style="margin-left:3%;"> Ng??y sinh 
                        <i class="fa fa-question-circle" aria-hidden="true" title="Nh???p chu???t ????? bi???t th??m th??ng tin" id="birthday">
                            <div id="birthday-help" style="width:300px;height:100px;top:0px;left:-330px;">
                                <p class="text-arley"><b>Cung c???p sinh nh???t c???a b???n</b> gi??p ?????m b???o b???n c?? ???????c tr???i nghi???m Facebook 
                                    ph?? h???p v???i ????? tu???i c???a m??nh. N???u b???n mu???n thay ?????i ng?????i nh??n th???y th??ng tin n??y, 
                                    h??y ??i t???i ph???n Gi???i thi???u tr??n trang c?? nh??n c???a b???n. ????? bi???t th??m chi ti???t, 
                                    vui l??ng truy c???p v??o <a href="#">Ch??nh s??ch quy???n ri??ng t??</a> c???a ch??ng t??i.
                                </p>
                            </div>
                        </i>
                    </label>
                </div>
                <div id="birthday" style="text-align:left;margin-left:3%;display:flex;">
                    <div>
                        <select name="day">
                            <?php 
                                for ($x=1; $x<32; $x++) {
                                    echo "<option value=$x> $x </option>" ;
                                }
                            ?>
                        </select>
                    </div>
                    <div>
                        <select name="month">
                            <?php 
                                for ($x=1; $x<=12; $x++) {
                                    echo "<option value=$x> Th??ng $x </option>" ;
                                }
                            ?>
                        </select>
                    </div>
                    <div>
                        <select name="year">
                            <?php 
                                $current_year = date("Y");
                                $last_year = $current_year - 117;
                                for ($x=$current_year; $x>=$last_year; $x--) {
                                    echo "<option value=$x> $x </option>" ;
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div style="text-align:left;">
                    <label for="sex" style="margin-left:3%;">G???i t??nh
                        <i class="fa fa-question-circle" aria-hidden="true" title="Nh???p chu???t ????? bi???t th??m th??ng tin" id="sex">
                            <div id="sex-help" style="width:300px;height:60px;top:0px;left:-330px;display:none;">
                                <p class="text-arley">V??? sau, b???n c?? th??? thay ?????i nh???ng ai nh??n th???y gi???i t??nh 
                                c???a m??nh tr??n trang c?? nh??n. Ch???n T??y ch???nh n???u b???n thu???c gi???i t??nh kh??c ho???c 
                                kh??ng mu???n ti???t l???.
                                </p>
                            </div>
                        </i>
                    </label>
                </div>
                
                <div id="sex" style="text-align:left;margin-left:3%;display:flex;">
                    <div class="sex-option" style="width:104px;">
                        <label for="male" style="width:81px;"> N??? </label>
                        <input type="radio" value="male" name="sex" id="male">
                    </div>
                    <div class="sex-option" style="width:115px;">
                        <label for="female" style="width:92px;"> Nam </label>
                        <input type="radio" value="female" name="sex" id="female">
                    </div>
                    <div class="sex-option" style="width:139px;">
                        <label for="none" style="width:116px;"> T??y ch???nh </label>
                        <input type="radio" value="none" name="sex" id="none">
                    </div>
                </div>
                <div id="confirm-sex" style="margin:0;">
                    <div>
                        <select name="danh-xung" id="" style="width:398px;height:30px;">
                            <option disabled >Ch???n danh x??ng</option>
                            <option value="anh-ay">Anh ???y: "Ch??c anh ???y sinh nh???t vui v???!"</option>
                            <option value="co-ay">C?? ???y: "Ch??c c?? ???y sinh nh???t vui v???!"</option>
                            <option value="ho">H???: "Ch??c h??? sinh nh???t vui v???!"</option>
                        </select>
                    </div>
                    <div style="margin-left:20px;">
                        <p style="font-weight:100;font-size:13px;text-align:left;">Danh x??ng c???a b???n hi???n th??? v???i t???t c??? m???i ng?????i.</p>
                    </div>
                    <div>
                        <input type="text" placeholder="Gi???i t??nh ( Kh??ng b??t bu???c )" name="confirm email or phone" style="border-color:black;">
                    </div>
                </div>
                <div style="text-align:left;margin-left:4%;font-size:12px;font-wreight:100;">
                    <p>Ng?????i d??ng d???ch v??? c???a ch??ng t??i c?? th??? ???? t???i th??ng tin li??n h??? c???a b???n l??n Facebook. <a href="#">T??m hi???u th??m.</a></p>
                    <p>B???ng c??ch nh???p v??o ????ng k??, b???n ?????ng ?? v???i <a href="#">??i???u kho???n</a>, <a href="#">Ch??nh s??ch quy???n ri??ng t??</a> v?? <a href="#">Ch??nh s??ch cookie</a> c???a ch??ng t??i. 
                        B???n c?? th??? nh???n ???????c th??ng b??o c???a ch??ng t??i qua SMS v?? h???y nh???n b???t k??? l??c n??o.</p>
                </div>
                <div>
                    <input type="submit" value="????ng k??" style="background-color:MediumSeaGreen;color:white;width:150px;border-radius:5px;border:none;height:30px;cursor:pointer;">
                </div>
                <div>
                    <a href="#" class="ancho-no-underline">B???n ???? c?? t??i kho???n ???</a>
                </div>
            </form>
        </div>
    </div>
</div>
<div style="background-color:white;width:100%;padding-top:30px;margin:0;">
    <div style="width:980px;margin:auto;">
        <div class="lang" style="margin:0;">
            <ul>
                <li><a style="color:currentColor;cursor:text;opacity:0.5;text-decoration:none;"> Ti???ng vi???t </a></li>
                <li><a href="#"> English (UK) </a></li>
                <li><a href="#"> ??????(??????) </a></li>
                <li><a href="#"> ????????? </a></li>
                <li><a href="#"> ????????? </a></li>
                <li><a href="#"> Fran??ais (France) </a></li>
                <li><a href="#"> ????????????????????? </a></li>
                <li><a href="#"> Espa??ol </a></li>
                <li><a href="#"> Portugu??s (Brasil) </a></li>
                <li><a href="#"> Deutsch </a></li>
                <li><a href="#"> Italiano </a></li>
                <li style="">
                    <button id="lang-add" onclick="show_lang_option()">
                        <i class="fa fa-plus" aria-hidden="true" style="color:black;"></i> 
                    </button>
                </li>
            </ul>
        </div>
        <hr>
        <div class="linkref" style="margin:0;">
            <ul style="display:block;">
                <li><a href="#"> ????ng k?? </a></li>
                <li><a href="#"> ????ng nh???p </a></li>
                <li><a href="#"> Messenger </a></li>
                <li><a href="#"> Facebook Lite </a></li>
                <li><a href="#"> ?????a ??i???m </a></li>
                <li><a href="#"> Tr?? ch??i </a></li>
                <li><a href="#"> Marketplace </a></li>
                <li><a href="#"> Meta Pay </a></li>
                <li><a href="#"> Oculus </a></li>
                <li><a href="#"> Portal </a></li>
                <li><a href="#"> Instagram </a></li>
                <li><a href="#"> Bulletin </a></li>
                <li><a href="#"> ?????a ph????ng </a></li>
                <li><a href="#"> Chi???n d???ch g??y qu??? </a></li>
                <li><a href="#"> D???ch v??? </a></li>
                <li><a href="#"> Trung t??m th??ng tin b??? phi???u </a></li>
                <li><a href="#"> Nh??m </a></li>
                <li><a href="#"> Gi???i thi???u </a></li>
                <li><a href="#"> T???o qu???ng c??o </a></li>
                <li><a href="#"> T???o Trang </a></li>
                <li><a href="#"> Nh?? ph??t tri???n </a></li>
                <li><a href="#"> Quy???n ri??ng t?? </a></li>
                <li><a href="#"> Cookie </a></li>
                <li><a href="#"> L???a ch???n qu???ng c??o <i class="fa fa-info-circle" aria-hidden="true" title="T??m  hi???u v??? L???a ch???n qu???ng c??o"></i></a></li>
                <li><a href="#"> ??i???u kho???n </a></li>
                <li><a href="#"> Tr??? gi??p </a></li>
                <li><a href="#"> T???i th??ng tin li??n h??? l??n & ?????i t?????ng kh??ng ph???i ng?????i d??ng </a></li>
                <li><a href="#"> C??i ?????t </a></li>
                <li><a href="#"> Nh???t k?? ho???t ?????ng </a></li>
            </ul>
        </div>
        <div style="margin:0;font-size:11px;font-family:inherit;padding-top:20px;padding-bottom:20px;">
            <span style="font-weight:100;">Meta ?? <?php print date("Y") ?></span>
        </div>
    </div>
</div>
<div style="background-color:rgba(0,0,0,0.2);margin:0;padding:0;width:100%;height:100%;position:absolute;top:0;left:0;display:none" id="lang-show-option">
    <div style="background-color:white;margin:auto;width:600px;height:700px;margin-top:100px;border-radius:5px;" id="lang-show-option-active">
        <div style="background-color:#7474de;margin:0;border-radius:5px 5px 0px 0px;">
            <b style="padding:10px 20px;display:inline-block;color:white;">Ch???n ng??n ng??? c???a b???n</b>
        </div>
        <div style="margin:0;height:612px;">
            <div style="display:flex;margin:0;padding:10px 20px;">
                <div style="margin:0;">
                    <p style="font-size:12px;margin-right:18px;color:black;">Ng??n ng??? ???????c ????? xu???t</p>
                </div>
                <div style="display:flex;margin:0;">
                    <div class="recomand-lang"><a>Ti???ng Vi???t ???</a></div>
                    <div class="recomand-lang"><a>??????(??????)</a></div>
                    <div class="recomand-lang"><a>English (UK)</a></div>
                    <div class="recomand-lang"><a>Espa??ol</a></div>
                </div>
            </div>
            <hr style="border-top: dotted 1px;margin-top:0;" />
        </div>
        
        <div style="background-color:#b7b2b2;height:50px;margin:0;text-align:right;">
            <button onclick="close_lang_option()" id="close-show-more-lang">????ng</button>
        </div>
    </div>
</div>
<script>
    let birthday = document.getElementById("birthday-help")
    let icon1 = document.getElementById("birthday")
    
    icon1.onclick = function(){
        if(birthday.style.display == "none"){
            birthday.style.display = "inline-block"
        }
    }

    let sex = document.getElementById("sex-help")
    let icon2 = document.getElementById("sex")
    
    icon2.onclick = function(){
        if(sex.style.display == "none"){
            sex.style.display = "inline-block"
        }
    }

    let body = document.body.addEventListener('click', function(){
        sex.style.display = "none"
        birthday.style.display = "none"
    }, true); 

    function checkEmail() { 
        var email = document.getElementById('email'); 
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
        if (!filter.test(email.value)) { 
                // alert('Hay nhap dia chi email hop le.\nExample@gmail.com');
            email.focus; 
            return false; 
        }
        else{ 
                // alert('OK roi day, Email nay hop le.'); 
            return true;
        } 
    } 

    document.addEventListener("keyup", function(){
        var els = document.getElementsByClassName("text-prosess")
        Array.prototype.forEach.call(els, function(el) {
            // console.log(el.value)
            if( el.value != "" ){
                el.style.borderColor = "black"
            }else el.style.borderColor = "red"

            if( el.getAttribute("id") == "email"){
                var confirm_email = document.getElementById("confirm-email")
                if( checkEmail() ) {
                    confirm_email.style.display = "block"
                }else confirm_email.style.display = "none"
            }
        })
    });
    let sexs = document.getElementsByName("sex")
    Array.prototype.forEach.call(sexs, function(sex){
        sex.addEventListener("click", function(){
            sexs = document.querySelector('input[name="sex"]:checked')
            var confirm_sex = document.getElementById("confirm-sex")
            if( sex.value == "none"){
                confirm_sex.style.display = "block"    
            }else confirm_sex.style.display = "none"
        })
    })
    

    function close_lang_option(){
        var lang_show = document.getElementById("lang-show-option")
        lang_show.style.display = "none"
    }

    function show_lang_option(){
        var lang_show = document.getElementById("lang-show-option")
        lang_show.style.display = "block"
    }

</script>
</body>
</html>