<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="/css/output.css" rel="stylesheet" />
  <link
    rel="stylesheet"
    href="/icons/fontawesome-free-7.1.0-web/css/all.min.css"
  />
</head>

<body class="p-4 dark:bg-[#222] lg:grid place-items-center min-h-screen">
  <div class="max-w-240 mx-auto my-4 p-4 shadow-2xl rounded-xl dark:bg-slate-600 duration-300 transition">
    <h1 class="font-black dark:text-white text-4xl text-center">
      Contact Form
    </h1>

    <div class="grid md:grid-cols-2 my-8 gap-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 order-2 md:order-1 items-start dark:text-white">
        <div class="flex items-center gap-2">
          <i class="fa-solid fa-location-dot text-3xl"></i>
          <div>
            <p class="font-bold">Visit Office</p>
            <address class="italic">123 Main Street, Kolkata, India</address>
          </div>
        </div>

        <div class="flex items-center gap-2">
          <i class="fa-solid fa-phone text-3xl"></i>
          <div>
            <p class="font-bold">Call Us</p>
            <i class="italic">
              <a
                class="hover:text-black transition duration-300"
                href="tel:+158 996 888"
              >
                +158 996 888
              </a>
            </i>
          </div>
        </div>

        <div class="flex items-center gap-2">
          <i class="fa-regular fa-message text-3xl"></i>
          <div>
            <p class="font-bold">Chat to Us</p>
            <i>
              <a
                class="hover:text-black transition duration-300"
                href="info@example.com"
              >
                info@example.com
              </a>
            </i>
          </div>
        </div>

        <div class="flex items-center gap-2">
          <i class="fa-solid fa-fax text-3xl"></i>
          <div>
            <p class="font-bold">Fax Us</p>
            <i>+1-548-2588</i>
          </div>
        </div>
      </div>

      <form
        method="POST"
        class="order-1 md:order-2"
        onsubmit="submitMessage(event)"
      >
        <div class="relative transition mb-8">
          <input
            required
            placeholder=" "
            class="rounded-lg outline-0 block w-full p-4 bg-gray-100 peer"
            id="name"
            type="text"
            name="name"
          />
          <label
            for="name"
            class="text-md font-semibold absolute left-4 transition-all duration-200 peer-focus:-top-6 dark:peer-focus:text-white peer-placeholder-shown:top-4 peer-placeholder-shown:text-black -top-6 text-white"
          >
            Name<span class="text-red-500">*</span>
          </label>
          <p class="text-red-500" id="name-error"></p>
        </div>

        <div class="relative transition mb-8">
          <input
            required
            placeholder=" "
            class="rounded-lg outline-0 block w-full p-4 bg-gray-100 peer"
            id="email"
            type="email"
            name="email"
            pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$"
          />
          <label
            for="email"
            class="text-md font-semibold absolute left-4 transition-all duration-200 peer-focus:-top-6 dark:peer-focus:text-white peer-placeholder-shown:top-4 peer-placeholder-shown:text-black -top-6 text-white"
          >
            Email<span class="text-red-500">*</span>
          </label>
          <p class="text-red-500" id="email-error"></p>
        </div>

        <div class="relative transition mb-8">
          <textarea
            placeholder=" "
            class="rounded-lg outline-0 block w-full p-4 bg-gray-100 peer"
            id="message"
            type="text"
            name="message"
            minlength="20"
            required
          ></textarea>
          <label
            for="name"
            class="text-md font-semibold absolute left-4 transition-all duration-200 peer-focus:-top-6 dark:peer-focus:text-white peer-placeholder-shown:top-4 peer-placeholder-shown:text-black -top-6 text-white"
          >
            Message<span class="text-red-500">*</span>
          </label>
          <p class="text-red-500" id="message-error"></p>
        </div>

        <button
          id="submitter"
          class="cursor-pointer bg-slate-600 border dark:border-white transition hover:bg-slate-700 w-full p-4 text-white mb-8 rounded-lg"
        >
          Submit
        </button>
      </form>
    </div>
  </div>

  <dialog
    class="top-1/2 left-1/2 -translate-1/2 p-4 rounded-2xl"
    id="message-popup"
  >
    <p></p>
    <form method="dialog">
      <button
        class="cursor-pointer px-4 py-2 rounded-2xl bg-black text-white mt-4"
      >
        Close
      </button>
    </form>
  </dialog>

  <button
    onclick="changeTheme()"
    id="theme-btn"
    class="cursor-pointer hidden md:inline-block transition hover:bg-slate-700 px-4 py-2 bg-slate-600 fixed bottom-4 right-4 rounded-2xl text-white"
  >
    Change Theme🌙
  </button>

  <script src="/js/script.js"></script>
</body>
</html>
