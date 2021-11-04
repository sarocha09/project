@extends('layouts.front_end.index')
@section('index')

<div class="container">
            <div class="row">

                <div class ="col-4">
                    <img class="img-fluid" src="front_end/assets/img/stbr.jpg" />
                    <span class="caption text-muted">รูปใช้เพื่อการโฆษณาเท่านั้น</span>
                </div>
                <div class="col-8">
                    <h2 class="section-heading">ร้านบ้านกาแฟสด</h2> 
                    <p>ร้านกาแฟเป็นร้านที่ใครหลาย ๆ คนพบเจอได้ในทุกสถานที่
                        ไม่ว่าจะเป็นสวนสาธารณะ ห้างสรรพสินค้า หรือริมข้างทาง
                        ซึ่งร้านบ้านกาแฟสดเป็นร้านข้างทางที่ใช้บ้านพักอาศัย
                        มาดัดแปลงต่อเติมเป็นร้านกาแฟขนาดเล็กและ
                        มีราคาย่อมเยา ที่ทุกคนสามารถเข้าถึงได้</p>
                </div>

            </div>

            <div class ="row">
                <div class="col">
                    <h2 class="section-heading text-center">เมนูแนะนำ</h2> 
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <img src="front_end/assets/img/hotcoffee.jpg" class="img-thumbnail">
                    <h5 class="text-center">ลาเต้</h5>
                </div>
                <div class="col-4">
                    <img src="front_end/assets/img/cherry.jpg" class="img-thumbnail">
                    <h5 class="text-center">อิตาเลี่ยนโซดา</h5>
                </div>
                <div class="col-4">
                    <img src="front_end/assets/img/coco.jpg" class="img-thumbnail">
                    <h5 class="text-center">โกโก้</h5>
                </div>
           </div>

            <div class="row">
                <div class="col-md">
                    <h2 class="section-heading text-center">เกล็ดความรู้</h2>
                    <h4 class="text-center">สายพันธุ์เมล็ดกาแฟที่ดีที่สุด</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="front_end/assets/img/arabica.jpg" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">อราบิก้า (Arabica)</h5>
                                    <p class="card-text">คนที่รักความกลมกล่อมกลิ่นหอมและรสชาตินุ่มละมุนของกาแฟมักจะตกหลุมรัก
                                        กาแฟสายพันธุ์นี้ นิยมปลูกมากที่สุดเป็นอันดับหนึ่งของโลกถึงร้อยละ 80 
                                        และเป็นกาแฟที่ได้รับความนิยมสูงสุดในร้านกาแฟสดทั่วโลก ขณะเดียวกันอราบิก้าก็ปลูกยากและต้องการการควบคุมด้านคุณภาพการปลูกมากเช่นกันอราบิก้าให้ปริมาณคาเฟอีนไม่เข้มข้นมากอยู่ในระดับ1.1-1.7เปอร์เซ็นต์ 
                                        ตามถิ่นกำเนิดอราบิก้าเป็นกาแฟที่รักอากาศเย็นสบายราว15-25 องศาฯ 
                                        จึงเหมาะที่จะปลูกในที่ภูมิประเทศสูงกว่า1,000 เมตรจากระดับน้ำทะเล และแน่นอนว่าราคาของกาแฟก็แตกต่างตามคุณภาพของแต่ละสายพันธุ์อีกด้วย</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title">โรบัสต้า (Robusta)</h5>
                                <p class="card-text">คอกาแฟเข้มข้นตัวจริงไม่ควรพลาดกาแฟโรบัสต้าเพราะมีปริมาณความเข้มข้นของคาเฟอีนถึง 2-4.5 เปอร์เซ็นต์ อีกทั้งบอดี้ (ความเข้มข้น) 
                                    ยังให้รสชาติเข้มกว่าอราบิก้าด้วยความเข้มสูงกว่าเท่าตัวของโรบัสต้าจึงทำให้
                                    นิยมนำไปผลิตเป็นกาแฟสำเร็จรูป (Instant Coffee) และ 3 in 1
                                    วันไหนที่คุณต้องเดินทางไกลหรืออยากให้ร่างกายตื่นตัวตลอดวัน แค่เลือกกาแฟโรบัสต้าชงดื่มเองก็พร้อมลุยทุกเส้นทาง 
                                    รวมถึงการนำไปผสมกับกาแฟสายพันธุ์อื่นที่เรียกว่า “กาแฟเบลนด์” (Blend Coffee)นั่นเอง โรบัสต้าดูแลง่ายปลูกง่ายรักอากาศร้อนชื้นแบบภาคใต้ของบ้านเรา แข็งแรง ทนทานต่อโรคต่างๆ ได้ดี ให้ผลผลิตสูง และการดูแลรักษาก็ไม่ยากด้วยนะ</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="front_end/assets/img/robusta (1).jpg" class="img-fluid rounded-start">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection