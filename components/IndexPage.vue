<template>
  <div class="container mx-auto py-6">
    <!-- <button class="px-5 py-2 border rounded hover:bg-purple-300">Hi 👋</button> -->
    <div
      class="bg-white dark:bg-sky-900 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl"
    >
      <div>
        <span
          class="inline-flex items-center justify-center p-2 bg-cyan-600 rounded-md shadow-lg"
        >
          <svg
            class="h-6 w-6 text-white"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            aria-hidden="true"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
            ></path>
          </svg>
        </span>
      </div>
      <h3
        class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight"
      >
        DeerShark Technology Studio. 鹿鯊工作室
      </h3>
      <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
        Contact us: deershark.tech@gmail.com
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: "Index",
};
</script>
