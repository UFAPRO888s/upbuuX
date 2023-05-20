@extends('layouts.app')
@section('content')
    <div class="mx-auto">
        <bannercomponent status="1" data="test" src="images/Contact_Us/banner_1920x980_02.jpg"></bannercomponent>
    </div>
    <div class="mx-auto w-full">
        <div class="grid grid-cols-1 bg-cover h-[130vh] bg-gradient-to-b"
            style="background-image: url('/images/Contact_Us/bg_contact_3.png')">
            <div class="flex flex-col justify-start items-center px-4 md:py-10 md:px-60">
                <div class="text-center bg-gradient-to-b from-white bg-opacity-60">
                    <div>
                        <div class="m-10 text-center text-primarybuu">
                            <h1 class="text-5xl font-semibold capitalize mb-5">ข้อมูลติดต่อ</h1>
                            <p class="text-2xl uppercase mb-5">contect us</p>
                            <img class="w-20 h-full inline items-center object-cover mb-5"
                                src="{{ asset('images/Contact_Us/icon-contact-us-01.png') }}">
                            <h2 class="text-3xl font-semibold capitalize mb-5">มหาวิทยาลัยบูรพา วิทยาเขตจันทบุรี</h2>
                            <p class="text-2xl uppercase mb-5">DATA CENTER BUU CHANTHABURI / อาคาร 100 ปี
                                สมเด็จพระศรีนครินทร์</p>
                            <div
                                class="flex gap-0 justify-center mt-28 mb-16 divide-x-2 place-items-stretch divide-primarybuu">
                                <div class="w-1/2 text-2xl text-end uppercase px-12">
                                    <p class="leading-relaxed">เลขที่ 57 หมู่ 1 ถนนชลประทาน<br>ตำบนโขมง
                                        อำเภอท่าใหม่<br>จังหวัดจันทบุรี รหัสไปรษณีย์ 22170</p>
                                </div>
                                <div class="w-1/2 text-2xl text-start uppercase px-12">
                                    <p class="leading-relaxed">โทรศัพท์ : 039-310000 ต่อ 4112<br>โทรสาร : 039-310128</p>
                                </div>
                            </div>
                            <div class="flex gap-0 justify-center my-10 ">
                                <div class="w-2/5 border-dashed border-t-2 border-primarybuu">
                                    <div class="flex justify-center space-x-5 py-10">
                                        <a class="text-gray-400 hover:text-gray-500">
                                            <span class="sr-only"></span>
                                            <img class="h-16 w-16 object-contain"
                                                src="{{ asset('/images/icon/facebook-icon.png') }}" alt="facebook" />
                                        </a>
                                        <a class="text-gray-400 hover:text-gray-500">
                                            <span class="sr-only"></span>
                                            <img class="h-16 w-16 object-contain"
                                                src="{{ asset('/images/icon/Line-icon.png') }}" alt="Line" />
                                        </a>
                                        <a class="text-gray-400 hover:text-gray-500">
                                            <span class="sr-only"></span>
                                            <img class="h-16 w-16 object-contain"
                                                src="{{ asset('/images/icon/youtube-icon.png') }}" alt="youtube" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1">
        <div class="text-center mb-10">
            <h1 class="text-[50px] text-primarybuu font-medium uppercase pb-2">ตำแหน่งที่ตั้ง</h1>
        </div>
        <div class="relative">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3893.5540248622483!2d101.92778641481824!3d12.611617191092773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3103799c1af73f59%3A0xaf14abd70d2c8e7f!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lia4Li54Lij4Lie4LiyIOC4p-C4tOC4l-C4ouC4suC5gOC4guC4leC4iOC4seC4meC4l-C4muC4uOC4o-C4tQ!5e0!3m2!1sth!2sth!4v1684586706703!5m2!1sth!2sth"
                width="1920" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="absolute bottom-10 left-10">
            <p class="text-lg text-neutralbuu">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus
                aut
                similique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quis et quam
                eveniet ducimus dolorum maiores porro.</p>
        </div>
    </div>
@endsection
