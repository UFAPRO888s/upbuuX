@extends('layouts.app')
@section('content')
    <div class="mx-auto">
        <bannercomponent status="1" data="test" src="{{ asset('images/Home/banner_1920x980.jpg') }}"></bannercomponent>
    </div>
    <div class="mx-auto w-full h-auto">
        <div class="grid grid-cols-1 px-4 md:px-72 pt-96 pb-40 bg-top bg-cover"
            style="background-image: url('/images/Home/bg data center 2.png');">
            <div class="grid grid-cols-1 md:grid-cols-7  gap-10">
                <div class="md:col-span-4 rounded-xl text-center"><img class="w-auto h-full object-cover rounded-xl"
                        src="{{ asset('images/Contact_Us/IMG_3847.jpg') }}" alt="About Us Image"></div>
                <div class="md:col-span-3 mx-auto text-left bg-white/80 rounded-xl">
                    <div class="overflow-y-auto p-10 h-[506px]">
                        <h2 class="text-3xl text-primarybuu font-bold capitalize pb-2 text-center">About Us</h2>
                        <p class="text-lg text-neutralbuu indent-12 text-justify">
                            ศูนย์ข้อมูลภาคตะวันออก คือ สิ่งที่พวกเราต้องการสร้างสิ่งอำนวยความสะดวกด้านข้อมูลที่สามารถนำไปใช้ประโยชน์ได้ง่าย โดยให้ทุกคนมองภาพเป็นตู้เก็บลิ้นชักของข้อมูล ที่ศูนย์ข้อมูลวางแผนการใช้เพื่อจัดเก็บแอปพลิเคชันและข้อมูลที่สำคัญในภาคตะวันออกในอดีตจนถึงปัจจุบันโดยที่เน้นกระบวนการจัดตั้งศูนย์ข้อมูลที่เป็นมิตรกับสิ่งแวดล้อม ลดการปล่อยก๊าซคาร์บอนไดออกไซด์ การออกแบบของศูนย์ข้อมูลขึ้นอยู่กับทรัพยากรการจัดเก็บข้อมูลที่ช่วยให้สามารถส่งมอบแอปพลิเคชันและข้อมูลที่ใช้ร่วมกันได้ รวมไปถึงการสร้างเครือข่ายของข้อมูลจากหน่วยงานต่าง ๆ ดังนั้นแรงบันดาลของพวกเราในการสร้างศูนย์ข้อมูล คือ การที่เกษตรกรหรือคนที่สนใจสามารถเข้าถึงแหล่งแหล่งข้อมูลในด้านต่าง ๆ แล้วสามารถนำไปสร้างสิ่งที่เป็นประโยชน์แก่ประเทศชาติต่อไปได้ในอนาคต
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto mb-[160px] w-full ">
        <div class="grid grid-cols-1 px-4 md:px-20">
            <div class="text-center mb-10">
                <h1 class="text-[50px] text-primarybuu font-bold uppercase pb-2">ข้อมูลให้บริการ</h1>
            </div>
            <dataservices></dataservices>
        </div>
    </div>
@endsection
