<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        .head {
            margin: 20px;
            background-color: rgb(146, 218, 228);
            padding-left: 80px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container ">
        <div class="head">
            <form>
                <h1 style="text-align: center;">แบบฟอร์มกรอกข้อมูลส่วนตัว</h1>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault01">เลขบัตรประจำตัวประชาชน*</label>
                        <input type="text" class="form-control" id="IDnumber" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationDefault01">คำนำหน้านาม*</label>
                        <select class="custom-select " id="prefix " required>
                            <option value="" selected>---เลือก---</option>
                            <option value="1">เด็กหญิง</option>
                            <option value="2">เด็กชาย</option>
                            <option value="3">นาย</option>
                            <option value="4">นาง</option>
                            <option value="5">นางสาว</option>
                            <option value="6">อื่นๆ</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="validationDefault01">ชื่อ*</label>
                        <input type="text" class="form-control" id="fname" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault02">นามสกุล*</label>
                        <input type="text" class="form-control" id="lname" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="inlineFormCustomSelectPref">เพศ*</label>
                        <select class="custom-select " id="sex" required>
                            <option value="" selected>-----เลือกเพศ-----</option>
                            <option value="1">ชาย</option>
                            <option value="2">หญิง</option>
                            <option value="3">ไม่ระบุ</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="inlineFormCustomSelectPref">ศาสนา*</label>
                        <select class="custom-select " id="religion" required>
                            <option value="" selected>-----เลือกศาสนา-----</option>
                            <option value="1">พุทธ</option>
                            <option value="2">อิสลาม</option>
                            <option value="3">คริส</option>
                            <option value="4">ฮินดู</option>
                        </select>
                    </div>


                </div>
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <label for="validationDefault01">บ้านเลขที่*</label>
                        <input type="text" class="form-control" id="hnumber" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationDefault01">หมู่ที่*</label>
                        <input type="text" class="form-control" id="moo" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault01">ถนน*</label>
                        <input type="text" class="form-control" id="road" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault01">ตำบล/แขวง*</label>
                        <input type="text" class="form-control" id="sdistrict" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault01">อำเภอ/เขต*</label>
                        <input type="text" class="form-control" id="district" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault03">จังหวัด*</label>
                        <select class="custom-select " id="province" required>
                            <option value="" selected>----- เลือกจังหวัด -----</option>
                            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                            <option value="กระบี่">กระบี่ </option>
                            <option value="กาญจนบุรี">กาญจนบุรี </option>
                            <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                            <option value="กำแพงเพชร">กำแพงเพชร </option>
                            <option value="ขอนแก่น">ขอนแก่น</option>
                            <option value="จันทบุรี">จันทบุรี</option>
                            <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                            <option value="ชัยนาท">ชัยนาท </option>
                            <option value="ชัยภูมิ">ชัยภูมิ </option>
                            <option value="ชุมพร">ชุมพร </option>
                            <option value="ชลบุรี">ชลบุรี </option>
                            <option value="เชียงใหม่">เชียงใหม่ </option>
                            <option value="เชียงราย">เชียงราย </option>
                            <option value="ตรัง">ตรัง </option>
                            <option value="ตราด">ตราด </option>
                            <option value="ตาก">ตาก </option>
                            <option value="นครนายก">นครนายก </option>
                            <option value="นครปฐม">นครปฐม </option>
                            <option value="นครพนม">นครพนม </option>
                            <option value="นครราชสีมา">นครราชสีมา </option>
                            <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                            <option value="นครสวรรค์">นครสวรรค์ </option>
                            <option value="นราธิวาส">นราธิวาส </option>
                            <option value="น่าน">น่าน </option>
                            <option value="นนทบุรี">นนทบุรี </option>
                            <option value="บึงกาฬ">บึงกาฬ</option>
                            <option value="บุรีรัมย์">บุรีรัมย์</option>
                            <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                            <option value="ปทุมธานี">ปทุมธานี </option>
                            <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                            <option value="ปัตตานี">ปัตตานี </option>
                            <option value="พะเยา">พะเยา </option>
                            <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                            <option value="พังงา">พังงา </option>
                            <option value="พิจิตร">พิจิตร </option>
                            <option value="พิษณุโลก">พิษณุโลก </option>
                            <option value="เพชรบุรี">เพชรบุรี </option>
                            <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                            <option value="แพร่">แพร่ </option>
                            <option value="พัทลุง">พัทลุง </option>
                            <option value="ภูเก็ต">ภูเก็ต </option>
                            <option value="มหาสารคาม">มหาสารคาม </option>
                            <option value="มุกดาหาร">มุกดาหาร </option>
                            <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                            <option value="ยโสธร">ยโสธร </option>
                            <option value="ยะลา">ยะลา </option>
                            <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                            <option value="ระนอง">ระนอง </option>
                            <option value="ระยอง">ระยอง </option>
                            <option value="ราชบุรี">ราชบุรี</option>
                            <option value="ลพบุรี">ลพบุรี </option>
                            <option value="ลำปาง">ลำปาง </option>
                            <option value="ลำพูน">ลำพูน </option>
                            <option value="เลย">เลย </option>
                            <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                            <option value="สกลนคร">สกลนคร</option>
                            <option value="สงขลา">สงขลา </option>
                            <option value="สมุทรสาคร">สมุทรสาคร </option>
                            <option value="สมุทรปราการ">สมุทรปราการ </option>
                            <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                            <option value="สระแก้ว">สระแก้ว </option>
                            <option value="สระบุรี">สระบุรี </option>
                            <option value="สิงห์บุรี">สิงห์บุรี </option>
                            <option value="สุโขทัย">สุโขทัย </option>
                            <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                            <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                            <option value="สุรินทร์">สุรินทร์ </option>
                            <option value="สตูล">สตูล </option>
                            <option value="หนองคาย">หนองคาย </option>
                            <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                            <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                            <option value="อุดรธานี">อุดรธานี </option>
                            <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                            <option value="อุทัยธานี">อุทัยธานี </option>
                            <option value="อุบลราชธานี">อุบลราชธานี</option>
                            <option value="อ่างทอง">อ่างทอง </option>
                            <option value="อื่นๆ">อื่นๆ</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault04">รหัสไปรษณีย์*</label>
                        <input type="number" class="form-control" id="zip" required>
                    </div>
                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label for="validationDefault05">โทรศัพท์บ้าน</label>
                            <input type="tel" class="form-control" id="hphone" name="phone" placeholder="0-2-123-4567 "
                                pattern="[0]{1}-[2]{1}-[0-9]{3}-[0-9]{4}" required>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="validationDefault05">โทรศัพท์มือถือ*</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="012-345-6789"
                                pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                        </div><br></br>

                        <div class="form-row">
                            <div class="col-md-5 col-md-offset-2">สาขาที่สนใจ*</div>

                            <div class="control-label" id="majer" required>
                                <label class="checkbox  ">
                                    <input type="checkbox" value="itd"> เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล
                                </label><br />
                                <label class="checkbox">
                                    <input type="checkbox" value="imi"> นวัตกรรมสารสนเทศทางการแพทย์
                                </label><br />
                                <label class="checkbox">
                                    <input type="checkbox" value="mta"> เทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม
                                </label><br />
                                <label class="checkbox">
                                    <input type="checkbox" value="dcm"> ดิจิทัลคอนเทนต์และสื่อ
                                </label><br />
                                <label class="checkbox">
                                    <input type="checkbox" value="comm"> นิเทศศาสตร์
                                </label><br />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6mb-3 " style="text-align:center;">
                    <button class="btn btn-primary" type="submit" id="btnsubmit">ตกลง</button>
                </div>


            </form>
        </div>


    </div>


</body>

<script>
    function btnsubmit_click() {
        var idnum = $("#IDnumber").val();
        
        var data = "{";
        data += '"idnum":"' + $("#IDnumber").val() + '"';
        
        


        data += "}";     
        console.log(JSON.parse(data));

    }
    $(() => {
        $("#btnsubmit").click(btnsubmit_click);
    });


</script>

</html>
