<template>
  <div class="grid grid-cols-1 px-4 md:px-[300px]">
    <div class="text-center mb-10">
      <h1 class="text-[40px] text-primarybuu font-medium uppercase pb-2">
        งานวิจัยพร้อมใช้
      </h1>
    </div>
    <div class="grid grid-cols-2 gap-x-5 gap-y-10 justify-items-start mb-10">
      <a
        v-for="item in dataLinkBox"
        :key="item.id"
        :href="item.href"
        class="pb-2"
        target="_blank"
      >
        <div class="text-start text-neutralbuu px-6">
          <h2 v-if="item.id == 4" class="text-xl text-start font-bold capitalize pb-2">
            {{ item.name }}สีเขียว จังหวัดจันทบุรี
          </h2>
          <h2 v-else class="text-xl font-bold capitalize pb-2">{{ item.name }}</h2>
          <p class="text-lg text-start line-clamp-2">
            {{ item.description }}
          </p>
        </div>
      </a>
    </div>
  </div>
</template>

<script setup>
const dataLinkBox = [
  {
    id: 1,
    name: "Water Consumption Assessment of Mangosteen: A Bottom-Up Approach",
    description: "งานวิจัยเกี่ยวการหาค่าการใช้น้ำ water footprint ในสวนมังคุด",
    href: "https://www.chanthaburi.buu.ac.th/datacenter/008.pdf",
  },
  {
    id: 2,
    name:
      "การปลดปล่อยก๊าซเรือนกระจก และการใช้น้ำ ในการผลิตมังคุดผลสดของวิสาหกิจชุมชนตำบลตรอกนอง จังหวัดจันทบุรี",
    description:
      "งานวิจัยเกี่ยวกับการปล่อยก๊าซเรือนกระจกและการใช้น้ำได้จากการผลิตมังคุดผลสด",
    href: "https://oaezone.oae.go.th/assets/portals/15/news/303/1_FullReport.pdf",
  },
  {
    id: 3,
    name: "การศึกษาปริมาณการใช้น้ำของทุเรียนพันธุ์หมอนทอง",
    description: "งานวิจัยเกี่ยวกับการใช้น้ำของทุเรียนพันธุ์หมอนทอง",
    href: "https://www.chanthaburi.buu.ac.th/datacenter/009.pdf",
  },
  {
    id: 4,
    name: "การศึกษาการปล่อยก๊าซเรือนกระจกของผลิตภัณฑ์ทุเรียนผลสดในพื้นที่เมือง",
    description: "งานวิจัยเกี่ยวกับการปล่อยก๊าซเรือนกระจกของทุเรียนพันธุ์หมอนทอง",
    href: "https://oaezone.oae.go.th/assets/portals/15/news/195/1_carbon_durian58.pdf",
  },
];
</script>
