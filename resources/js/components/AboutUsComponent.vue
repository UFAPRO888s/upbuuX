<template>
  <div class="grid grid-cols-1 px-4 md:px-[286px]">
    <div class="text-center mb-10">
      <h1 class="text-[50px] text-primarybuu font-medium uppercase pb-2">
        โครงสร้างการบริหาร
      </h1>
    </div>
    <div class="grid grid-cols-3 gap-20 justify-items-stretch mb-10">
      <div class="rounded-xl text-center">
        <img
          class="w-full h-auto object-cover rounded-xl"
          src="/images/About_Us/vasin3.jpg"
        />
      </div>
      <div class="col-span-2 place-self-center text-center">
        <div>
          <div class="m-auto text-center text-neutralbuu">
            <p class="text-2xl">
              " The idea is to change raw data into information,<br />and then use that
              information to get insight. "
            </p>
          </div>
        </div>
        <div>
          <div class="flex justify-end text-center text-neutralbuu pt-20">
            <p class="text-lg">
              นายวศิน ยุวนะเตมีย์<br />คณบดีคณะวิทยาศาสตร์และศิลปศาสตร์<br />(ที่ปรึกษาโครงการ)
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-start my-10">
      <h1 class="text-[40px] text-primarybuu font-medium uppercase pb-2">คณะกรรมการ</h1>
    </div>
    <div class="grid grid-cols-3 gap-20 justify-items-stretch mb-10">
      <div v-for="item in dataAboutUs" :key="item.id">
        <div class="rounded-xl text-center pb-5">
          <img
            class="w-full h-auto object-cover rounded-xl"
            :src="item.imgUrl"
            :alt="item.alt"
          />
        </div>
        <div class="text-center text-neutralbuu">
          <p class="text-lg">{{ item.name }}<br />{{ item.positions }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const dataAboutUs = [
  {
    id: 1,
    name: "นางสาวภัทราพร ทองนิ่ม  ",
    positions: "ผู้รับผิดชอบโครงการ",
    href: "#",
    imgUrl: "/images/About_Us/a.aun.jpg",
    alt: "a.aun ผู้รับผิดชอบโครงการ",
  },
  {
    id: 2,
    name: "นายไพฑูรย์ ศรีนิล",
    positions: "กรรมการ",
    href: "#",
    imgUrl: "/images/About_Us/phaitoon.jpg",
    alt: "phaitoon กรรมการ",
  },
  {
    id: 3,
    name: "นายธนพล พุกเส็ง",
    positions: "กรรมการ",
    href: "#",
    imgUrl: "/images/About_Us/thanaphon.jpg",
    alt: "thanaphon กรรมการ",
  },
  {
    id: 4,
    name: "นายวินัย ปุริเกษม",
    positions: "กรรมการ",
    href: "#",
    imgUrl: "/images/About_Us/winai.jpg",
    alt: "winai กรรมการ",
  },
  {
    id: 5,
    name: "นายอภิสิทธิ์ โคตะนันท์",
    positions: "กรรมการ",
    href: "#",
    imgUrl: "/images/About_Us/apisit.jpg",
    alt: "apisit กรรมการ",
  },
  {
    id: 6,
    name: "นางสาวอารีย์ โคตะนันท์",
    positions: "กรรมการ",
    href: "#",
    imgUrl: "/images/About_Us/aree-n.jpg",
    alt: "aree กรรมการ",
  },
  {
    id: 7,
    name: "นางสาวเพ็ญนภา ไกรฉวี",
    positions: "กรรมการ",
    href: "#",
    imgUrl: "/images/About_Us/pennapa.jpg",
    alt: "pennapa กรรมการ",
  },
  {
    id: 8,
    name: "นางสาวกัลยารัตน์ เชี่ยวชาญ",
    positions: "กรรมการและเลขานุการ",
    href: "#",
    imgUrl: "/images/About_Us/kanyarat.jpg",
    alt: "kanyarat กรรมการและเลขานุการ",
  },
];
</script>
